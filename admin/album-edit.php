<?php

include 'inc/session.php';

if (isset($_POST['edital'])) {
    $id = $_GET['GetID'];
    $name = $_POST['name'];
    $track = $_POST['track'];
    $drescription = $_POST['drescription'];
    $price = $_POST['price'];
    $vdo = $_POST['vdo'];
    $genre = $_POST['genre'];
    $artist_id = $_POST['artist_id'];


    $query = " UPDATE album SET name = '$name',
                                track ='$track',
                                drescription='$drescription', 
                                price='$price',
                                vdo='$vdo',
                                genre='$genre',
                                artist_id='$artist_id'
                                WHERE id ='$id' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['success'] = 'update successfully';
        header("location:albumall.php");
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    header("location:albumall.php");
}
header("location:albumall.php");
