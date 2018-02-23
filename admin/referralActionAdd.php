<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$patientID = mysqli_real_escape_string($mysqli, $_POST['PatientID']);
	$patientDoctor = mysqli_real_escape_string($mysqli, $_POST['doctor']);
	$patientHospital = mysqli_real_escape_string($mysqli, $_POST['hospital']);
	$patientHospitalAddress = mysqli_real_escape_string($mysqli, $_POST['hospitalAddress']);
	$patientTelephone = mysqli_real_escape_string($mysqli, $_POST['telephone']);
	$patientContactPerson = mysqli_real_escape_string($mysqli, $_POST['contactPerson']);
	$patientCases = mysqli_real_escape_string($mysqli, $_POST['cases']);
	$caseDescription = mysqli_real_escape_string($mysqli, $_POST['caseDescription']);
	$date = date('Y-m-d');
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO referral (PatientID, RefDoctor, RefHospital, RefAddress, RefTelephone, RefContactPerson, RefCases, RefCasesDec, Ref_Date ) VALUES('$patientID','$patientDoctor','$patientHospital','$patientHospitalAddress','$patientTelephone','$patientContactPerson','$patientCases','$caseDescription','$date')");
		//display success message
		echo "<script>alert('Outgoing Refferal Added Successfully');window.location.href='referral.php';</script>";
		
	
}
?>