<?php
	
	include("config.php");
	if(isset($_POST['Submit'])) {
	$PTID =  mysqli_real_escape_string($mysqli, $_POST['PTID']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$PTAddress = mysqli_real_escape_string($mysqli, $_POST['PTAddress']);
	$PTGender = mysqli_real_escape_string($mysqli, $_POST['PTGender']);
	$PTBday =  date('Y-m-d',strtotime($PTBday));
	$PTCivilStatus = mysqli_real_escape_string($mysqli, $_POST['PTCivilStatus']);
	
	mysqli_query($mysqli, "UPDATE pt set PT_Name='$PTName', PT_Address='$PTAddress', PT_Gender='$PTGender',
	PT_Birthday='$PTBday', PT_CivilStatus='$PTCivilStatus' where PT_ID='$PTID'" );

		 header("Location:physicalTherapist.php");
}
?>