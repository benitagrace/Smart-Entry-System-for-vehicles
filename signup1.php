<?php
include "connection .php";
if(isset($_POST['username']) &&isset($_POST['password']))
{
$user_name=$_POST['username'];
$u_password=$_POST['password'];
$query=mysqli_query($con,"insert into login(username,password) values('$user_name','$u_password')") or die(mysqli_error($con));
if($query)
	echo "values inserted successfully";
}
header("location:eg2.php");
?>