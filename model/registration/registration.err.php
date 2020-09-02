<?php
function reg_err(){
  if(!isset($_GET['register'])){
    exit();
  }
  else{
    $registerCheck = $_GET['register'];
    if($registerCheck == "empty"){
      echo "<p class='reg_error'>fill all fields!</p>";
      exit();
    }
    else if($registerCheck == "names"){
      echo "<p class='reg_error'>please use a valid name!</p>";
      exit();
    }
    else if($registerCheck == "mail"){
      echo "<p class='reg_error'>please use a valid email!</p>";
      exit();
    }
    else if($registerCheck == "success"){
      echo "<p class='reg_success'>Registration successfull!</p>";
      exit();
    }
  }
}
