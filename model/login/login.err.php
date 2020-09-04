<?php
  function log_err(){
    if(!isset($_GET['login'])){
    }
    else{
      $login_error = $_GET['login'];
      if($login_error == 'empty'){
        echo "<p class='reg_error'>fill all cases!</p>";
      }
      else if($login_error == 'fail'){
        echo "<p class='reg_error'>invalid user!</p>";
      }
      else{
        echo "<p class='reg_success'>logged in!</p>";
      }
    }
  }
