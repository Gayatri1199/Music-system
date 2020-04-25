<?php

session_start();
header('location:mk1.php');

$con = mysqli_connect('localhost','root','');
 mysqli_select_db($con,'useregistration');
 $name = $_POST['user'];
 $password =$_POST['password'];


 $s = "select * from music where name='$name' ";

 $result = mysqli_query($con,$s);

 $num = mysqli_num_rows($result);


 if($num == 1)
 {
 	echo "user already taken";
 }
else
{
	$reg=" insert into music (name,password) values('$name','$password')";
	mysqli_query($con,$reg);
	echo "Registration succesfull";
}




?>