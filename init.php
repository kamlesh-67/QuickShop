<?php

$username = "root";
$hostname = "localhost";
$password = "";
$ptable = "products";

// $server = mysqli_connect($hostname,$username,$password);
$server = mysqli_connect($hostname,$username,$password,'quickshop');

// mysqli_query($server,"CREATE DATABASE quickshop");
// mysqli_query($server,"CREATE TABLE products (productid INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,title VARCHAR(150) NOT NULL ,description VARCHAR(2000) NOT NULL ,price FLOAT(10) NOT NULL,rating INT(1) NOT NULL ,rewiew INT(3) NOT NULL,img VARCHAR(2000) NOT NULL);");


?>