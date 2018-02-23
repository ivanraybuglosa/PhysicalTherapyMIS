<?php
	
	include("config.php");
	if(isset($_POST['Submit'])) {
	$TrainingID =  mysqli_real_escape_string($mysqli, $_POST['TrainingID']);
	$TrainingName =  mysqli_real_escape_string($mysqli, $_POST['TrainingName']);
	$TrainingDesc = mysqli_real_escape_string($mysqli, $_POST['TrainingDesc']);		
	mysqli_query($mysqli, "UPDATE training set training_Name = '$TrainingName', training_Desc='$TrainingDesc' where training_ID='$TrainingID'" );

		 header("Location:training.php");
}
?>