<?php 
// session_start();
$server = "localhost";
$username = "root";
$dbname ="offcampus";
$password ="";

// connection

$conn = mysqli_connect($server, $username,$password,$dbname);

if($conn->connect_error){
    die("conection Fail".$conn->connect_error);
}

?>