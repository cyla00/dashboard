<?php
require 'model/connection.php';
require 'model/login/role.check.php';

if (!isset($_SESSION)) {
  session_start();
  if (isset($_SESSION['logged_email'])) {
    $role = role_check();
  }
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
  require 'view/class/form.php';
  $title = "Nouveau Produit";

      if (isset($_POST['addProduct'])) {

          $name = htmlentities($_POST['name']);
          $ref = htmlentities($_POST['ref']);
          $category = htmlentities($_POST['category']);
          $dateAchat = htmlentities($_POST['dateAchat']);
          $dateGaranti = htmlentities($_POST['dateGaranti']);
          $prix = htmlentities($_POST['prix']);
          $fact = htmlentities($_POST['fact']);
          $manuel = htmlentities($_POST['manuel']);
          $zoneEntretien = htmlentities($_POST['zoneEntretien']);
          $lieuAchat = htmlentities($_POST['lieuAchat']);

          $productAdd = New AddProduct($name, $ref, $category, $dateAchat, $dateGaranti, $prix, $fact, $manuel, $zoneEntretien, $lieuAchat);
          $productAdd->add();
          $creationConfirm = "<script>alert('Produit ajouté à la base de donnée')</script>";

      }
      require ('view/templateView.php');
}

function deleteProduct(){
  require 'model/products/delete.product.php';
  $title = htmlentities($_GET['nom']);
  require ('view/deleteView.php');

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
    else {
      throw new Exception("Impossible de trouver le produit selectionné", 1);
    }
}

function editProduct(){

  require 'model/products/modify.product.php';
  $title = "Modifier Produit";
  $idGet = '<input type="hidden" name="id" value="' . htmlentities($_GET['id']) . '">';
      if (isset($_POST['addProduct'])) {
        if (isset($_POST['id'])) {
          $id = htmlentities($_POST['id']);
          $name = htmlentities($_POST['name']);
          $ref = htmlentities($_POST['ref']);
          $category = htmlentities($_POST['category']);
          $dateAchat = htmlentities($_POST['dateAchat']);
          $dateGarenti = htmlentities($_POST['dateGaranti']);
          $prix = htmlentities($_POST['prix']);
          $fact = htmlentities($_POST['fact']);
          $manuel = htmlentities($_POST['manuel']);
          $zoneEntretien = htmlentities($_POST['zoneEntretien']);
          $lieuxAchat = htmlentities($_POST['lieuAchat']);

          $productAdd = New ModifyProduct($id, $name, $ref, $category, $dateAchat, $dateGaranti, $prix, $fact, $manuel, $zoneEntretien, $lieuAchat);

          $productAdd->mod();
          $modificationConfirm = "<script>alert('Produit modifié')</script>";
        }
        else {
          throw new Exception("Impossible de trouver le produit selectionné", 1);
        }
    }
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
