<?php
//accessing info from database
require_once(__DIR__ ."/../model/database.php");
//connect to MySQL using db info
$connection = new mysqli($host, $username, $password);
//checks whether there was a connection error or not
if($connection->connect_error) {
    //if there's an error, tell the program to die off 
    die("<p>ERROR:" . $connection->connect_error . "</p>");
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
        echo "<p>Successfully created database: " . $database . "</p>";
    }
}
    else{
    echo "<p>Database already exists<p/>";
    }
$query = $connection->query("CREATE TABLE posts ("
        //eleven values in the integer,
        . "id int(11) NOT NULL AUTO_INCREMENT," //id cant be empty, // generate unique ids
        . "title varchar(255) NOT NULL,"//title cant be empty
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");  
if($query){
    echo"<p>Successfully create a data table: posts</p>";
}
else{
    echo "<p>$connection->error</p>";
}

        

$connection->close();