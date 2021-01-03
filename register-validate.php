<?php 
  include "db/config.php";
  if(isset($_POST['name']) && isset($_POST['lname']) && isset($_POST['address1']) && isset($_POST['address2']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
      $name =mysqli_real_escape_string($conn, $_POST['name']);
      $lname =mysqli_real_escape_string($conn, $_POST['lname']);
      $address1 =mysqli_real_escape_string($conn, $_POST['address1']);
      $address2 =mysqli_real_escape_string($conn, $_POST['address2']);
      $email =mysqli_real_escape_string($conn, $_POST['email']);
      $postcode =mysqli_real_escape_string($conn, $_POST['mobile']);
      $password =mysqli_real_escape_string($conn, $_POST['password']);
      $confirm_password =mysqli_real_escape_string($conn, $_POST['confirm_password']);
      $pass = password_hash($password, PASSWORD_BCRYPT);
      $cpass = password_hash($confirm_password, PASSWORD_BCRYPT);

      $emailquery = "select * from customers where username = '$email'";
      $query = mysqli_query($conn, $emailquery);

      $emailcount = mysqli_num_rows($query);
      if($emailcount>0)
        {
           echo "uSERNAME already registered";
        }
      else
        {
            if($password === $confirm_password){

                $insertquery = "insert into customers(username, password_hash, customer_forename, customer_surname, customer_postcode, customer_address1, customer_address2) values('$email', '$pass', '$name','$lname','$postcode','$address1', '$address2')";

                $iquery = mysqli_query($conn,$insertquery);

                if($iquery){
                echo'correct';
                }
                else{
                    echo'Failed to create account';
                }
                
            }
            else{
                echo "Password not matched ";
        }
    }

  
}
?>