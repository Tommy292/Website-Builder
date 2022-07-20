<?php
	
	$email = $_POST['reg_email'];
	
	$password = $_POST['reg_password'];
	
	
	//db con
	 	
	 $conn = new mysqli('localhost','root','root123','test');
	 if($conn->connect_error){
	 	die('Conection failed :'.$conn->connect_error);
	 	
	 }else{
		 $stmt = $conn->prepare("insert into login(email,password)
		 	values(?, ?)");
		 	$stmt->bind_param("ss",$email,$password);
		 	$stmt->execute();
		 	echo "registration Successfull";
		 	$stmt->close();
		 	$conn->close();
	 
	 }
?>
