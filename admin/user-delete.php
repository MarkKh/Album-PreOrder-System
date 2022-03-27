<?php
	include 'inc/session.php';

	if(isset($_GET['GetID']))
         {
             $id = $_GET['GetID'];
             $query = " delete from user where id = '".$id."'";
             $result = mysqli_query($conn,$query);
             if($result)
             {
				$_SESSION['success'] = 'User deleted successfully';
                 header("location:user.php");
             }
             else
             {
				$_SESSION['error'] = $conn->error;
                header("location:user.php");
             }
        }
         else
         {
             header("location:user.php");
         }
?>
