<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$id =mysqli_real_escape_string($mysqli, $_POST['userID']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$userType = mysqli_real_escape_string($mysqli, $_POST['position']);

		//insert data to database
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name', username='$username',
			password=MD5('$password'), userType='$userType' WHERE userID='$id'");
		//display success message

		 echo "<script>alert('User Information Successfully modified!');window.location.href='user.php';</script>";

}
?>
