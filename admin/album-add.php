<?php
include 'inc/session.php';

if (isset($_POST['addal'])) {
	$name = $_POST['name'];
    $track = $_POST['track'];
    $drescription = $_POST['drescription'];
    $price = $_POST['price'];
    $vdo = $_POST['vdo'];
    $genre = $_POST['genre'];
    $artist_id  = $_POST['artist_id'];

	$fileupload = $_POST['photo'];

	//ฟังก์ชั่นวันที่
	date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");
	//ฟังก์ชั่นสุ่มตัวเลข
	$numrand = (mt_rand());
	//เพิ่มไฟล์
	$upload = $_FILES['photo'];
	if ($upload <> '') {   //not select file
		//โฟลเดอร์ที่จะ upload file เข้าไป 
		$path = "img/album/";

		//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
		$type = strrchr($_FILES['photo']['name'], ".");

		//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
		$newname = $date . $numrand . $type;
		$path_copy = $path . $newname;
		$path_link = "img/album/" . $newname;

		//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
		move_uploaded_file($_FILES['photo']['tmp_name'], $path_copy);
	}

	if ($upload != '') {
		move_uploaded_file($_FILES['photo']['tmp_name'], 'img/album/' . $filename);
	}

	$sql = "INSERT INTO album (name,track,drescription,price,vdo,genre,photo,artist_id) VALUES ('$name','$track','$drescription','$price','$vdo','$genre','$newname','$artist_id')";
	if ($conn->query($sql)) {
		$_SESSION['success'] = 'album has been added';
	} else {
		$_SESSION['error'] = $conn->error;
	}
} else {
	$_SESSION['error'] = 'Fill up add form first';
}

header('location: albumall.php');
