<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['submit'])) {
	$PatientID = mysqli_real_escape_string($mysqli,$_POST['PatientID']);
	$PTName = mysqli_real_escape_string($mysqli, $_POST['PTName']);
	$caseDescription = mysqli_real_escape_string($mysqli, $_POST['ChiefComplaint']);
	if(isset($_POST['PatientIllness'])){
	foreach($_POST['PatientIllness'] as $selected){
		if ($selected == "Alcoholism"){mysqli_query($mysqli, "UPDATE illnesscounter SET Alcoholism = Alcoholism + 1");}
		if ($selected == "Anemia"){mysqli_query($mysqli, "UPDATE illnesscounter SET Anemia = Anemia + 1");}
		if ($selected == "Anxiety"){mysqli_query($mysqli, "UPDATE illnesscounter SET Anxiety = Anxiety + 1");}
		if ($selected == "Asthma"){mysqli_query($mysqli, "UPDATE illnesscounter SET Asthma = Asthma + 1");}
		if ($selected == "Arthritis-rheumatoid"){mysqli_query($mysqli, "UPDATE illnesscounter SET Arthritis-rheuma = Arthritis-rheuma + 1");}
		if ($selected == "Blood Clot"){mysqli_query($mysqli, "UPDATE illnesscounter SET BloodClot = BloodClot + 1");}
		if ($selected == "Bronchitis"){mysqli_query($mysqli, "UPDATE illnesscounter SET Bronchitis = Bronchitis + 1");}
		if ($selected == "Bowel disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET Bowel = Bowel + 1");}
		if ($selected == "Blood Transfusion"){mysqli_query($mysqli, "UPDATE illnesscounter SET BloodTrans = BloodTrans + 1");}
		if ($selected == "Arthritis-osteo"){mysqli_query($mysqli, "UPDATE illnesscounter SET Arthritis-osteo = Arthritis-osteo	 + 1");}
		if ($selected == "Cancer"){mysqli_query($mysqli, "UPDATE illnesscounter SET Cancer = Cancer + 1");}
		if ($selected == "Cardiac Arrythmia"){mysqli_query($mysqli, "UPDATE illnesscounter SET Cardiac = Cardiac + 1");}
		if ($selected == "Congestive Heart Failure"){mysqli_query($mysqli, "UPDATE illnesscounter SET Congestive = Congestive + 1");}
		if ($selected == "Coronary Artery Disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET Coronary = Coronary + 1");}
		if ($selected == "Cerebrovascular Disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET Cerebrvascular = Cerebrvascular + 1");}
		if ($selected == "Eye Disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET EyeDisease = EyeDisease + 1");}
		if ($selected == "Diabetes"){mysqli_query($mysqli, "UPDATE illnesscounter SET Diabetes = Diabetes + 1");}
		if ($selected == "Depression"){mysqli_query($mysqli, "UPDATE illnesscounter SET Depression = Depression + 1");}
		if ($selected == "Emphysema"){mysqli_query($mysqli, "UPDATE illnesscounter SET Emphysema = Emphysema + 1");}
		if ($selected == "Chronic Obstructive Pulmonary Disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET ChronicPulmonary = ChronicPulmonary + 1");}
		if ($selected == "Fibromyalgia"){mysqli_query($mysqli, "UPDATE illnesscounter SET Fibromyalgia = Fibromyalgia + 1");}
		if ($selected == "Gout"){mysqli_query($mysqli, "UPDATE illnesscounter SET Gout = Gout + 1");}
		if ($selected == "GERD"){mysqli_query($mysqli, "UPDATE illnesscounter SET GERD = GERD + 1");}
		if ($selected == "Gallbladder problem(s)"){mysqli_query($mysqli, "UPDATE illnesscounter SET Gallblader = Gallblader + 1");}
		if ($selected == "Heart Attack"){mysqli_query($mysqli, "UPDATE illnesscounter SET HeartAttack = HeartAttack + 1");}
		if ($selected == "HIV/AIDS"){mysqli_query($mysqli, "UPDATE illnesscounter SET Hiv = Hiv + 1");}
		if ($selected == "Hormone Problem(s)"){mysqli_query($mysqli, "UPDATE illnesscounter SET Hormone = Hormone + 1");}
		if ($selected == "Hypertension"){mysqli_query($mysqli, "UPDATE illnesscounter SET Hypertension = Hypertension + 1");}
		if ($selected == "Hypercholesterolemia"){mysqli_query($mysqli, "UPDATE illnesscounter SET Hypercholesterol = Hypercholesterol + 1");}
		if ($selected == "Hypothyroidism"){mysqli_query($mysqli, "UPDATE illnesscounter SET Hypothyroidism = Hypothyroidism + 1");}
		if ($selected == "Kidney Disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET Kidney = Kidney + 1");}
		if ($selected == "Liver Disorder-Cirrhosis"){mysqli_query($mysqli, "UPDATE illnesscounter SET LiverCirrhosis = LiverCirrhosis + 1");}
		if ($selected == "Liver Disorder-Hepatitis"){mysqli_query($mysqli, "UPDATE illnesscounter SET LiverHepatitis = LiverHepatitis + 1");}
		if ($selected == "Thyroid Disease"){mysqli_query($mysqli, "UPDATE illnesscounter SET ThyroidDisease = ThyroidDisease + 1");}
		if ($selected == "Osteomyelitis"){mysqli_query($mysqli, "UPDATE illnesscounter SET Osteomyelitis = Osteomyelitis + 1");}
		if ($selected == "Stomach Ulcer"){mysqli_query($mysqli, "UPDATE illnesscounter SET StomachUlcer = StomachUlcer + 1");}
		if ($selected == "Pacemaker"){mysqli_query($mysqli, "UPDATE illnesscounter SET Pacemaker = Pacemaker + 1");}
		if ($selected == "Parkinson's"){mysqli_query($mysqli, "UPDATE illnesscounter SET Parkinsons = Parkinsons + 1");}
		if ($selected == "SeizuresEpilepsy"){mysqli_query($mysqli, "UPDATE illnesscounter SET Seizures = Seizures + 1");}
		if ($selected == "Osteoporosis/Osteopenia"){mysqli_query($mysqli, "UPDATE illnesscounter SET Osteoporosis = Osteoporosis + 1");}

		}
		$PatientIllness = implode(", ", $_POST['PatientIllness']);
	}
	$Edema = mysqli_real_escape_string($mysqli, $_POST['Edema']);
	$Posture = mysqli_real_escape_string($mysqli, $_POST['Posture']);
	$Skin = mysqli_real_escape_string($mysqli, $_POST['Skin']);
	$Assessment = mysqli_real_escape_string($mysqli, $_POST['Assessment']);
	$Plan = mysqli_real_escape_string($mysqli, $_POST['Plan']);
	$MMT = mysqli_real_escape_string($mysqli, $_POST['MMT']);
	$ROM = mysqli_real_escape_string($mysqli, $_POST['ROM']);

	$remarks = mysqli_real_escape_string($mysqli, $_POST['OtherOcculars']);
	$date = date('Y-m-d');
		mysqli_query($mysqli,
			"INSERT INTO evaluation (PatientID, PT_ID, EvalChiefComplaint, EvalHistoryIllness, EvalEdema,EvalPosture,EvalPlan,EvalSkin,EvalAssessment,MMT,ROM,Remarks)
			VALUES('$PatientID','$PTName','$caseDescription','$PatientIllness','$Edema','$Posture','$Plan','$Skin','$Assessment','$MMT','$ROM','$remarks')");

				 //display success message
		 		echo "<script>alert('Patient Record Added Successfully');window.location.href='ManageEvaluation.php';</script>";
	}
?>
