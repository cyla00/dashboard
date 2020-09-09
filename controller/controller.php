<?php
require 'model/connection.php';

function listProducts(){
  require 'model/products/listAll.product.php';
  $title = "Liste des produits";
  require ('view/produitsView.php');
}
function singleProduct(){
  $title = "Nom Produit";
  require ('view/produitView.php');
}
function addProduct(){
  require 'model/products/add.product.php';
  $title = "Nouveau Produit";
  require ('view/templateView.php');
}
function editProduct(){
  require 'model/products/add.product.php';
  $title = "Nom Produit";
  require ('view/templateView.php');
}
function settings(){
  $title = "Setting";
  require ('view/settingView.php');
}
function accueil(){
  require 'model/login/change.password.php';
  require 'model/login/login.php';
  require 'model/registration/registration.err.php';
  require 'model/registration/user.registration.php';
  require 'model/products/listAll.product.php';
  require ('view/accueilView.php');
}
?>
