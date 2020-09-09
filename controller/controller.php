<?php
function listProducts(){
  require 'dashboard/model/products/list.product.php';
  $title = "Liste des produits";
  require ('view/produitsView.php');
}
function singleProduct(){
  $title = "Nom Produit";
  require ('view/produitView.php');
}
function addProduct(){
  require 'dashboard/model/products/add.product.php';
  $title = "Nouveau Produit";
  require ('view/templateView.php');
}
function editProduct(){
  require 'dashboard/model/products/add.product.php';
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
  require 'model/connection.php';
  require ('view/accueilView.php');
}
?>
