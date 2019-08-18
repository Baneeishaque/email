<?php

require 'config.php';

$email = $_POST['email'];

try {
    //connect as appropriate as above
    $db->query("INSERT INTO `email`.`sub` (`no`, `email`) VALUES (NULL, '$email')");
     echo "Record inserted";
} catch(PDOException $ex) {
    
    echo "Error inserting record: ".$ex->getMessage();
}

?>