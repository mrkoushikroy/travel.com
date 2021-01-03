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
    <?php
    include"navbar.php";
    ?>
    <div class="jumbotron d-flex align-items-center">
        <div class="container">
        
            <h3 class="font-weight-normal text-center mt-5">Book activity packages !</h3>
            <?php if(!isset($_SESSION['username'])){
          echo '<div class="alert alert-danger" role="alert">
         Please login to book the Activity packages
        </div>';  
        } ?>
            <!-- ---------------------------- -->
            <div class="" id="table-data">
            </div>
            <!-- ------------------------------------ -->
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
    </div>
    <hr>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Book Package</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="alert alert-success alert-danger d-none" role="alert" id="frm_error"></div>
        <form method="post">
            <div class="form-group">
                <!-- <label for="customerID">customerID</label> -->
                <input type="text" class="form-control" id="customerID" name="customerID"  value="<?php echo $id; ?>" hidden>
            </div>
            <div class="form-group">
                <!-- <label for="date">activityID</label> -->
                <input type="text" class="form-control" id="activityID" name="activityID" hidden>
            </div>
            <div class="form-group">
                <label for="date">Select date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd">
            </div>
            <div class="form-group">
                <label for="ticket">Select ticket</label>
                <select class="form-control" id="ticket" name="ticket">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </select>
            </div>
            <button type="button" class="btn btn-primary" onclick="modalsubmit()">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

   <?php include"footer.php"; ?>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="js/jquery.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    $(document).ready(function() {

        function loadtable() {
            $.ajax({
                url: "fetch-activities.php",
                type: "POST",
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        }
        loadtable();

        $(document).on("click", ".edit-btn", function() {
            var movieid = $(this).data("eid");
            // alert(movieid);
            $('#activityID').val(movieid);
            
        });
    });

    function modalsubmit() {
        var activityID = jQuery('#activityID').val();
        var customerID = jQuery('#customerID').val();
        var date = jQuery('#date').val();
        var ticket = jQuery('#ticket').val();
        $.ajax({
                url: "booking.php",
                type: "POST",
                data: 'activityID='+activityID+'&customerID='+customerID+'&date='+date+'&ticket='+ticket ,
          success: function(data){
            //   alert(data);
              if(data == "correct"){
                jQuery('#frm_error').removeClass('d-none');
                jQuery('#frm_error').removeClass('alert-danger');
                jQuery('#frm_error').html('Booking successful');
              }
              else{
                jQuery('#frm_error').removeClass('d-none');
                jQuery('#frm_error').removeClass('alert-success');
                jQuery('#frm_error').html('You have already booked or did not logged in');
              }
            }
            });
        }
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
</body>

</html>