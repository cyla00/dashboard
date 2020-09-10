<?php
require 'model/connection.php';
require 'model/login/role.check.php';
if (isset($_SESSION) === false) {
  session_start();
  $role = role_check();
}

function listProducts(){
  require 'model/products/listAll.product.php';
  $title = "Liste des produits";
  $list = New ListAllProduct();
  $result = $list->list();
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
function deleteProduct(){
  require 'model/products/delete.product.php';
  $title = "Suprimer Produit";
  if (isset($_GET['id'])) {
    $productDel = New DeleteProduct(htmlentities($_GET['id']));
    $productDel->query();
    require ('view/templateView.php');
  }
  elseif (!isset($_GET['id'])) {
    require ('view/templateView.php');
  }
  else {
    throw new Exception("Impossible de trouver le produit selectionné", 1);

  }
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
