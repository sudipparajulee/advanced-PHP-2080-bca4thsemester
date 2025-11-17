<?php 
$priority = $_POST['priority'];
$name = $_POST['name'];

echo $priority;
echo $name;

$server = "localhost";
$username = "root";
$password = "";
$database = "smc_bcaproject4th";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    die("<script>alert('Connection Failed.')</script>");
}
