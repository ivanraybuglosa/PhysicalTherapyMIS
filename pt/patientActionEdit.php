<?php
	
	include("config.php");
	if(isset($_POST['Submit'])) {
	$patientID =  mysqli_real_escape_string($mysqli, $_POST['patientID']);
	$patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
	$patientAddress = mysqli_real_escape_string($mysqli, $_POST['patientAddress']);
	$patientBday = mysqli_real_escape_string($mysqli, $_POST['patientBday']);
	$patientBday =  date('Y-m-d',strtotime($patientBday));
	$patientProfession = mysqli_real_escape_string($mysqli, $_POST['patientProfession']);
	$patientCivilStatus = mysqli_real_escape_string($mysqli, $_POST['patientCivilStatus']);
	$patientGender = mysqli_real_escape_string($mysqli, $_POST['patientGender']);
	$patientDoctor = mysqli_real_escape_string($mysqli, $_POST['doctor']);
	$patientHospital = mysqli_real_escape_string($mysqli, $_POST['hospital']);
	$patientHospitalAddress = mysqli_real_escape_string($mysqli, $_POST['hospitalAddress']);
	$patientTelephone = mysqli_real_escape_string($mysqli, $_POST['telephone']);
	$patientContactPerson = mysqli_real_escape_string($mysqli, $_POST['contactPerson']);
	$patientCases = mysqli_real_escape_string($mysqli, $_POST['cases']);			
	mysqli_query($mysqli, "UPDATE patient set PatientName='$patientName', PatientBirthdate='$patientBday', PatientGender='$patientGender',
	PatientAddress='$patientAddress', PatientCivilStatus='$patientCivilStatus', PatientProfession='$patientProfession' ,PatientDoctor='$patientDoctor',PatientHospital='$patientHospital',PatientReferralAddress='$patientHospitalAddress',PatientTelephone='$patientTelephone',PatientContactPerson='$patientContactPerson',PatientCases='$patientCases'
	where PatientID='$patientID'" );

		 header("Location:patient.php");
}
?>