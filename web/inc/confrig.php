<?php

$server = 'localhost';
$user_name = 'root';
$password = '';
$database = 'gotrip';

$connection = mysqli_connect('localhost','root','','gotrip');

//check connection
if(mysqli_connect_errno()){

    die('Dtabase Connection Failed' . mysqli_connect_error());

}
?>