<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
	$query = mysqli_Query($mysqli, "SELECT * FROM `patient` WHERE `PatientName`='$patientName'") or die(mysql_error());

		  if( ! mysqli_num_rows($query) ) 
		  { echo 'No results found.';}
		  else{   
		   $patient_list = mysqli_fetch_assoc($query);
		   $patientID = $patient_list['PatientID'];
		   $patientName = $patient_list['PatientName'];   
		   $patientCase = $patient_list['PatientCases'];    
		  }
	
		 header("Location:ManageEvaluation.php"); 
	}
?>