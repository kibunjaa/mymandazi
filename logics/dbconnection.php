<?php
$server="localhost";
$username="root";
$password="";
$database="mymandazisystem";

$conn=mysqli_connect($server,$username,$password,$database);

//check connection
if ($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
?>