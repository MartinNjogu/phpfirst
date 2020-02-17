<?php

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





?>
