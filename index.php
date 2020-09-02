

<?php
require 'controller/controller.php';



// affichage accueil

 if (isset($_GET['action'])){

   if ($_GET['action'] == 'page'){
     require ('view/pageView.php');
   }
} else {
  require ('view/view.php');
}
