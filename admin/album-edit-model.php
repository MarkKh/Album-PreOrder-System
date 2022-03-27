<?php include 'inc/session.php'; ?>


<?php include 'inc/head.php'; ?>
<?php
$id = $_GET['GetID'];
$query = "SELECT * FROM album WHERE id = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
    $track = $row['track'];
    $drescription = $row['drescription'];
    $price = $row['price'];
    $vdo = $row['vdo'];
    $genre = $row['genre'];
    $artist_id = $row['artist_id'];
}
?>

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
                                <h4 class='card-title'>Update Album</h4>
                                <form class="forms-sample" enctype="multipart/form-data" method="post" action="album-edit.php?GetID=<?php echo $id; ?>">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="track">Track</label>
                                        <input type="number" class="form-control" id="track" name="track" value="<?php echo $track; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="drescription">Drescription</label>
                                        <textarea class="form-control" id="drescription" name="drescription" rows="4" required><?php echo $drescription; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="text" class="form-control" id="price" name="price" value='<?php echo $price; ?>' required>
                                    </div>
                                    <div class="form-group">
                                        <label for="vdo">Video</label>
                                        <textarea class="form-control" id="vdo" name="vdo" rows="4" required><?php echo $vdo; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="genre">Genre</label>
                                        <input type="text" class="form-control" id="genre" name="genre" value="<?php echo $genre; ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="dropdown">
                                            <label for="artist_id">Artist</label><br>
                                            <div class="col-sm-9">
                                                <select class="btn btn-secondary dropdown-toggle" name="artist_id" id="artist_id" required="">
                                                    <?php
                                                    $sql = "SELECT * FROM artist order by id asc ";
                                                    $qry = $conn->query($sql);
                                                    ?>
                                                    <option value="" selected="" disabled="">Artist</option>
                                                    <?php

                                                    while ($row = $qry->fetch_array()) :
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo ucwords($row['name']) ?></option>
                                                    <?php endwhile;  ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary me-2" name="edital" id="edital">Update</button>
                                    <button class="btn btn-dark">Cancel</button>

                                </form>
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