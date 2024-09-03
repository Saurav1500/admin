<?php
$hostname='localhost';
$username='root';
$password='';
$database='';
$conn = new mysqli($hostname,$username,$password );
if ($conn->connect_error) {
    die ("Connection Failed");
} else {
    // echo "yes";
}
$sql="create database transportation";
if($conn->query($sql)){
    echo "Database Created ";
}
?>