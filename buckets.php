<?php include('inc/conn.php'); ?>
<?php include('inc/session.php'); ?>

<?php include('inc/header.php'); ?>


<?php
$uname = $user['name'];

$query = "SELECT album.name as alname,album.photo as alphoto FROM reservation
inner join user on user.id = reservation.user_id
inner join album on album.id = reservation.album_id
where user.id = '$userid'";
$result = mysqli_query($conn, $query);
?>

<body data-spy="scroll" data-target=".fixed-top">
    <?php include('inc/navbar2.php'); ?>

    <div id="preview" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Your Order</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <center>

                <?php
                while ($row = $result->fetch_assoc()) {
                    $alphoto = $row['alphoto'];
                    $alname = $row['alname'];

                    echo "<center>
                        
                            <div class='card border-dark mb-3' style='max-width: 18rem;'>
                                <div class='card-header'><h3 style='color:black;'>$alname</h3></div>
                                <div class='card-body'>
                                    <img src='admin/img/album/$alphoto' width='200px'><br><br>
                                    <h6 style='color:black;'>order by : $uname</h6>
                                </div>
                            </div> <!-- end of col -->
                        
                        </center>
                    ";
                }
                ?>

            </center>

        </div> <!-- end of container -->
    </div>

    <?php include('inc/footer.php'); ?>
    <?php include('inc/script.php'); ?>
</body>

</html>