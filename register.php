<?php
	include 'inc/session.php';

	if(isset($_POST['registration'])){
		$name = $_POST['name'];
		$phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];


		$sql = "INSERT INTO user (name,phone_number,address,email,password) VALUES ('$name','$phone_number','$address','$email','$password')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'theater has been added';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: login-model.php');

?>