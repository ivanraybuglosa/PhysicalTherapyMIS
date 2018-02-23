<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
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
	// checking empty fields
	if(empty($patientName) || empty($patientAddress) || empty($patientBday)|| empty($patientProfession)|| empty($patientCivilStatus)) {
		
		echo "Materialize.toast('I am a toast!', 3000, 'rounded');"; 
		 echo "<script>window.location.href='patient.php';</script>";	
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO patient (PatientName, PatientAddress, PatientBirthdate, PatientProfession, PatientGender, PatientCivilStatus, PatientDoctor,PatientHospital,PatientReferralAddress,PatientTelephone,PatientContactPerson,PatientCases ) VALUES('$patientName','$patientAddress','$patientBday','$patientProfession','$patientGender','$patientCivilStatus','$patientDoctor','$patientHospital','$patientHospitalAddress','$patientTelephone','$patientContactPerson','$patientCases')");
		//display success message
		sleep(5);
		 header("Location:patient.php");
	}
}
?>