<?php
require_once "connection.php";
session_start();
global $conn;
// Check If form submitted, insert form data into users table.
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $company = $_POST['company'];
    $phoneNumber = $_POST['phoneNumber'];
    $skills=$_POST['skills'];
    // Insert user data into table
    $result = mysqli_query($conn, "INSERT INTO users (name,email,password,company,phoneNumber,skills) VALUES('$name','$email','$password','$company','$phoneNumber','$skills')");
    if($result){
        header('Location: login.html');
    }
}