<?php include('inc/conn.php'); ?>
<?php include('inc/header.php'); ?>

<body data-spy="scroll" data-target=".fixed-top">
    <?php include('inc/navbar.php'); ?>

    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Welcome to the Pre-Order System</h2>
                        
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                 <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->

    <?php
    $sql = "SELECT 
    album.id as abid,
    album.name as abn,
    album.price as abp,
    album.photo as abphpto,
    artist.name as arn,
    artist.photo as arphoto
     FROM album
    INNER JOIN artist ON album.artist_id = artist.id";
    $query = $conn->query($sql);
    ?>

    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">

                                <!-- Slide -->
                                <?php
                                while ($row = $query->fetch_assoc()) {
                                    $id = $row['abid'];
                                    $name_al = $row['abn'];
                                    $price = $row['abp'];
                                    $albbum_photo = $row['abphpto'];
                                    $artist_name = $row['arn'];
                                    

                                    echo " 
                                        <div class='swiper-slide'>
                                            <a href='admin/img/album/$albbum_photo' class='popup-link' data-effect='fadeIn'>
                                            <img class='img-fluid' src='admin/img/album/$albbum_photo' alt='alternative'>
                                            </a><br>
                                            <p></p>
                                            <h4>$name_al</h4>
                                            <h6>- $artist_name -</h6>
                                            <p></p>
                                            <a class='btn-solid-lg' href='login-model.php'><i class='fab fa-google-play'></i>BUY</a>
                                        </div>

                                ";
                                }
                                ?>


                                <!-- end of slide -->


                                <!-- end of slide -->

                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->
    
    <?php include('inc/footer.php'); ?>
    <?php include('inc/script.php'); ?>
</body>

</html>