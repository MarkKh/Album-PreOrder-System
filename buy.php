<?php
include 'inc/session.php';

if (isset($_POST['buy'])) {
	$album_id  = $_GET['GetID'];


	$sql = "INSERT INTO reservation (album_id ,user_id) VALUES ('$album_id','$userid')";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'reservation has been added';
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: index2.php');
