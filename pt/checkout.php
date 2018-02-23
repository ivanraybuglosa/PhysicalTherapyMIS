<?php 
	include("config.php");
	$id = $_GET['id'];
	mysqli_query($mysqli, "UPDATE planofcare SET POCStatus = 'Paid' where POCID = '$id'");
	header("location:transaction.php");

?>