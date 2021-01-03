<?php
session_start();
require_once"db/config.php";
if(isset($_POST["activityID"]) && isset($_POST["customerID"]) && isset($_POST["date"]) && isset($_POST["ticket"]))
{
    $activityID =mysqli_real_escape_string($conn, $_POST['activityID']);
    $customerID =mysqli_real_escape_string($conn, $_POST['customerID']);
    $date =mysqli_real_escape_string($conn, $_POST['date']);
    $ticket =mysqli_real_escape_string($conn, $_POST['ticket']);


    if(empty($activityID) && empty($customerID) && empty($date_of_activity) && empty($number_of_tickets)){
        echo 'Enter all fields';
    }
    else {
        $contact = "insert into booked_activities(activityID, customerID, date_of_activity, number_of_tickets) values('$activityID','$customerID','$date','$ticket')";
        $con_update= mysqli_query($conn, $contact);
        if($con_update){
            echo 'correct';
        }
        else{
            echo 'incorrect';
            
        }

    }

    }
          ?>