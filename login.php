<?php
	session_start();
	include 'inc/conn.php';

	if(isset($_POST['login'])){
		$username = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM user WHERE email = '$username'";
		$query = $conn->query($sql);

		if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find account with the username';
		}
		else{
			$row = $query->fetch_assoc();
			if($password == $row['password']){
                $_SESSION['user'] = $row['id'];
                
            }
			else{
				$_SESSION['error'] = 'Incorrect password';
			}
		}
		
	}
	else{
		$_SESSION['error'] = 'Input admin credentials first';
	}
header('location: index2.php');


?>