<?php
session_start();
require_once"db/config.php";
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

    <?php include"navbar.php"; ?>

    <div class="jumbotron d-flex align-items-center">
        <div class="container">
            <h3 class="font-weight-normal text-center">Contact us !</h3>
            <div class="d-flex justify-content-center" id="msg" role="alert">
                <p id="frm_error"></p>
                <p id="load" class=""></p>
            </div>

            <?php

if(isset($_POST['submit'])){
    $name =mysqli_real_escape_string($conn, $_POST['name']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    $mobile =mysqli_real_escape_string($conn, $_POST['mobile']);
    $message =mysqli_real_escape_string($conn, $_POST['message']);
    if(empty($name) && empty($email) && empty($mobile) && empty($message)){
        ?>
            <div class="alert alert-danger text-align-center" role="alert">
                Please enter all field !!</div>
            <?php 
    }
    else {
        $contact = "insert into contact(name, email, mobile, message) values('$name','$email','$mobile','$message')";
        $con_update= mysqli_query($conn, $contact);
        if($con_update){

            ?>
            <div class="alert alert-success text-align-center" role="alert">
                Contact form submitted !! We will get in touch with you soon.</div>
            <?php 

        }
        else{
            ?>
            <div class="alert alert-danger text-align-center" r! We ole="alert">
                Contact form submitted failed</div>
            <?php 

        }

    }

}
?>

            <form class="d-flex flex-column form-signin" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"
                method="post">

                <div class="form-signin form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control fields" id="name" onkeyup="ValidateName();" name="name"
                        required placeholder="Enter your name">
                    <span id="error_name" class="text-danger text-success error_fields"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control fields" onkeyup="ValidateEmail();" id="email" name="email"
                        required placeholder="Enter your email">
                    <span id="error_email" class="text-danger text-success error_fields"></span>
                </div>

                <div class="form-signin form-group">
                    <label for="mobile">Phone No</label>
                    <input type="number" class="form-control fields" id="mobile" name="mobile"
                        onkeyup="ValidateMobile();" required placeholder="Enter your mobile">
                    <span id="error_mobile" class="text-danger text-success error_fields"></span>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea onkeyup="ValidatePassword();" class="form-control fields" cols="10" rows="10"
                        name="message" id="password" placeholder="Enter your Message"></textarea>
                    <span id="error_password" class="text-danger text-success error_fields"></span>
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-primary">
                    Submit</button>
            </form>
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
    </div>
    <div class="section-content mt-3 p-2">
        <div class="title-wrap aos-init aos-animate" data-aos="fade-up">
            <h2 class="section-title">Where To Find Us?</h2>
        </div>
        <div class="row text-center mt-4">
            <div class="col-md-3 aos-init aos-animate" data-aos="fade-up">
                <span class="lnr lnr-location fs-40 py-4 d-block"></span>
                <h5>LOCATION</h5>
                <p>New Zeeland</p>
            </div>
            <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <span class="lnr lnr-clock fs-40 py-4 d-block"></span>
                <h5>WORKING TIME</h5>
                <p>Monday - Saturday 24/7</p>
            </div>
            <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                <h5>CALL US</h5>
                <p>123-45678</p>
            </div>
            <div class="col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="600">
                <span class="lnr lnr-phone fs-40 py-4 d-block"></span>
                <h5>EMAIL</h5>
                <p>roxy@gmail.com</p>
            </div>

        </div>
    </div>
    <hr>

<?php include"footer.php"; ?>
    <!-- External JS -->
    <script src="js/script.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <!-- Main JS -->

    <script src="js/app.min.js "></script>
</body>

</html>