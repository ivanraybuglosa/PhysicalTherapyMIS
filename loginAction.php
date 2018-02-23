<?php
session_start();
include("config.php"); //Establishing connection with our database

$error = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
if(empty($_POST["username"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($mysqli, $username);
$password = mysqli_real_escape_string($mysqli, $password);
$password = md5($password);

//Check username and password from database
$sql="SELECT * FROM users WHERE username='$username' and password='$password'";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) == 1)
{
while ($row = mysqli_fetch_array($result)) {
	if ($row['userType'] == 'admin'){ header("location: admin/index.php");}
	else { header("location: pt/index.php");}
}
}else{ echo "<script>alert('username and password does not match!'); location.href='login.php';</script>"; }
}
}

?>