<?php
   include("connection.php");
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $myusername = $_POST['email'];
      $mypassword = $_POST['password']; 
      global $conn;
      $result=mysqli_query($conn,"SELECT * FROM users WHERE email = '$myusername' and password='$mypassword'");
      $row=mysqli_fetch_assoc($result);
      $_SESSION['login'] = $row['id'];
      $_SESSION['user']='student';
      echo $_SESSION['login'];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        header('Location: build.html');
      }else {
    }
   }
?>