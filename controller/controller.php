<?php
if (isset($_SESSION) === false) {
  session_start();
}

require 'model/connection.php';
require 'model/login/role.check.php';
$role = role_check();

function listProducts(){
  require 'model/products/listAll.product.php';
  $title = "Liste des produits";
  $list = New ListAllProduct();
  $result = $list->list();
  require ('view/produitsView.php');
}

function singleProduct($id){
  require 'model/products/single.product.php';
  $product = new SingleProduct();
  $result = $product->list($id);
  $title = $result['nom_produit'];
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
