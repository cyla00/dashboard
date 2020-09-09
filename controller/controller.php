<?php
require 'model/connection.php';
require 'model/login/role.check.php';

function listProducts(){
  require 'model/products/listAll.product.php';
  $listall = New ListAllProduct();
  $list = $listall->list();
  $title = "Liste des produits";
  require ('view/produitsView.php');
}
function singleProduct($id){
  require 'model/products/listAll.product.php';

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
  require ('view/accueilView.php');

}
?>
