<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['evalid']);
	$PatientID = mysqli_real_escape_string($mysqli, $_POST['PatientID']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$evalSession = mysqli_real_escape_string($mysqli, $_POST['evalSession']);
	$caseDescription = mysqli_real_escape_string($mysqli, $_POST['caseDescription']);
	$PatientIllness = mysqli_real_escape_string($mysqli, $_POST['PatientIllness']);
	
	$Speech = mysqli_real_escape_string($mysqli, $_POST['Speech']);
	$Edema = mysqli_real_escape_string($mysqli, $_POST['Edema']);
	$Endurance = mysqli_real_escape_string($mysqli, $_POST['Endurance']);
	$Vision = mysqli_real_escape_string($mysqli, $_POST['Vision']);
	$MuscleTone = mysqli_real_escape_string($mysqli, $_POST['MuscleTone']);
	$Posture = mysqli_real_escape_string($mysqli, $_POST['Posture']);
	$Hearing = mysqli_real_escape_string($mysqli, $_POST['Hearing']);
	$Coordination = mysqli_real_escape_string($mysqli, $_POST['Coordination']);
	$Skin = mysqli_real_escape_string($mysqli, $_POST['Skin']);
	$EvalAssessment = mysqli_real_escape_string($mysqli, $_POST['EvalAssessment']);
	$EvalPlan = mysqli_real_escape_string($mysqli, $_POST['EvalPlan']);

	$ROMLeftShoulder = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftShoulder']));
	$ROMRightShoulder = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightShoulder']));
	$ROMLeftElbow = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftElbow']));
	$ROMRightElbow = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightElbow']));
	$ROMLeftForearm = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftForearm']));
	$ROMRightForearm = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightForearm']));
	$ROMLefthandFingers = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLefthandFingers']));
	$ROMRighthandFingers = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRighthandFingers']));
	$ROMLeftWrist = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftWrist']));
	$ROMRightWrist = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightWrist']));
	$ROMLeftTrunk = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftTrunk']));
	$ROMRightTrunk = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightTrunk']));
	$ROMHip = strval(mysqli_real_escape_string($mysqli, $_POST['ROMHip']));
	$ROMLeftKnee = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftKnee']));
	$ROMRightKnee = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightKnee']));
	$ROMLeftAnkle = strval(mysqli_real_escape_string($mysqli, $_POST['ROMLeftAnkle']));
	$ROMRightAnkle = strval(mysqli_real_escape_string($mysqli, $_POST['ROMRightAnkle']));
	$ROMNeck = strval(mysqli_real_escape_string($mysqli, $_POST['ROMNeck']));

	$MMTLeftShoulder = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftShoulder']));
	$MMTRightShoulder = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightShoulder']));
	$MMTLeftElbow = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftElbow']));
	$MMTRightElbow = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightElbow']));
	$MMTLeftForearm = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftForearm']));
	$MMTRightForearm = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightForearm']));
	$MMTLefthandFingers = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLefthandFingers']));
	$MMTRighthandFingers = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRighthandFingers']));
	$MMTLeftWrist = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftWrist']));
	$MMTRightWrist = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightWrist']));
	$MMTLeftTrunk = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftTrunk']));
	$MMTRightTrunk = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightTrunk']));
	$MMTHip = strval(mysqli_real_escape_string($mysqli, $_POST['MMTHip']));
	$MMTLeftKnee = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftKnee']));
	$MMTRightKnee = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightKnee']));
	$MMTLeftAnkle = strval(mysqli_real_escape_string($mysqli, $_POST['MMTLeftAnkle']));
	$MMTRightAnkle = strval(mysqli_real_escape_string($mysqli, $_POST['MMTRightAnkle']));
	$MMTNeck = strval(mysqli_real_escape_string($mysqli, $_POST['MMTNeck']));

	$date = date('Y-m-d');
		//insert data to database	
		$result = mysqli_query($mysqli, 
			"UPDATE evaluation SET  
			PatientID = '$PatientID', 
			EvalPT = '$PTName', 
			EvalSessionQty = '$evalSession', 
			EvalChiefComplaint = '$caseDescription', 
			EvalHistoryIllness = '$PatientIllness', 
			EvalSpeech = '$Speech', 
			EvalEdema = '$Edema', 
			EvalEndurance = '$Endurance', 
			EvalVision = '$Vision', 
			EvalMuscleTone = '$MuscleTone',
			EvalPosture ='$Posture', 
			EvalHearing = '$Hearing', 
			EvalCoordination = '$Coordination', 
			EvalSkin = '$Skin', 
			ROMLeftShoulder = '$ROMLeftShoulder', 
			ROMRightShoulder = '$ROMRightShoulder', 
			ROMLeftElbow = '$ROMLeftElbow',
			ROMRightElbow = '$ROMRightElbow', 
			ROMLeftForearm = '$ROMLeftForearm', 
			ROMRightForearm = '$ROMRightForearm',
			ROMLefthandFingers = '$ROMLefthandFingers',
			ROMRighthandFingers = '$ROMRighthandFingers', 
			ROMLeftWrist = 'ROMLeftWrist', 
			ROMRightWrist = '$ROMRightWrist',
			ROMLeftTrunk = '$ROMLeftTrunk',
			 ROMRightTrunk = '$ROMRightTrunk', 
			 ROMHip = '$ROMHip', 
			 ROMLeftKnee = '$ROMLeftKnee', 
			 ROMRightKnee = '$ROMRightKnee', 
			 ROMLeftAnkle = '$ROMLeftAnkle', 
			 ROMRightAnkle = '$ROMRightAnkle', 
			 ROMNeck = '$ROMNeck', 
			 MMTLeftShoulder = '$MMTLeftShoulder', 
			 MMTRightShoulder = '$MMTRightShoulder', 
			 MMTLeftElbow = '$MMTLeftElbow',
			 MMTRightElbow = '$MMTRightElbow', 
			 MMTLeftForearm = '$MMTLeftForearm', 
			 MMTRightForearm ='$MMTRightForearm', 
			 MMTLefthandFingers = '$MMTLefthandFingers',
			  MMTLeftWrist = '$MMTLeftWrist', 
			  MMTRightWrist = '$MMTRightWrist', 
			  MMTLeftTrunk = '$MMTLeftTrunk', 
			  MMTRightTrunk = '$MMTRightTrunk',
			   MMTHip = '$MMTHip', 
			   MMTLeftKnee = '$MMTLeftKnee', 
			   MMTRightKnee = '$MMTRightKnee', 
			   MMTLeftAnkle = 'MMTLeftAnkle', 
			   MMTNeck = '$MMTNeck',  
			   Eval_Date = '$date', 
			   EvalPlan = '$EvalPlan', 
			   EvalAssessment = '$EvalAssessment' 
			   WHERE EvalID = '$id'") or die(mysqli_error($mysqli));
			  
			
		echo "<script>alert('Evaluation Updated Successfully');window.location.href='manageevaluation.php';</script>";
	}
?>