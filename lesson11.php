<?php
//in development , we often need to store data collected from users of uor systems
//MYSQL is the database base system used for both big and small businesses  gmp_and
//it uses the SQL(Structured query language)to interact with data
//A Db is made up of relaqted tables
//
//before using the db you have to connect to it by providiNG the following info:
//    1.hostname
//    2username
//    3.password
//    4Database name
//
//php has helper functions that will make data baese interactions easy
//
//>CONNECTING TO THE DATABASE
//credentials for connecting to  aDb

$hostname='localhost';
$username='root';
$password='';
$databasename='demo1';

//to connect to a Db use the php function mysql_connect()
//mysqli function returns a boolean datatype
$connection =mysqli_connect($hostname,$username,$password,$databasename);
//check connection

if($connection==false){
    echo "Connection unsuccessful <br>";
    die("ERROR:".mysqli_connect_error());
}
//inserting data into the table
$sql="INSERT INTO `users`(`id`, `username`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (NULL,'John','Martin','Tau','taniua@qmail.com','12345','male')";
if (mysqli_query($connection,$sql)){
    echo "data inserted successfully<br>";
}else{
    echo "Data not inserted".mysqli_error($connection);
}

//create a database
//$sql="CREATE DATABASE demo1";//request to the DB sys
////make the request/execute:mysqli_query:returns boolean
//if (mysqli_query($connection,$sql)){
//    echo "Database created successfully <br>";
//
//}else{
//    echo "ERROR: could not execute $sql".mysqli_error($connection);
//}























?>