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

function deleteProduct(){
  require 'model/products/delete.product.php';
  $title = htmlentities($_GET['nom']);
  require ('view/deleteView.php');
   if (isset($_POST['submit'])) {
    // var_dump($_POST['id']);
  }
<<<<<<< HEAD
  elseif (!isset($_GET['id'])) {
    require ('view/produitView.php');
  }
  else {
    throw new Exception("Impossible de trouver le produit selectionné", 1);
=======
}
function deleteProductConfirm(){
  require 'model/products/delete.product.php';
  $title = htmlentities($_GET['nom']);
    if (isset($_GET['id'])) {
      $productDel = New DeleteProduct(htmlentities($_GET['id']));
      $productDel->query();
      require ('view/messageView.php');
      header("Refresh: 2;URL=index.php?action=produits");
    }
    elseif (!isset($_GET['id'])) {
      require ('view/produitsView.php');
    }
    else {
      throw new Exception("Impossible de trouver le produit selectionné", 1);
>>>>>>> 74827daa534f0ed87c8dda8f16c2cd458e5f1314

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
