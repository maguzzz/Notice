<?php 

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "notice";

//create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

//check connection
if(mysqli_connect_error()){
    die("Connection faild");
}
