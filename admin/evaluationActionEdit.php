<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
	$id = mysqli_real_escape_string($mysqli, $_POST['EvalID']);
	$PatientID = mysqli_real_escape_string($mysqli, $_POST['PatientID']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$caseDescription = mysqli_real_escape_string($mysqli, $_POST['caseDescription']);
	$Edema = mysqli_real_escape_string($mysqli, $_POST['Edema']);
	$Posture = mysqli_real_escape_string($mysqli, $_POST['Posture']);
	$Skin = mysqli_real_escape_string($mysqli, $_POST['Skin']);
	$EvalAssessment = mysqli_real_escape_string($mysqli, $_POST['Assessment']);
	$EvalPlan = mysqli_real_escape_string($mysqli, $_POST['Plan']);
	$ROM = mysqli_real_escape_string($mysqli, $_POST['ROM']);
	$MMT = mysqli_real_escape_string($mysqli, $_POST['MMT']);



	$date = date('Y-m-d');
		//insert data to database
		$result = mysqli_query($mysqli,
			"UPDATE evaluation SET
			PatientID = '$PatientID',
			PT_ID = '$PTName',
			EvalChiefComplaint = '$caseDescription',
			EvalEdema = '$Edema',
			EvalSkin = '$Skin',
			ROM = '$ROM',
			MMT = '$MMT',
			EvalPosture ='$Posture',
			EvalPlan = '$EvalPlan',
			EvalAssessment = '$EvalAssessment'
			   WHERE EvalID = '$id'") or die(mysqli_error($mysqli));


		echo "<script>alert('Evaluation Updated Successfully');window.location.href='manageevaluation.php';</script>";
	}
?>
