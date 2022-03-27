<?php
	session_start();
	include 'inc/conn.php';

	if(!isset($_SESSION['user']) || trim($_SESSION['user']) == ''){
		header('location:login-model.php');
	}

	$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();

	$userid = $user['id'];



?>