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
                                <h4 class='card-title'>Artist</h4>

                                <?php
                                if (isset($_POST['search'])) {
                                    $search = $_POST['search'];
                                    $sql = "SELECT * FROM album WHERE name LIKE '%$search%'";
                                } else {
                                    $sql = 'SELECT * FROM album $where';
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
                                                
                                                <th>Photo</th>
                                                <th>Name</th>
                                                <th>track</th>
                                                <th>Price</th>
                                                <th width="20%">Tool</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            while ($row = $query->fetch_assoc()) {
                                                $id = $row['id'];
                                                $name = $row['name'];
                                                $photo = $row['photo'];
                                                $track = $row['track'];
                                                $price = $row['price'];
                                                echo "
                                                    <tr>
                                                        
                                                        <td><img src='img/album/$photo' width='200px'></td>
                                                        <td>$name</td>
                                                        <td>$track  song</td>
                                                        <td>$price  USD</td>
                                                        <td>
                                                        <a href='album-edit-model.php?GetID=$id'><button type='button' name='edit' id='edit' class='btn btn-info btn-rounded btn-fw'>edit</button></a>
                                                        <a href='album-delete.php?GetID=$id'><button type='button' name='delete' id='delete' class='btn btn-danger btn-rounded btn-fw'>delete</button>
                                                        </td>
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