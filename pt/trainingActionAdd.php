<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$TrainingName = mysqli_real_escape_string($mysqli, $_POST['TrainingName']);
	$TrainingDesc = mysqli_real_escape_string($mysqli, $_POST['TrainingDesc']);
	
		$result = mysqli_query($mysqli, "INSERT INTO training(training_Name, training_Desc) VALUES('$TrainingName','$TrainingDesc')");
		 header("Location:training.php");
	}

?>