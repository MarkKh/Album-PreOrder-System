<?php include 'inc/session.php'; ?>


<?php include 'inc/head.php'; ?>
<?php
$id = $_GET['GetID'];
$query = "SELECT * FROM artist WHERE id = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $name = $row['name'];
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
                                <h4 class='card-title'>Update Artist</h4>
                                <form class='forms-sample' method='post' action='artist-edit.php?GetID=<?php echo $id; ?>'>
                                    <div class='form-group row'>
                                        <label for='name' class='col-sm-3 col-form-label'>Name</label>
                                        <div class='col-sm-9'>
                                            <input type='text' class='form-control' id='name' name='name' value="<?php echo $name ?>" required>
                                        </div>
                                    </div>
                                    <button type='submit' class='btn btn-primary me-2' name='edit' id='edit'>Update</button>
                                    <button class='btn btn-dark'>Cancel</button>
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