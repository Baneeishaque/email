<?php 
require 'config.php';


$user=$_POST['user'];
$pass=$_POST['pass'];

$stmt = $db->query("SELECT `user`, `pass` FROM `login` WHERE `user`='$user' AND `pass`='$pass'");
$row_count = $stmt->rowCount();

if($row_count>0)
	{
	   echo 'Login Successful';
	   header("Location: dashboard.php");
	}
	else
	{
		echo 'Email Or Password Was Incorrect';
	}
?>