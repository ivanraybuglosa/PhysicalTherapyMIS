<?php

$year = date('Y');
if(isset($_GET['year']))
{
	$year=$_GET['year'];
}

$conn = new mysqli("localhost", "root", "", "ptmisdb") or die(mysqli_error());
$q1 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Stroke' && `year` = '$year'") or die(mysqli_error());
$q1 = $q1->fetch_array();
$q2 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Spinal Cord Injuries' && `year` = '$year'") or die(mysqli_error());
$q2 = $q2->fetch_array();
$q3 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Traumatic Brain Injuries' && `year` = '$year'") or die(mysqli_error());
$q3 = $q3->fetch_array();
$q4 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Peripheral Nerve Injuries' && `year` = '$year'") or die(mysqli_error());
$q4 = $q4->fetch_array();
$q5 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Low Back Pains' && `year` = '$year'") or die(mysqli_error());
$q5 = $q5->fetch_array();
$q6 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Scoliosis' && `year` = '$year'") or die(mysqli_error());
$q6 = $q6->fetch_array();
$q7 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Myofascial Pain Syndrome' && `year` = '$year'") or die(mysqli_error());
$q7 = $q7->fetch_array();
$q8 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Frozen Shoulder' && `year` = '$year'") or die(mysqli_error());
$q8 = $q8->fetch_array();
$q9 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Fracture' && `year` = '$year'") or die(mysqli_error());
$q9 = $q9->fetch_array();
$q10 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Arthritis' && `year` = '$year'") or die(mysqli_error());
$q10 = $q10->fetch_array();
$q11 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Bells Palsy' && `year` = '$year'") or die(
	mysqli_error());
$q11 = $q11->fetch_array();
$q12 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Cerebral Palsy' && `year` = '$year'") or die(
	mysqli_error());
$q12 = $q12->fetch_array();
$q13 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Parkinsons Disease' && `year` = '$year'") or die(
	mysqli_error());
$q13 = $q13->fetch_array();
$q14 = $conn->query("SELECT COUNT(*) as total FROM `patient` WHERE `PatientCases` = 'Guillane Barre Syndorme' && `year` = '$year'") or die(
	mysqli_error());
$q14 = $q14->fetch_array();


?>
<script type="text/javascript"> 
	window.onload = function() { 
		$("#cases").CanvasJSChart({
			theme: "light2",
			animationEnabled: true,
			animationDuration: 1000,
			exportFileName: "Bacteriological Status", 
			exportEnabled: true,
			title: { 
				text: "Bago Physical Therapy Rehab Care Center - Year <?php echo $year?>",
				fontSize: 20
			}, 
			subtitles:[
				{
					text: "Patient Cases - Year <?php echo $year?>"
				}
			],
			legend :{ 
				verticalAlign: "center", 
				horizontalAlign: "left" 
			}, 
			data: [ 
				{ 
					type: "doughnut", 
					showInLegend: true, 
					toolTipContent: "{label} <br/> {y}", 
					indexLabel: "{y}", 
					dataPoints: [ 
						{ label: "Stroke",  y: 
						 <?php
	if($q1 == ""){
		echo 0;
	}else{
		echo $q1['total'];
	}	
						 ?>, legendText: "Stroke"},

						{ label: "Spinal Cord Injuries",  y: 
						 <?php 
						 if($q2 == ""){
							 echo 0;
						 }else{
							 echo $q2['total'];
						 }	
						 ?>, legendText: "Spinal Cord Injuries"},
						{ label: "Traumatic Brain Injuries",  y: 
						 <?php 
						 if($q3 == ""){
							 echo 0;
						 }else{
							 echo $q3['total'];
						 }	
						 ?>, legendText: "Traumatic Brain Injuries"},
						{ label: "Peripheral Nerve Injuries",  y: 
						 <?php 
						 if($q4 == ""){
							 echo 0;
						 }else{
							 echo $q4['total'];
						 }	
						 ?>, legendText: "Peripheral Nerve Injuries"},
						{ label: "Low Back Pains",  y: 
						 <?php 
						 if($q5 == ""){
							 echo 0;
						 }else{
							 echo $q5['total'];
						 }	
						 ?>, legendText: "Low Back Pains"},
						{ label: "Scoliosis",  y: 
						 <?php 
						 if($q6 == ""){
							 echo 0;
						 }else{
							 echo $q6['total'];
						 }	
						 ?>, legendText: "Scoliosis"},
						 { label: "Myofascial Pain Syndrome",  y: 
						 <?php 
						 if($q7 == ""){
							 echo 0;
						 }else{
							 echo $q7['total'];
						 }	
						 ?>, legendText: "Myofascial Pain Syndrome"},

						 { label: "Frozen Shoulder",  y: 
						 <?php 
						 if($q8 == ""){
							 echo 0;
						 }else{
							 echo $q8['total'];
						 }	
						 ?>, legendText: "Frozen Shoulder"},						 
						{ label: "Fracture",  y: 
						 <?php 
						 if($q9 == ""){
							 echo 0;
						 }else{
							 echo $q9['total'];
						 }	
						 ?>, legendText: "Fracture"},

						 { label: "Arthritis",  y: 
						 <?php 
						 if($q10 == ""){
							 echo 0;
						 }else{
							 echo $q10['total'];
						 }	
						 ?>, legendText: "Arthritis"},

						 { label: "Bells Palsy",  y: 
						 <?php 
						 if($q11 == ""){
							 echo 0;
						 }else{
							 echo $q11['total'];
						 }	
						 ?>, legendText: "Bells Palsy"},

						 { label: "Cerebral Palsy",  y: 
						 <?php 
						 if($q12 == ""){
							 echo 0;
						 }else{
							 echo $q12['total'];
						 }	
						 ?>, legendText: "Cerebral Palsy"},

						 { label: "Parkinsons Disease",  y: 
						 <?php 
						 if($q13 == ""){
							 echo 0;
						 }else{
							 echo $q13['total'];
						 }	
						 ?>, legendText: "Parkinsons Disease"},

						 { label: "Guillane Barre Syndorme",  y: 
						 <?php 
						 if($q14 == ""){
							 echo 0;
						 }else{
							 echo $q14['total'];
						 }	
						 ?>, legendText: "Guillane Barre Syndorme"}
					] 
				} 
			] 
		}); 
	} 
</script>