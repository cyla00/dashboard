
<?php
include 'header.php';
?>

<div class="container-fluid m-0 p-0">
  <div class="jumbotron shadow-lg p-4 mb-4 bg-white">
    <!-- <?php echo $value['category'] ?>
    <?php echo $value['date_achat'] ?>
    <?php echo $value['data_fin_garantie'] ?>
    <?php echo $value['prix_produit'] ?>
    <?php echo $value['lieux_achat'] ?> -->
    <h2 class="d-flex flex-colomn justify-content-between">Rappel des caractéristiques du produit : </h2>
    <div class="col-lg-6 col-sm-12">
      <div>Reference du produit : djhfjkshdfkjds</div>
      <div>Catégorie du produit : électroménager</div>
      <div>Prix: 249 €</div>
      <div>A été acheté : CDISCOUNT</div>
    </div>
    <div class="col-lg-6 col-sm-12">
      <div class="row">
        <div class="col-lg-6 col-sm-10">
          <div>Date d'achat : 14/09/2018</div>
          <div>Produit garantis jusqu'au : 14/09/2020</div>
        </div>
        <div class="col-lg-6 col-sm-4">Il reste x jours de garantie</div>
      </div>
    </div>

  </div>
  <div class="row">
    <div class="col-lg-8 col-sm-12 p-5">
      <h3>conseils d'utilisation</h3>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
    <div class="col-lg-4 col-sm-12 p-5">
      <div class="d-flex flex-column justify-content-around">
          <!-- <div class="d-flex flex-row h-50 m-5"><a href="manuel_utilisation/<?php echo $value['manuel_utilisation'] ?>.pdf" download="Titre à afficher du fichier" type="button" class="btn btn-outline-danger"><i class="fas fa-upload"></i></a></div>  -->
          <div class="d-flex flex-row my-1"><a href="manuel_utilisation/act101m-19.pdf" download="manuel_utilisation" type="button" class="btn btn-outline-danger">Manuel d'utilisation<i class="fas fa-upload fa-x3 ml-2"></i></a></div>
          <!-- <div class="d-flex flex-row h-50 m-5"><a href="facture/<?php echo $value['photo_ticket'] ?>.pdf" download="Titre à afficher du fichier" type="button" class="btn btn-outline-danger"><i class="fas fa-upload"></i></a></div>  -->
          <div class="d-flex flex-row my-1"><a href="facture/facture.pdf" download="facture" type="button" class="btn btn-outline-danger">Facture<i class="fas fa-upload fa-x3 ml-2"></i></a></div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>
