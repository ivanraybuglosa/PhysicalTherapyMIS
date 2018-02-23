<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=ptmisDB', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM patient WHERE PatientName LIKE (:keyword) ORDER BY PatientID ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$PatientName = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['PatientName']);
	$PatientID1 = $rs['PatientID'];
	// add new option
    echo '<ul onclick="set_item(\''.str_replace("'", "\'", $rs['PatientName']).'\')">'.$PatientName.'</ul>';
}
?>