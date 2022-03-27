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
                    <div class='col-12 grid-margin stretch-card'>
                        <div class='card'>
                            <div class='card-body'>
                                <h4 class='card-title'>Add Artist</h4>
                                <form class='forms-sample' method='post' action='artist-add.php' enctype="multipart/form-data">
                                    <div class='form-group row'>
                                        <label for='name' class='col-sm-3 col-form-label'>Name</label>
                                        <div class='col-sm-9'>
                                            <input type='text' class='form-control' id='name' name='name' placeholder='Name' required>
                                        </div>
                                    </div>
                                    <div class='form-group row'>
                                        <label for='photo' class='col-sm-3 col-form-label'>Photo</label>
                                        <div class='col-sm-9'>
                                            <input type="file" class="file-upload-browse btn btn-light" id="photo" name="photo" required>
                                        </div>
                                    </div>

                                    <button type='submit' class='btn btn-primary me-2' name='addArtist' id='addArtist'>Submit</button>
                                    <button class='btn btn-dark'>Cancel</button>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class='col-lg-12 grid-margin stretch-card'>
                        <div class='card'>
                            <div class='card-body'>
                                <h4 class='card-title'>Artist</h4>

                                <?php
                                if (isset($_POST['search'])) {
                                    $search = $_POST['search'];
                                    $sql = "SELECT * FROM artist WHERE name LIKE '%$search%'";
                                } else {
                                    $sql = 'SELECT * FROM artist $where';
                                }
                                $query = $conn->query($sql);
                                ?>
                                <form action="" method="post">
                                    <div class="input-group">
                                        <div class="form-outline">
                                            <input type="search" id="search" name="search" class="form-control" placeholder="Search by artist name" value="<?php echo @$_POST['search']; ?>" />
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
                                                <th width="50%">Name</th>
                                                <th>Tool</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            while ($row = $query->fetch_assoc()) {
                                                $id = $row['id'];
                                                $name = $row['name'];
                                                $photo = $row['photo'];
                                                echo "
                                                    <tr>
                                                        
                                                        <td><img src='img/artist/$photo' width='200px'></td>
                                                        <td>$name</td>
                                                        <td>
                                                        <a href='artist-edit-model.php?GetID=$id'><button type='button' name='edit' id='edit' class='btn btn-info btn-rounded btn-fw'>edit</button></a>
                                                        <a href='artist-delete.php?GetID=$id'><button type='button' name='delete' id='delete' class='btn btn-danger btn-rounded btn-fw'>delete</button>
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