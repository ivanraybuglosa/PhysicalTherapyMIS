<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id =mysqli_real_escape_string($mysqli, $_POST['refid']);
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
		$result = mysqli_query($mysqli, "UPDATE referral set PatientID='$patientID', RefDoctor='$patientDoctor', RefHospital='$patientHospital',
			RefAddress='$patientHospitalAddress', RefTelephone='$patientTelephone', RefContactPerson='$patientContactPerson' ,RefCases='$patientCases',RefCasesDec='$caseDescription',Ref_Date = '$date'
			where RefID='$id'");
		//display success message

		 header("Location:referral.php");
	
}
?>