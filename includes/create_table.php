<?php

require_once ('connection.php');
$passenger = "CREATE TABLE PASSENGER(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    firstName varchar(20) NOT NULL,
    lastName varchar(20) not null,
    mobile varchar(10) unique not null,
    password varchar(70) not null
)";
$admin = "CREATE TABLE ADMIN(
    id int(1) AUTO_INCREMENT primary key,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    email varchar(30) unique not null,
    password varchar(70) not null
)";
$bus = "CREATE TABLE BUS(
    id int(3)  AUTO_INCREMENT primary key,
    busRegistration varchar(20) not null,
    driverName varchar(20) not null,
    mobile varchar(10) not null unique,
    image varchar(90) ,
    busImageOut varchar(90),
    busImageIn varchar(90),
    busImageSide varchar(90)
)";
if ($conn->query($passenger) && $conn->query($admin) && $conn->query($bus)) {
    echo "tables are created";
} else {
    echo "ERROR<br>" . $conn->error;
}


?>