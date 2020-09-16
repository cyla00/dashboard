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
  require 'model/products/formAdd.php';
  require 'view/class/form.php';
  $title = "Nouveau Produit";
  $result = '';

      if (isset($_POST['addProduct'])) {

          $name = htmlspecialchars($_POST['name']);
          $ref = htmlspecialchars($_POST['ref']);
          $category = htmlspecialchars($_POST['category']);
          $dateAchat = htmlspecialchars($_POST['dateAchat']);
          $dateGaranti = htmlspecialchars($_POST['dateGaranti']);
          $prix = htmlspecialchars($_POST['prix']);
          $fact = htmlspecialchars($_POST['fact']);
          $manuel = htmlspecialchars($_POST['manuel']);
          $zoneEntretien = htmlspecialchars($_POST['zoneEntretien']);
          $lieuAchat = htmlspecialchars($_POST['lieuAchat']);

          $productAdd = New AddProduct($name, $ref, $category, $dateAchat, $dateGaranti, $prix, $fact, $zoneEntretien, $lieuAchat, $manuel);
          $productAdd->add();
          $creationConfirm = "<script>alert('Produit ajouté à la base de donnée')</script>";

      }
      require ('view/templateView.php');
}

function deleteProduct(){
  require 'model/products/delete.product.php';
  $title = htmlspecialchars($_GET['nom']);
  require ('view/deleteView.php');

}

function deleteProductConfirm(){
  require 'model/products/delete.product.php';
  $title = htmlspecialchars($_GET['nom']);
    if (isset($_GET['id'])) {
      $productDel = New DeleteProduct(htmlspecialchars($_GET['id']));
      $productDel->query();
      header("Refresh: 2;URL=index.php?action=produits");
      require ('view/messageView.php');
    }
    else {
      throw new Exception("Impossible de trouver le produit selectionné", 1);
    }
}

function editProduct(){

  require 'model/products/modify.product.php';
  require 'model/products/single.product.php';

  require 'view/class/form.php';
  $title = "Modifier Produit";
  $id = htmlspecialchars($_GET['id']);


      if (isset($_POST['modifyProduct'])) {
        if (isset($_GET['id'])) {
          $id = htmlspecialchars($_GET['id']);
          $name = htmlspecialchars($_POST['name']);
          $ref = htmlspecialchars($_POST['ref']);
          $category = htmlspecialchars($_POST['category']);
          $dateAchat = htmlspecialchars($_POST['dateAchat']);
          $dateGaranti = htmlspecialchars($_POST['dateGaranti']);
          $prix = htmlspecialchars($_POST['prix']);
          $fact = htmlspecialchars($_POST['fact']);
          $manuel = htmlspecialchars($_POST['manuel']);
          $zoneEntretien = htmlspecialchars($_POST['zoneEntretien']);
          $lieuAchat = htmlspecialchars($_POST['lieuAchat']);

          $productAdd = New ModifyProduct($id, $name, $ref, $category, $dateAchat, $dateGaranti, $prix, $fact, $zoneEntretien, $lieuAchat, $manuel);

          $productAdd->mod();
          $modificationConfirm = "<script>alert('Produit modifié')</script>";
        }
        else {
          throw new Exception("Impossible de trouver le produit selectionné", 1);
        }
    }
    $results = new SingleProduct();
    $result = $results->list($id);
    require 'model/products/formEdit.php';
    require ('view/templateView.php');

}

function settings(){
  require 'view/class/form.php';
  $title = "Settings";
  //$categories = ['Multimédia'];
  $categories = ['Multimédia','Téléphonie','Petit électroménager','Electroménager','Voiture','Sport'];
  $categories;
  require ('view/settingsView.php');
}

function graph(){
  require 'model/products/listAll.product.php';
  $title = "Reporting";
  $list = New ListAllProduct();
  $result = $list->list();
  $result1 = $list->produitParCat();
  require ('view/graphView.php');
}


function accueil(){
  require 'model/login/change.password.php';
  require 'model/login/login.php';
  require 'model/registration/registration.err.php';
  require 'model/registration/user.registration.php';
  require 'model/products/listAll.product.php';
  require ('view/accueilView.php');
}
