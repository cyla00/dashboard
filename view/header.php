<?php

if (isset($_SESSION) === false) {
  session_start();
  //var_dump($_SESSION);
  // $_SESSION['admin'] == 'true';
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://cdnjs.com/libraries/font-awesome">
    <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.17.1/dist/bootstrap-table.min.css">
    <link rel="stylesheet" href="view/css/stylePage.css"/>
</head>

<div class="top-container text-center h-20 py-3 d-flex flex-row justify-content-around align-items-center" id="header-top">
  <div class="col-lg-6 col-sm-6">Bonjour UTILISATEUR , votre statut est admin/user</div>
  <div class="col-lg-6 col-sm-6">
    <a href="index.php?action=produits" alt="retour">Retour<i class="fas fa-level-up-alt fa-2x p-2"></i></a>

    <a href="index.php?stat=exit" alt="disconnect">Disconnect<i class="fas fa-sign-out-alt fa-2x p-2"></i></a>

  </div>
</div>

  <?php
if(isset($_GET['stat'])){
  require "./model/login/logout.php";
  logout();
}
   ?>

<div class="header py-5" id="header">
 <h1 class= text-center><?php echo $title; ?></h1>

</div>
