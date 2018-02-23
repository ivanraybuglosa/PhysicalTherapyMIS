<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
	$query = Mysqli_Query($mysqli, "SELECT * FROM `patient` WHERE `PatientName`='$patientName'") or die(mysql_error());

		  if( ! mysqli_num_rows($query) ) 
		  { echo 'No results found.';}
		  else{   
		   $patient_list = mysqli_fetch_assoc($query);
		   $patientID = $patient_list['PatientID'];    
		  }
	$patientDoctor = mysqli_real_escape_string($mysqli, $_POST['doctor']);
	$patientHospital = mysqli_real_escape_string($mysqli, $_POST['hospital']);
	$patientHospitalAddress = mysqli_real_escape_string($mysqli, $_POST['hospitalAddress']);
	$patientTelephone = mysqli_real_escape_string($mysqli, $_POST['telephone']);
	$patientContactPerson = mysqli_real_escape_string($mysqli, $_POST['contactPerson']);
	$patientCases = mysqli_real_escape_string($mysqli, $_POST['cases']);
	$caseDescription = mysqli_real_escape_string($mysqli, $_POST['caseDescription']);
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO referral (PatientID, RefDoctor, RefHospital, RefAddress, RefTelephone, RefContactPerson, RefCases, RefCasesDec ) VALUES('$patientID','$patientDoctor','$patientHospital','$patientHospitalAddress','$patientTelephone','$patientContactPerson','$patientCases','$caseDescription')");
		//display success message

		 header("Location:Referral.php");
	
}
?>