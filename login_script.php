<?php
require("common.php");



$con = mysqli_connect('localhost','root','','organisation');
if($con)
{
	echo "Connection succesfull";
}
else
{
	echo "error";
}

$name = $_POST['user'];
$pass = $_POST['password'];
$design=$_POST['select'];

if($design=='Admin'){

$q = "SELECT * FROM admin WHERE email = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['email'] = $name;
	header('location:admin.php');
}
else
{
	header('location:Model login.php');
}
}
elseif($design=='User'){
$q = "SELECT * FROM users WHERE email = '$name' && password = '$pass' ";

$result = mysqli_query($con,$q);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['email'] = $name;
	header('location:afterlogin.php');
}
else
{
	header('location:Model login.php');
}
}

?>