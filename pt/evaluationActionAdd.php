<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$patientName = mysqli_real_escape_string($mysqli, $_POST['patientName']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$query = mysqli_Query($mysqli, "SELECT * FROM `patient` WHERE `PatientName`='$patientName'") or die(mysql_error());

		  if( ! mysqli_num_rows($query) ) 
		  { echo 'No results found.';}
		  else{   
		   $patient_list = mysqli_fetch_assoc($query);
		   $patientID = $patient_list['PatientID'];    
		  }
	
	$evalSession = mysqli_real_escape_string($mysqli, $_POST['evalSession']);
	$caseDescription = mysqli_real_escape_string($mysqli, $_POST['ChiefComplaint']);

	if(isset($_POST['PatientIllness'])){
		$PatientIllness = implode(", ", $_POST['PatientIllness']);
	}
	$Speech = mysqli_real_escape_string($mysqli, $_POST['Speech']);
	$Edema = mysqli_real_escape_string($mysqli, $_POST['Edema']);
	$Endurance = mysqli_real_escape_string($mysqli, $_POST['Endurance']);
	$Vision = mysqli_real_escape_string($mysqli, $_POST['ChiefComplaint']);
	$MuscleTone = mysqli_real_escape_string($mysqli, $_POST['Vision']);
	$Posture = mysqli_real_escape_string($mysqli, $_POST['MuscleTone']);
	$Hearing = mysqli_real_escape_string($mysqli, $_POST['Hearing']);
	$Coordination = mysqli_real_escape_string($mysqli, $_POST['Coordination']);
	$Skin = mysqli_real_escape_string($mysqli, $_POST['Skin']);

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

	$remarks = mysqli_real_escape_string($mysqli, $_POST['remarks']);
			
		//insert data to database	
		$result = mysqli_query($mysqli, 
			"INSERT INTO evaluation (PatientID, EvalPT, EvalSessionQty, EvalChiefComplaint, EvalHistoryIllness,EvalSpeech, EvalEdema,EvalEndurance,EvalVision,EvalMuscleTone,EvalPosture,EvalHearing,EvalCoordination,EvalSkin,ROMLeftShoulder,ROMRightShoulder,ROMLeftElbow,ROMRightElbow,ROMLeftForearm,ROMRightForearm,ROMLefthandFingers,ROMRighthandFingers,ROMLeftWrist,ROMRightWrist,
			ROMLeftTrunk,ROMRightTrunk,ROMHip,ROMLeftKnee,ROMRightKnee,ROMLeftAnkle,ROMRightAnkle,ROMNeck,MMTLeftShoulder,MMTRightShoulder,MMTLeftElbow,MMTRightElbow,MMTLeftForearm,MMTRightForearm,MMTLefthandFingers,MMTRighthandFingers,MMTLeftWrist,MMTRightWrist,MMTLeftTrunk,MMTRightTrunk,MMTHip,MMTLeftKnee,MMTRightKnee,MMTLeftAnkle,MMTRightAnkle,MMTNeck,Remarks) 
			VALUES('$patientID','$PTName','$evalSession','$caseDescription','$PatientIllness','$Speech','$Edema','$Endurance','$Vision','$MuscleTone','$Posture','$Hearing','$Coordination','$Skin','$ROMLeftShoulder','$ROMRightShoulder','$ROMLeftElbow','$ROMRightElbow','$ROMLeftForearm','$ROMRightForearm','$ROMLefthandFingers','$ROMRighthandFingers','$ROMLeftWrist','$ROMRightWrist','$ROMLeftTrunk','$ROMRightTrunk','$ROMHip','$ROMLeftKnee','$ROMRightKnee','$ROMLeftAnkle','$ROMRightAnkle','$ROMNeck','$MMTLeftShoulder','$MMTRightShoulder','$MMTLeftElbow','$MMTRightElbow','$MMTLeftForearm','$MMTRightForearm','$MMTLefthandFingers','$MMTRighthandFingers','$MMTLeftWrist','$MMTRightWrist','$MMTLeftTrunk','$MMTRightTrunk','$MMTHip','$MMTLeftKnee','$MMTRightKnee','$MMTLeftAnkle','$MMTRightAnkle','$MMTNeck','$remarks')");
		 header("Location:ManageEvaluation.php"); 
	}
?>