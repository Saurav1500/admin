<?php
$hostname='localhost';
$username='root';
$password='';
$database='transportation';
$conn = new mysqli($hostname,$username,$password,$database );
if ($conn->connect_error) {
    die ("Connection Failed");
} else {
    // echo "yes";
}
?>