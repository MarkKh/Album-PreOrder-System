<?php
if (isset($_SESSION['error'])) {
    echo "
        <div class='row'>
        <div class='col-12 grid-margin stretch-card'>
            <div class='card corona-gradient-card'>
                <div class='card-body py-0 px-0 px-sm-3'>
                    <div class='row align-items-center'>
                        <div class='col-4 col-sm-3 col-xl-2'>
                            <img src='assets/images/dashboard/Group126@2x.png' class='gradient-corona-img img-fluid' alt=''>
                        </div>
                        <div class='col-5 col-sm-7 col-xl-8 p-0'>
                            <h4 class='mb-1 mb-sm-0'>" . $_SESSION['error'] . "</h4>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
          ";
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo "
    <div class='row'>
    <div class='col-12 grid-margin stretch-card'>
        <div class='card corona-gradient-card'>
            <div class='card-body py-0 px-0 px-sm-3'>
                <div class='row align-items-center'>
                    <div class='col-4 col-sm-3 col-xl-2'>
                        <img src='assets/images/dashboard/Group126@2x.png' class='gradient-corona-img img-fluid' alt=''>
                    </div>
                    <div class='col-5 col-sm-7 col-xl-8 p-0'>
                        <h4 class='mb-1 mb-sm-0'>" . $_SESSION['success'] . "</h4>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
          ";
    unset($_SESSION['success']);
}
?>
