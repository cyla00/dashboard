<?php
  function log_err(){
    if(!isset($_GET['login'])){
      exit();
    }
    else{
      $login_error = $_GET['login'];
      if($login_error == 'invalid'){
        echo "<p class='reg_error'>invalid user!</p>";
        header('Location: index.php'.$_SERVER[REQUEST_URI]);
        exit();
      }
    }
  }
