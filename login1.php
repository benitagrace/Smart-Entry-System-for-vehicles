<?php
include "connection .php";
session_start();
if(isset($_POST['username']) &&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($con,"select * from login where username='$username' and password='$password'") ;
	$row=mysqli_num_rows($query);
	if($row==1)
		{$_SESSION['password']=$password;
		header("location:permission.php");
	}
	else
		{
			$_SESSION['invalid']=1;
		header("location:eg2.php");
	    }
}
else
		
		{
			$_SESSION['invalid']=1;
		header("location:eg2.php");
	    }
?>