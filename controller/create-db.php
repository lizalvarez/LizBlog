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
} //if not tell program it was a success

//select database that i have in the file
$exists = $connection->select_db($database);
//!= invert false to true
if(!$exists){
    //checking wether the database existed
   //store result of query
    $query = $connection->query("create database $database");
    
    if($query) {
        echo "successfully created database: " . $database;
    }
}
    else{
    echo "database already exists";
    }

        

$connection->close();