<?php include('inc/session.php'); ?>

<?php include('inc/header.php'); ?>


<?php
$id = $_GET['GetID'];

$query = "SELECT 
	album.name as albumname,
    album.track as albumtrack,
    album.drescription as albumdrescription,
    album.price as albumprice,
    album.vdo as albumvdo,
    album.genre as albumgenre,
    album.photo as albumphoto,
    artist.name as arname,
    artist.photo as arphoto
    from album
    inner join artist on artist.id = album.artist_id 
    WHERE album.id = '$id'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $albumname = $row['albumname'];
    $albumtrack = $row['albumtrack'];
    $albumdrescription = $row['albumdrescription'];
    $albumprice = $row['albumprice'];
    $albumvdo = $row['albumvdo'];
    $albumgenre = $row['albumgenre'];
    $albumphoto = $row['albumphoto'];
    $arname = $row['arname'];
    $arphoto = $row['arphoto'];
}
?>


<body data-spy="scroll" data-target=".fixed-top">
    <?php include('inc/navbar2.php'); ?>

    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="admin/img/album/<?php echo $albumphoto ?>" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2><?php echo $albumname ?></h2>
                        <h6><strong>Artist : </strong><?php echo $arname ?></h6>
                        <h6><strong>Teack : </strong><?php echo $albumtrack ?></h6>
                        <h6><strong>Genre : </strong><?php echo $albumgenre ?></h6>
                        <h6><strong>Price : </strong><?php echo $albumprice ?> USD</h6>
                        <h6><strong>Drescription : </strong><?php echo $albumdrescription ?></h6><br>
                        <form action="buy.php?GetID=<?php echo $id ?>" method="post">
                            <button type="submit" class="btn btn-info" name="buy" id="buy">BUY NOW</button>
                        </form>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->

    <!-- Video -->
    <div id="preview" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PREVIEW</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <center>
                                <?php echo $albumvdo ?>
                                <br><br><br>
                                <img src="admin/img/artist/<?php echo $arphoto ?>" alt="" width="600px">
                            </center>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->



    <?php include('inc/footer.php'); ?>
    <?php include('inc/script.php'); ?>
</body>

</html>