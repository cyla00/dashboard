

<?php
require 'controller/controller.php';



// affichage accueil

 if (isset($_GET['action'])){

   if ($_GET['action'] == 'produits'){
     $title = "Liste des produits";
     require ('view/produitsView.php');
   }
   if ($_GET['action'] == 'produit'){
     // $title = $value['nom_produit'];
     $title = "Nom Produit";
     require ('view/produitView.php');
   }
   if ($_GET['action'] == 'add'){
     $title = "Nouveau Produit";
     require ('view/templateView.php');
   }
   if ($_GET['action'] == 'edit'){
     $title = "Nom Produit";
     require ('view/templateView.php');
   }
} else {
  require ('view/accueilView.php');
}
