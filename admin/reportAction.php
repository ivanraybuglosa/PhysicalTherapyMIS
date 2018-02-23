<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$query = mysqli_Query($mysqli, "SELECT * FROM `patient` WHERE `PatientName`='$patientName'") or die(mysql_error());

		  if( ! mysqli_num_rows($query) ) 
		  { echo 'No results found.';}
		  else{   
		   $patient_list = mysqli_fetch_assoc($query);
		   $patientID = $patient_list['PatientID'];    
		  }
	$tableReport = mysqli_real_escape_string($mysqli, $_POST['tableReport']);
	$startDate =  date('Y-m-d',strtotime($startDate));
	$endDate =  date('Y-m-d',strtotime($endDate));

		//insert data to database	
		$result = mysqli_query($mysqli, "SELECT * FROM $tableReport WHERE PatientID = $patientID");
		 
	}
?>