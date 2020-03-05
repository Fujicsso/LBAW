<?php
include_once('navbar.php');
include_once('tabs.php');
include_once('footer.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <!-- Navbar + tab -->
    <?php
    draw_navbar();
    draw_tabs();
    ?>

    <div class="container">
        <div class="row-12 py-3">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-interval="2000" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/user.svg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/shopping-cart.svg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/search.svg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <ul class="nav nav-pills nav-fill mb-3">
            <li class="nav-item">
                <a class="nav-link active" href="#">New</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Best-sellers</a>
            </li>
        </ul>

        <div class="row no-gutters row-cols-xs-5 row-cols-sm-4 row-col-md-3 row-col-lg-2 text-center">
            <div class="col mb-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="../assets/smartphone.svg" alt="Card image cap">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">Quick description of the phone in place.</p>
                        <a href="#" class="btn btn-secondary w-75">See</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="../assets/smartphone.svg" alt="Card image cap">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">Quick description of the phone in place.</p>
                        <a href="#" class="btn btn-secondary w-75">See</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="../assets/smartphone.svg" alt="Card image cap">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">Quick description of the phone in place.</p>
                        <a href="#" class="btn btn-secondary w-75">See</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="../assets/smartphone.svg" alt="Card image cap">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">Quick description of the phone in place.</p>
                        <a href="#" class="btn btn-secondary w-75">See</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="../assets/smartphone.svg" alt="Card image cap">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">Quick description of the phone in place.</p>
                        <a href="#" class="btn btn-secondary w-75">See</a>
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="card" style="width: 10rem;">
                    <img class="card-img-top" src="../assets/smartphone.svg" alt="Card image cap">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title">Phone</h5>
                        <p class="card-text">Quick description of the phone in place.</p>
                        <a href="#" class="btn btn-secondary w-75">See</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    draw_footer();  
?>

<!-- Make carousel indicators and controls black -->
<style>
    .carousel-control-next,
    .carousel-control-prev,
    .carousel-indicators {
        filter: invert(100%);
    }
</style>

</html>