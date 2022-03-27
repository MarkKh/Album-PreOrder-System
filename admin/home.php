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

                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0">Welcome Admin</h4>
                                            <p class="mb-0 font-weight-normal d-none d-sm-block">Enjoy your work!</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <?php
                                                $sql = "SELECT * FROM album";
                                                $query = $conn->query($sql);

                                                echo "<h3 class='mb-0'>" . $query->num_rows .  "</h3>";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <span class="mdi mdi-server icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Total Album</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <?php
                                                $sql = "SELECT * FROM artist";
                                                $query = $conn->query($sql);

                                                echo "<h3 class='mb-0'>" . $query->num_rows .  "</h3>";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success">
                                                <span class="mdi mdi-violin icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Total Artist</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <?php
                                                $sql = "SELECT * FROM user";
                                                $query = $conn->query($sql);

                                                echo "<h3 class='mb-0'>" . $query->num_rows .  "</h3>";
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <span class="mdi mdi-account-group icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Total User</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0">Fighting!!</h3>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <span class="mdi mdi-google-assistant icon-item"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">good job</h6>
                                </div>
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