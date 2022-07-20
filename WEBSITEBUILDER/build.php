<?php
   include("connection.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $name = $_POST['name'];
      $heading = $_POST['heading'];
      $paragraph = $_POST['paragraph'];
      $footer = $_POST['footer'];
      
      global $conn;
      $result = mysqli_query($conn, "INSERT INTO pages (name,heading,paragraph,footer) VALUES('$name','$heading','$paragraph','$footer')");		
      if($result){
        header('Location: intro.php');
    }
   }
?>