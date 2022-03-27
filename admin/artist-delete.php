<?php
	include 'inc/session.php';

	if(isset($_GET['GetID']))
         {
             $id = $_GET['GetID'];
             $query = " delete from artist where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'Artist deleted successfully';
                 header("location:artist.php");
             }
             else
             {
				$_SESSION['error'] = $conn->error;
                header("location:artist.php");
             }
        }
         else
         {
             header("location:artist.php");
         }
?>
