<?php
	include 'inc/session.php';

	if(isset($_GET['GetID']))
         {
             $id = $_GET['GetID'];
             $query = " delete from album where id = '$id'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'album deleted successfully';
                 header("location:albumall.php");
             }
             else
             {
				$_SESSION['error'] = $conn->error;
                header("location:albumall.php");
             }
        }
         else
         {
             header("location:albumall.php");
         }
?>
