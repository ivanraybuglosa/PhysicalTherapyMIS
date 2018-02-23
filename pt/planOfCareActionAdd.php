<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
	$query = mysqli_Query($mysqli, "SELECT * FROM `patient` WHERE `PatientName`='$patientName'") or die(mysql_error());

		  if( ! mysqli_num_rows($query) ) 
		  { echo 'No results found.';}
		  else{   
		   $patient_list = mysqli_fetch_assoc($query);
		   $patientID = $patient_list['PatientID'];    
		  }
	$dateSched = date('Y/m/d',  strtotime($_POST['dateSched']));
	$sessionDate =  date("Y/m/d");
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$training = mysqli_real_escape_string($mysqli, $_POST['training']);
	$sets = mysqli_real_escape_string($mysqli, $_POST['sets']);
	$repetitions = mysqli_real_escape_string($mysqli, $_POST['repetitions']);
	$bloodPressure = mysqli_real_escape_string($mysqli, $_POST['bloodPressure']);
	$heartRate = mysqli_real_escape_string($mysqli, $_POST['heartRate']);
	$respiratoryRate = mysqli_real_escape_string($mysqli, $_POST['respiratoryRate']);
	$pulse = mysqli_real_escape_string($mysqli, $_POST['pulse']);
	$subjective = mysqli_real_escape_string($mysqli, $_POST['subjective']);
	$objective = mysqli_real_escape_string($mysqli, $_POST['objective']);
	$assessment = mysqli_real_escape_string($mysqli, $_POST['assessment']);
	$plan = mysqli_real_escape_string($mysqli, $_POST['plan']);
	$nextSchedDate = date('Y/m/d',  strtotime($_POST['nextSchedDate']));
	$billing = mysqli_real_escape_string($mysqli, $_POST['billing']);

			
		//insert data to database	
		$result = mysqli_query($mysqli, 
			"INSERT INTO planofcare(PatientID, POCPT, POCDateSched, POCSessionDate, POCTreatment, POCRepeatitions, POCSets, POCBloodPressure, POCHeartRate, POCRespiratoryRate, POCPulse, POCSubjective, POCObjective, POCAssessment, POCPlan, POCNextSchedDate, POCTreatmentBill) 
			VALUES('$patientID','$PTName','$dateSched','$sessionDate','$training','$repetitions','$sets','$bloodPressure','$heartRate','$respiratoryRate','$pulse','$subjective','$objective','$assessment','$plan','$nextSchedDate','$billing')");
		 header("Location:manageplancare.php"); 
	}
?>