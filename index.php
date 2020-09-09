
<?php
require 'controller/controller.php';

// affichage accueil
try {

    if (isset($_GET['action'])){

       if ($_GET['action'] == 'produits'){
         listProducts();
       }
       if ($_GET['action'] == 'produit'){
         singleProduct();
       }
       if ($_GET['action'] == 'add'){
         addProduct();
       }
       if ($_GET['action'] == 'edit'){
         editProduct();
       }
       if ($_GET['action'] == 'setting'){
         settings();
       }
       else {
         throw new Exception("Nous avons pas pu accéder à votre demande", 1);
       }
    }

    else {
      accueil();
    }
}
catch (\Exception $e) {
  die('Erreur : ' . $e->getMessage());
}
?>
