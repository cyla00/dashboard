<?php
function reg_err(){
  if(!isset($_GET['register'])){
  }
  else{
    $registerCheck = $_GET['register'];
    if($registerCheck == "empty"){
      echo "<p class='reg_error'>fill all fields!</p>";
    }
    else if($registerCheck == "names"){
      echo "<p class='reg_error'>please use a valid name!</p>";
    }
    else if($registerCheck == "mail"){
      echo "<p class='reg_error'>please use a valid email!</p>";
    }
    else if($registerCheck == "success"){
      echo "<p class='reg_success'>successfully registered!</p>";
    }
    else if($registerCheck == "exists"){
      echo "<p class='reg_error'>email already exists!</p>";
    }
  }
}
