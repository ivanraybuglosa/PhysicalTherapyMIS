<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$position = mysqli_real_escape_string($mysqli, $_POST['position']);

	// checking empty fields
		// if all the fields are filled (not empty)

		//insert data to database
		$result = mysqli_query($mysqli, "INSERT INTO users(name, username, password, userType) VALUES('$name','$username','$password','$position')");
		//display success message
		echo "<script>alert('User Information Successfully saved!');window.location.href='user.php';</script>";

	}
?>
