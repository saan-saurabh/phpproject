<?php
$conn = mysqli_connect('localhost','root','','organisation');
session_start();

$course=$_REQUEST['coursename'];
$email1=$_SESSION['email'];

$query="SELECT * from users WHERE email='$email1'";
$result = mysqli_query($conn, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$name=$row['name'];
$email=$row['email'];
$contact=$row['phone'];
$city=$row['city'];
$college=$row['collegeName'];

$qy = "INSERT INTO user_course(name, email, contact, city, college, coursepurchase) VALUES ('$name', '$email', '$contact','$city','$college', '$course')";

	$data = mysqli_query($conn, $qy) or die(mysqli_error($conn));
                if($data)
			{
				echo '<script language="javascript">';
				echo 'alert("Data is successfully sent")';
				echo '</script>';
			}
			else
			{
				echo '<script language="javascript">';
				echo 'alert("All fields are required.")';
				echo '</script>';
			}

?>