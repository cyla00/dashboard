<?php
//CONNECTION REQUIRES
require_once "./model/connection.php";

//REGISTRATION REQUIRES
require_once "./model/registration/user.registration.php";
require_once "./model/registration/registration.err.php";

//LOGIN REQUIRES
require "./model/login/login.php";
require "./model/login/login.err.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <div class="login">
      <form class="" action="index.php" method="post">
        <label for="email">email</label>
        <input type="text" name="log_email" value=""><br>

        <label for="password">password</label>
        <input type="password" name="log_password" value=""><br>

        <input type="submit" name="login_btn" value="login"><br>
        <?php
        if(isset($_POST['login_btn'])){
          Login::log()->check();
        }
        log_err();
         ?>
      </form>

    </div>


    <div class="register">
      <form class="" action="index.php" method="post">
        <label for="first_name">first_name</label>
        <input type="text" name="first_name" value=""><br>

        <label for="last_name">last_name</label>
        <input type="text" name="last_name" value=""><br>

        <label for="email">email</label>
        <input type="text" name="email" value=""><br>

        <label for="password">password</label>
        <input type="password" name="password" value=""><br>

        <label for="re_password">re_password</label>
        <input type="password" name="re_password" value=""><br>

        <input type="submit" name="register" value="register"><br>
      </form>
      <?php
      if(isset($_POST['register'])){
        Registration::reg()->check();
      }
      reg_err();
       ?>
    </div>

  </body>
</html>
