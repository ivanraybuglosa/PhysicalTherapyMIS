
<?php
$connection = mysqli_connect('localhost', 'root', '', 'ptmisdb');
$date = date("Y-m-d H:i:s");

$filename = 'ptmisdb.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle, filesize($filename));

$sql = explode(';', $contents);
foreach ($sql as $query){
    $result = mysqli_query($connection, $query);


}
fclose($handle);
date_default_timezone_set('Asia/Manila');
$date=date("F j, Y, g:i a");
$connection->query("INSERT INTO `backup` VALUES('', 'Successfully imported database', '$date')") or die(mysqli_error());
echo "<script>alert('Successfully imported database!')</script>";
echo "<script>document.location='../index.php'</script>";  


?>