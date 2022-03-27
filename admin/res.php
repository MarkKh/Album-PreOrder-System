<?php include 'inc/session.php'; ?>


<?php include 'inc/head.php'; ?>

<body>
    <div class='container-scroller'>
        <?php include 'inc/sidebar.php'; ?>
        <div class='container-fluid page-body-wrapper'>
            <?php include 'inc/navbar.php'; ?>
            <div class='main-panel'>

                <!-- write code here -->
                <div class='content-wrapper'>
                    <?php include 'inc/checkses.php'; ?>

                    <div class='col-lg-12 grid-margin stretch-card'>
                        <div class='card'>
                            <div class='card-body'>
                                <h4 class='card-title'>Order</h4>

                                <?php
                                if (isset($_POST['search'])) {
                                    $search = $_POST['search'];
                                    $sql = "SELECT album.name as alname,album.photo as alphoto,user.address as userad,user.name as uname FROM reservation
                                    inner join user on user.id = reservation.user_id
                                    inner join album on album.id = reservation.album_id  WHERE album.name LIKE '%$search%'";
                                } else {
                                    $sql = 'SELECT album.name as alname,album.photo as alphoto,user.address as userad,user.name as uname FROM reservation
                                    inner join user on user.id = reservation.user_id
                                    inner join album on album.id = reservation.album_id';
                                }
                                $query = $conn->query($sql);
                                ?>
                                <form action="" method="post">
                                    <div class="input-group">
                                        <div class="form-outline">
                                            <input type="search" id="search" name="search" class="form-control" placeholder="Search by album name" value="<?php echo @$_POST['search']; ?>" />
                                        </div> &nbsp;
                                        <button type="submit" class="btn btn-primary">
                                            search
                                        </button>
                                    </div>
                                </form>
                                <br>
                                <div class='table-responsive'>
                                    <table class='table table-bordered'>
                                        <thead>
                                            <tr>
                                                <th>album</th>
                                                <th>photo</th>
                                                <th>order by</th>
                                                <th width="50%">Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            while ($row = $query->fetch_assoc()) {
                                                $alname = $row['alname'];
                                                $alphoto = $row['alphoto'];
                                                $uname = $row['uname'];
                                                $userad = $row['userad'];
                                                
                                                echo "
                                                    <tr>
                                                        
                                                        <td>$alname</td>
                                                        <td><img src='img/album/$alphoto'></td>
                                                        <td>$uname</td>
                                                        <td>$userad</td>
                                                        
                                                    </tr>
                                                ";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- end write code here -->


                </div>
                <?php include 'inc/footer.php'; ?>
            </div>
        </div>
        <?php include 'inc/script.php'; ?>
</body>

</html>