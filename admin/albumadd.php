<?php include 'inc/session.php'; ?>
<?php include 'inc/head.php'; ?>

<body>
    <div class="container-scroller">
        <?php include 'inc/sidebar.php'; ?>
        <div class="container-fluid page-body-wrapper">
            <?php include 'inc/navbar.php'; ?>
            <div class="main-panel">

                <!-- write code here -->
                <div class="content-wrapper">
                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Album</h4>
                                <form class="forms-sample" enctype="multipart/form-data" method="post" action="album-add.php">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="track">Track</label>
                                        <input type="number" class="form-control" id="track" name="track" placeholder="Track" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="drescription">Drescription</label>
                                        <textarea class="form-control" id="drescription" name="drescription" rows="4" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" placeholder="Price" required> 
                                    </div>
                                    <div class="form-group">
                                        <label for="vdo">Video</label>
                                        <input type="text" class="form-control" id="vdo" name="vdo" placeholder="Video" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="genre">Genre</label>
                                        <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <label for="artist_id">Artist</label><br>
                                            <div class="col-sm-9">
                                                <select class="btn btn-secondary dropdown-toggle" name="artist_id" id="artist_id" required="">
                                                    <option value="" selected="" disabled="">Artist</option>
                                                    <?php
                                                    $sql = "SELECT * FROM artist order by id asc ";
                                                    $qry = $conn->query($sql);
                                                    while ($row = $qry->fetch_array()) :
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo ucwords($row['name']) ?></option>
                                                    <?php endwhile;  ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">Photo</label><br>
                                        <span class="input-group-append">
                                            <input type="file" class="file-upload-browse btn btn-light" id="photo" name="photo" required>
                                        </span>
                                    </div>
                                

                                    <button type="submit" class="btn btn-primary me-2" name="addal" id="addal">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- end write code here -->

                <?php include 'inc/footer.php'; ?>
            </div>
        </div>
    </div>
    <?php include 'inc/script.php'; ?>
</body>

</html>