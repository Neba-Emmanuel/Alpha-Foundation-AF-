<?php
if(isset($_POST["send_email"])){
    include_once("conn.processors.php");

    $email = mysqli_real_escape_string($conn,$_POST["email"]);

    if(empty($email)){
        $email = "Email is required";
        exit();
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email = "Invalid email format";
        exit();
      }
      else {
          $insert = mysqli_query($conn,"INSERT INTO email_registration(Email) VALUES('$email')");
      }
      /*if($insert){
          echo "Success";
      }
      else {
          echo "Unsuccessful";
          exit();
      }*/
}