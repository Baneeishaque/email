<?php 
require 'config.php';
$email=$_POST['email'];

$stmt = $db->query("SELECT `no`, `email` FROM `sub` WHERE `email`='$email'");
$row_count = $stmt->rowCount();


if($row_count>0)
	{
		echo 'You Can Download The File';
	}
	else
	{
		echo 'You Are Not Subscribed to Our Blog';
	}
?>