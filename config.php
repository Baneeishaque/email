<?php
$dbhost_name = "localhost"; //Hostname
$dbusername = "root"; //MySQL Username
$dbpassword = "123456"; //MySQL password
$dbdatabase = "email"; //MySQL Database Name
 
try {
$db = new PDO('mysql:host='.$dbhost_name.';dbname='.$dbdatabase, $dbusername, $dbpassword);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>