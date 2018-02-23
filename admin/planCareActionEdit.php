<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$id =mysqli_real_escape_string($mysqli, $_POST['POCID']);
	$PatientID = mysqli_real_escape_string($mysqli, $_POST['PatientID']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$Treatment = mysqli_real_escape_string($mysqli, $_POST['treatmentDescription']);
	$bloodPressure = mysqli_real_escape_string($mysqli, $_POST['bloodPressure']);
	$heartRate = mysqli_real_escape_string($mysqli, $_POST['heartRate']);
	$respiratoryRate = mysqli_real_escape_string($mysqli, $_POST['respiratoryRate']);
	$pulse = mysqli_real_escape_string($mysqli, $_POST['pulse']);
	$assessment = mysqli_real_escape_string($mysqli, $_POST['assessment']);
	$subjective = mysqli_real_escape_string($mysqli, $_POST['subjective']);
	$plan = mysqli_real_escape_string($mysqli, $_POST['plan']);
	$nextSchedDate1 = mysqli_real_escape_string($mysqli, $_POST['nextSchedDate']);
	$nextSchedDate1 =  date('Y-m-d',strtotime($nextSchedDate1));
	$billing = mysqli_real_escape_string($mysqli, $_POST['billing']);
	$time =  $_POST['schedTime'];
	$time =date("g:i a",strtotime($time));
	$sessionDate = date('Y-m-d');

		$result = mysqli_query($mysqli,

			"UPDATE planofcare SET PatientID = '$PatientID', POCPT = '$PTName',POCSessionDate = '$sessionDate',POCTreatment = '$Treatment', POCBloodPressure = '$bloodPressure', POCHeartRate ='$heartRate' , POCRespiratoryRate = '$respiratoryRate', POCPulse = '$pulse', POCAssessment = '$assessment', POCPlan = '$plan', POCNextSchedDate ='$nextSchedDate1' , POCTreatmentBill = '$billing', POCTime = '$time', POCStatus = 'Unpaid', POC_Subjective = '$subjective' WHERE POCID = '$id'");
		echo "<script>alert('Plan of Care Updated Successfully');window.location.href=;</script>";
	}
?>
<!--
manageplancare.php -->
