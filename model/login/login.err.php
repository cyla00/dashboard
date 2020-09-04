<?php
  function log_err(){
    if(!isset($_GET['login'])){
      exit();
    }
    else{
      $login_error = $_GET['login'];
      if($login_error == 'fail'){
        echo "<p class='reg_error'>invalid user!</p>";
        header('Location: index.php');
        exit();
      }
      else{
        echo "<p class='reg_error'>logged in!</p>";
      }
    }
  }
