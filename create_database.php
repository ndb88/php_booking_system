<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS restaurant";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully.  ";
} else {
  echo "Error creating database: " . $conn->error;
}

// SQL Statement to create table users with columns user_id, username, password, name, email and mobile in database restaurant
$sql =  
"CREATE TABLE IF NOT EXISTS restaurant.users (
user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username TEXT(30) NOT NULL,
password TEXT(30) NOT NULL,
name TEXT(50) NOT NULL,
email TEXT(30) NOT NULL,
mobile TEXT(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table users created successfully.  ";
} else {
  echo "Error creating table: " . $conn->error;
}

// SQL Statement to create table reservations with columns reserve_id, fname, lname, num_guests, date, time, mobile, details, user_id and username in database       // restaurant
$sql =  "CREATE TABLE IF NOT EXISTS restaurant.reservation (
reserve_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname TEXT(30) NOT NULL,
lname TEXT(30) NOT NULL,
num_guests INT(50) NOT NULL,
date TEXT(30) NOT NULL,
time TEXT(30) NOT NULL,
mobile TEXT(50) NOT NULL,
details TEXT(300),
user_id TEXT(50) NOT NULL,
username TEXT(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
  echo "Table reservation created successfully.  ";
} else {
  echo "Error creating table: " . $conn->error;
}


$conn->close();
?>