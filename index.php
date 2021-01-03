<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travel.com official</title>
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
   <?php include"navbar.php";?>

    <div class="jumbotron d-flex align-items-center">
        <div class="container text-center">
            <h1 class="display-1 mb-4">TRA<br>VEL</h1>
            <h3>Website for Adventurer</h3>
            <a href="about.html" class="btn btn-outline-danger btn-lg h">
                <h2>></h2>
            </a>
        </div>
        <div class="rectangle-1"></div>
        <div class="rectangle-2"></div>
        <div class="rectangle-transparent-1"></div>
        <div class="rectangle-transparent-2"></div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <div class="circle-3"></div>
        <div class="triangle triangle-1">
            <img src="img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-2">
            <img src="img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-3">
            <img src="img/obj_triangle.png" alt="">
        </div>
        <div class="triangle triangle-4">
            <img src="img/obj_triangle.png" alt="">
        </div>

        <!-- container marketing -->

    </div>
    <div class="container marketing mt-4 ">
        <div class="row">
            <div class="col-lg-4 mt-2 text-center">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140"
                    src="img/hotel.jpeg" alt="img1">
                <h2 class='text-center'>Top Accomodations</h2>
                <a href="accomodation.php" class="btn btn-success">Visit now</a>
            </div>
            <div class="col-lg-4 mt-2 text-center">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140" src="img/todo.jpg"
                    alt="img1">
                <h2 class='text-center'>Things to do</h2>
                <a href="thingstodo.php" class="btn btn-success">Things to do</a>
            </div>
            <div class="col-lg-4 mt-2 text-center">
                <img class="bd-placeholder-img rounded-circle d-flex m-auto" width="140" height="140"
                    src="img/contact.jpeg" alt="img1">
                <h2 class='text-center'>Contact us</h2>

                <a href="contact.php" class="btn btn-success">Contact us</a>
            </div>
        </div>
    </div>

    <hr>
    <div class="container-fluid">
        <h2 class="text-center my-2">Keep Planning</h2><br>
        <div class="row rounded mx-1" style="background-color: #ff5d5d;">
            <div class="col-lg-6 col-12 p-1 text-center">
                <br>
                <h1 class="text-center text-light">Start saving your travel ideas</h1><br>
                <p class="text-center text-light">Create a Trip to save and organise all of your travel ideas, and see
                    them on a map</p>
                <br><a href="thingstodo.php" class="btn btn-primary rounded-pill ">Explore now</a><br>

            </div>
            <div class="col-lg-6 col-12 p-2">
                <div class="card mb-6 shadow-sm d-block">
                    <iframe id="gmap_canvas"
                        src="https://maps.google.com/maps?q=simla%20india&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
            </div>
        </div>

        <div class="container-fluid py-2">
            <div class="row rounded my-1 bg-primary py-1">
                <div class="col-lg-6 col-12 p-1 text-center">
                    <div class="card mb-6 shadow-sm d-block"> <iframe src="https://www.youtube.com/embed/AMhZ1TtKsFM"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-12 p-2 text-center">
                    <br>
                    <h1 class="text-center text-light">Explore the Beauty of Simla</h1><br>
                    <p class="text-center text-light">Create a Trip to save and organise all of your travel ideas, and
                        see
                        them on a map</p>
                    <br><a href="contact.php" class="text-decoration-none btn btn-danger rounded-pill">Contact
                        Us</a><br>
                </div>
            </div>
        </div>
    </div>
    <?php include"footer.php"; ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
</body>

</html>