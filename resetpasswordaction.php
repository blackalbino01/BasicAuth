<?php

session_start();
if (isset($_POST['reset-password'])) {
  
  $email = $_POST['email'];

  
  $data = json_decode(file_get_contents($email.'.json'), true);
  $result = $data["email"]; 
  $_SESSION['data'] = $data;



  if ($email == $result) {

  
  	header('location: resetpassword.php');

  }

  elseif ($email != $result) {
    echo "Sorry, no user exists on our system with that email";
  }
  
} 

if(isset($_POST['new_password'])) {
  
  $new_pass = $_POST['new_pass'];
  $new_pass_c = $_POST['new_pass_c'];

  if ($new_pass !== $new_pass_c) echo "Password do not match";

  elseif ($new_pass === $new_pass_c) {

    $update = [
      'fullname' => $_SESSION['data']['fullname'],
      'email' => $_SESSION['data']['email'],
      'password' => $new_pass_c
    ];

    file_put_contents($update['email'].'.json', json_encode($update)); 

    header('location: login.php');  
  }
}
?>