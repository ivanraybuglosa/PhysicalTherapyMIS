<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
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
			"INSERT INTO planofcare(PatientID, PT_ID,POCTreatment,POCSessionDate,POCBloodPressure, POCHeartRate, POCRespiratoryRate, POCPulse, POCAssessment, POCPlan, POCNextSchedDate, POCTreatmentBill,POCTime,POCStatus,POC_Subjective)
			VALUES('$PatientID','$PTName','$Treatment','$sessionDate','$bloodPressure','$heartRate','$respiratoryRate','$pulse','$assessment','$plan','$nextSchedDate1','$billing','$time','Unpaid','$subjective')");
		echo "<script>alert('Plan of Care Added Successfully');window.location.href='ManagePlanCare.php';</script>";
	}
?>

<!-- 'manageplancare.php' -->
