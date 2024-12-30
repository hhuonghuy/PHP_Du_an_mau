<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "nba";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("Ket noi ko thanh cong:". $conn->connect_error);
}
echo "ket noi thanh cong";
?>