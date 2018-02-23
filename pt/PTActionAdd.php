<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$patientAddress = mysqli_real_escape_string($mysqli, $_POST['patientAddress']);
	$patientBday = mysqli_real_escape_string($mysqli, $_POST['patientBday']);
	$patientBday =  date('Y-m-d',strtotime($patientBday));
	$patientCivilStatus = mysqli_real_escape_string($mysqli, $_POST['patientCivilStatus']);
	$patientGender = mysqli_real_escape_string($mysqli, $_POST['patientGender']);
	
	// checking empty fields
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO pt(PT_Name, PT_Address, PT_Gender, PT_Birthday, PT_CivilStatus) VALUES('$PTName','$patientAddress','$patientGender','$patientBday','$patientCivilStatus')");
		//display success message
		 header("Location:physicalTherapist.php");
	}
?>