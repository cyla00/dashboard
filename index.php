<?php
//CONNECTION REQUIRES
require_once "./model/connection.php";

//REGISTRATION REQUIRES
require_once "./model/registration/user.registration.php";
require_once "./model/registration/registration.err.php";

//LOGIN REQUIRES
require "./model/login/login.php";
require "./model/login/login.err.php";

//ADD PRODUCT
require './model/products/add.product.php';
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
       ?>
    </div>




    <div class="register">
      <form class="" action="index.php" method="post">
        <label for="nom">nom</label>
        <input type="text" name="nom" value=""><br>

        <label for="referance">referance</label>
        <input type="number" name="referance" value=""><br>

        <label for="categorie">categorie</label>
        <input type="text" name="categorie" value=""><br>

        <label for="dateAch">dateAch</label>
        <input type="date" name="dateAch" value=""><br>

        <label for="dateFin">dateFin</label>
        <input type="date" name="dateFin" value=""><br>

        <label for="prix">prix</label>
        <input type="number" name="prix" value=""><br>

        <label for="ticket">ticket</label>
        <input type="file" name="ticket" value=""><br>

        <label for="entretien">entretien</label>
        <input type="text" name="entretien" value=""><br>

        <label for="lieuxAchat">lieuxAchat</label>
        <input type="text" name="lieuxAchat" value=""><br>

        <label for="manuel">manuel</label>
        <input type="text" name="manuel" value=""><br>


        <input type="submit" name="add" value="add"><br>
      </form>
      <?php
      if(isset($_POST['add'])){
        AddProduct::AddInstance()->add();
      }
       ?>
    </div>


  </body>
</html>
