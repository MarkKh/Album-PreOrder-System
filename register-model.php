<?php include('inc/conn.php'); ?>
<?php include('inc/header.php'); ?>
<?php
session_start();
if (isset($_SESSION['user'])) {
    header('location:index2.php');
}
?>


<body data-spy="scroll" data-target=".fixed-top">
    <?php include('inc/navbar.php'); ?>

    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Registration <span class="blue">user</span></h2>
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo "
                                    <p>" . $_SESSION['error'] . "</p>
                                ";
                            unset($_SESSION['error']);
                        }
                        ?>

                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your Phone Number" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Address" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your E-mail" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <button type="submit" class="btn btn-warning" name="registration" id="registration">Registration</button>
                        </form>


                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">

                    </div> <!-- end of img-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->


    <?php include('inc/footer.php'); ?>
    <?php include('inc/script.php'); ?>
</body>

</html>