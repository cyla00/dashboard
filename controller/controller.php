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
  require 'view/class/form.php';
  $title = "Nouveau Produit";
  try {
      if (isset($_POST['addProduct'])) {
        $productAdd = New AddProduct($_POST['name'], $_POST['ref'], $_POST['category'], $_POST['dateAchat'], $_POST['dateGaranti'], $_POST['prix'], $_POST['fact'], $_POST['manuel'], $_POST['zoneEntretien'], $_POST['lieuAchat']);
        $productAdd->add();
        $creationConfirm = "<script>alert('Produit ajouté à la base de donnée')</script>";
      }
      require ('view/templateView.php');
    }
    catch (\Exception $e) {
      die('Error:' . $e->getMessage());
    }
}

function deleteProduct(){
  require 'model/products/delete.product.php';
  $title = htmlentities($_GET['nom']);
  require ('view/deleteView.php');
   if (isset($_POST['submit'])) {
  }
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

    }
}
function editProduct(){

  require 'model/products/add.product.php';
  require 'view/class/form.php';
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
