<?php
//accessing info from database
require_once(__DIR__ ."/../model/database.php");
//connect to MySQL using db info
$connection = new mysqli($host, $username, $password);
//checks whether there was a connection error or not
if($connection->connect_error) {
    //if there's an error, tell the program to die off 
    die("ERROR:" . $connection->connect_error);
    //"." means concatenate
}
//if not tell program it was a success
else {
    //info for the host we connected to
    echo "Success: " . $connection->host_info;
}
$connection->close();