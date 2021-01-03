<?php
session_start();
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="css/style.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Travel.com official</title>
  </head>
  <body>
  
<?php include"navbar.php"; ?>

<div class="jumbotron d-flex align-items-center">

    <div class="container col-lg-6 col-12 py-2 mt-3">
                        <h2 class="font-weight-normal text-center">Get an TRAVEL.com account</h2>
                        <div class="d-flex justify-content-center" id="msg"  role="alert">
                            <p id="frm_error"></p><p id="load" class=""></p>
                            </div>
                <form class="d-flex flex-column form-signin"  method="post">

                         <div class="form-group">
                            <label for="Email">Email address/Username</label>
                            <input type="email" class="form-control fields" onkeyup="ValidateEmail();" id="email"
                            name="email"required>
                            <span id="error_email" class="text-danger text-success error_fields"></span>
                        </div>

                        <div class="form-signin form-group">
                            <label for="name">First Name</label>
                            <input type="text" class="form-control fields" id="name" onkeyup="ValidateName();" name="name" required>
                            <span id="error_name" class="text-danger text-success error_fields"></span>
                        </div>
                        <div class="form-signin form-group">
                            <label for="lname">Last Name</label>
                            <input type="text" class="form-control fields" id="lname"  name="lname" required>
                            <span id="error_lname" class="text-danger text-success error_fields"></span>
                        </div>
                        
                        <div class="form-signin form-group">
                            <label for="phone">Post code</label>
                            <input type="number" class="form-control fields" id="mobile" name="mobile" onkeyup="ValidateMobile();" required>
                            <span id="error_mobile" class="text-danger text-success error_fields"></span>
                        </div>
                        
                        <div class="form-signin form-group">
                            <label for="address1">Address line 1</label>
                            <input type="text" class="form-control fields" id="address1" name="address1" required>
                        </div>
                        <div class="form-signin form-group">
                            <label for="address2">Address line 2</label>
                            <input type="text" class="form-control fields" id="address2" name="address2"  required>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" onkeyup="ValidatePassword();" class="form-control fields" name="password" id="password">
                            <span id="error_password" class="text-danger text-success error_fields"></span>
                        </div>
                        <div class="form-group">
                            <label for="cexampleInputPassword">Confirm Password</label>
                            <input type="password" class="form-control fields" name="confirm_password" onkeyup="ValidateCPassword();" id="confirm_password" required>
                            <span id="error_confirm_password" class="text-danger text-success error_fields"></span>
                        </div>
                        <button type="button" name="submit" id="submit" onclick='form_login()' class="btn btn-primary">Create Account</button>
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
    <script src="js/jquery.js"></script>
    <script>
     function ValidateName() {
        var name = document.getElementById("name").value;
        var lblname = document.getElementById("error_name");
        lblname.innerHTML = "";
        if (name.length <3) {
            lblname.innerHTML = "First Name must be more than 3 characters.";
            $('#name').addClass('is-invalid');
            $('#name').removeClass('is-valid');
            $('#error_name').removeClass('text-success');
            $('#error_name').addClass('text-danger');
        }
        else{
            $('#name').addClass('is-valid');
            $('#name').removeClass('is-invalid');
            $('#error_name').removeClass('text-danger');
            $('#error_name').addClass('text-success');
            lblname.innerHTML = "looks good !";
        }
    }
     function ValidateEmail() {
        var email = document.getElementById("email").value;
        var lblError = document.getElementById("error_email");
        lblError.innerHTML = "";
        var expr = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!expr.test(email)) {
            lblError.innerHTML = "Invalid email address.";
            $('#email').addClass('is-invalid');
            $('#email').removeClass('is-valid');
            $('#error_email').removeClass('text-success');
            $('#error_email').addClass('text-danger');
        }
        else{
            $('#email').addClass('is-valid');
            $('#email').removeClass('is-invalid');
            $('#error_email').removeClass('text-danger');
            $('#error_email').addClass('text-success');
            lblError.innerHTML = "looks good !";
        }
    }
     function ValidateMobile() {
        var mobile = document.getElementById("mobile").value;
        var lblmobile = document.getElementById("error_mobile");
        lblmobile.innerHTML = "";
        if (mobile.length==6) {
            $('#mobile').addClass('is-valid');
            $('#mobile').removeClass('is-invalid');
            $('#error_mobile').removeClass('text-danger');
            $('#error_mobile').addClass('text-success');
            lblmobile.innerHTML = "looks good !";
        }
        else{
            lblmobile.innerHTML = "Post code must be of 6 digits";
            $('#mobile').addClass('is-invalid');
            $('#mobile').removeClass('is-valid');
            $('#error_mobile').removeClass('text-success');
            $('#error_mobile').addClass('text-danger');
        }
    }
     function ValidatePassword() {
        var password = document.getElementById("password").value;
        var lblErrorp = document.getElementById("error_password");
        lblErrorp.innerHTML = "";
        if (password.length<5) {
            lblErrorp.innerHTML = "Password must be more than 5 characters";
            $('#password').addClass('is-invalid');
            $('#password').removeClass('is-valid');
            $('#error_password').removeClass('text-success');
            $('#error_password').addClass('text-danger');

        }
        else{
            $('#password').addClass('is-valid');
            $('#password').removeClass('is-invalid');
            $('#error_password').removeClass('text-danger');
            $('#error_password').addClass('text-success');
            lblErrorp.innerHTML = "looks good !";
        }
    }
     function ValidateCPassword() {
        var confirm_password = document.getElementById("confirm_password").value;
        var password = document.getElementById("password").value;
        var lblcp = document.getElementById("error_confirm_password");
        lblcp.innerHTML = "";
        if (password != confirm_password) {
            lblcp.innerHTML = "Password did not match !";
            $('#confirm_password').addClass('is-invalid');
            $('#confirm_password').removeClass('is-valid');
            $('#error_confirm_password').removeClass('text-success');
            $('#error_confirm_password').addClass('text-danger');

        }
        else{
            $('#confirm_password').addClass('is-valid');
            $('#confirm_password').removeClass('is-invalid');
            $('#error_confirm_password').removeClass('text-danger');
            $('#error_confirm_password').addClass('text-success');
            lblcp.innerHTML = "looks good !";
        }
    }
    
    function form_login(){
        
            var name = jQuery('#name').val();
            var lname = jQuery('#lname').val();
            var address1 = jQuery('#address1').val();
            var address2 = jQuery('#address2').val();
            var email = jQuery('#email').val();
            var mobile = jQuery('#mobile').val();
            var password = jQuery('#password').val();
            var confirm_password = jQuery('#confirm_password').val();
            // var frm_error = '';
            var lblname = document.getElementById("error_name");
             lblname.innerHTML = "";
            jQuery('.error_fields').html('');
            if (name.length <3) {
            lblname.innerHTML = "First Name must be more than 3 characters.";
            $('#name').addClass('is-invalid');
            $('#name').removeClass('is-valid');
            $('#error_name').removeClass('text-success');
            $('#error_name').addClass('text-danger');
            frm_error='yes';
            }
            if(name.length >3){
                $('#name').addClass('is-valid');
                $('#name').removeClass('is-invalid');
                $('#error_name').removeClass('text-danger');
                $('#error_name').addClass('text-success');
                lblname.innerHTML = "looks good !";
                frm_error='';
            }
            var lblmobile = document.getElementById("error_mobile");
            lblmobile.innerHTML = "";
            if (mobile.length==10) {
                $('#mobile').addClass('is-valid');
                $('#mobile').removeClass('is-invalid');
                $('#error_mobile').removeClass('text-danger');
                $('#error_mobile').addClass('text-success');
                lblmobile.innerHTML = "looks good !";
                frm_error='';
            }
            if (mobile.length!=6){
                lblmobile.innerHTML = "Post code must be of 6 digits";
                $('#mobile').addClass('is-invalid');
                $('#mobile').removeClass('is-valid');
                $('#error_mobile').removeClass('text-success');
                $('#error_mobile').addClass('text-danger');
                frm_error='yes';
            }
    
           
            if(email.length<=5){
                jQuery('#email').addClass('is-invalid');
                jQuery('#error_email').html('username must be an email id');
                frm_error='yes';
            }
            if(email.length>=6){
                jQuery('#email').removeClass('is-invalid');
                jQuery('#email').addClass('is-valid');
                frm_error='';
            }
            if(password.length <=4){
                jQuery('#password').addClass('is-invalid');
                jQuery('#error_password').html('Password must be more than 4 character');
                frm_error='yes';
            }
            if(password.length >=5){
                jQuery('#password').addClass('is-valid');
                jQuery('#password').removeClass('is-invalid');
                frm_error='';
            }
            var lblcp = document.getElementById("error_confirm_password");
            lblcp.innerHTML = "";
            if (confirm_password=='') {
                lblcp.innerHTML = "Password did not match !";
                $('#confirm_password').addClass('is-invalid');
                $('#confirm_password').removeClass('is-valid');
                $('#error_confirm_password').removeClass('text-success');
                $('#error_confirm_password').addClass('text-danger');
                frm_error='yes';
            }

            if(frm_error==''){
            $('#submit').html('connecting..');
            $.ajax ({
            url: "register-validate.php",
            type: "POST",
            data: 'name='+name+'&lname='+lname+'&email='+email+'&mobile='+mobile+'&address1='+address1+'&address2='+address2+'&password='+password+'&confirm_password='+confirm_password ,
          success: function(data){
                alert(data);
              if(data == 'correct'){
                // alert(data);
                jQuery('#msg').removeClass('alert alert-danger');
                jQuery('#msg').addClass('alert alert-success');
                jQuery('#frm_error').html('Successful');
                jQuery('#load').addClass('loader5');
                setTimeout(function() {
                    window.location.replace("index.php");
                }, 3000  ); 
              }
              else{  
                // alert(data);
                // alert('ELSE');
            $('#submit').html('submit');
            jQuery('#frm_error').html(data);
            jQuery('#msg').addClass('alert alert-danger');
              }
          }
        });
        
        }
        
    }
    </script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>