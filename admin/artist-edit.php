<?php

include 'inc/session.php';

if (isset($_POST['edit'])) {
    $id = $_GET['GetID'];
    $name = $_POST['name'];


    $query = " UPDATE artist SET name = '" . $name . "' WHERE id ='" . $id . "' ";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $_SESSION['success'] = 'update successfully';
        header("location:artist.php");
    } else {
        $_SESSION['error'] = $conn->error;
    }
} else {
    header("location:artist.php");
}
header("location:artist.php");

?>