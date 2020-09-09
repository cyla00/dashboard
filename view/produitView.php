
<?php
include 'header.php';
?>

<div class="container-fluid content m-0 p-0">
  <div class="jumbotron shadow-lg p-4 mb-4 bg-white">
    <?php while ($data = $list->fetch()) { ?>
    <h2 class="d-flex flex-colomn justify-content-between">Rappel des caractéristiques du produit : </h2>
    <div class="row">
      <div class="col-lg-6 col-sm-12 p-2 border">
        <div>Reference du produit : <?php echo $data['referance_produit']; ?></div>
        <div>Catégorie du produit : <?php echo $data['categorie_produit']; ?></div>
        <div>Prix: <?php echo $data['prix_produit']; ?> €</div>
        <div>A été acheté : <?php echo $data['lieux_achat']; ?></div>
      </div>
      <div class="col-lg-6 col-sm-12 p-2 border">
        <div class="row">
          <div class="col-lg-6 col-sm-10">
            <div>Date d'achat : <?php echo $data['date_achat']; ?></div>
            <div>Produit garantis jusqu'au : <?php echo $data['data_fin_garantie']; ?></div>
          </div>
          <div class="col-lg-6 col-sm-4">Il reste x jours de garantie</div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-8 col-sm-12 p-5">
      <h3>conseils d'entretien</h3>
      <?php echo $data['zone_entretien']; ?>
    </div>
    <div class="col-lg-4 col-sm-12 p-5">
      <div class="d-flex flex-column justify-content-around">
          <!-- <div class="d-flex flex-row h-50 m-5"><a href="manuel_utilisation/<?php echo $value['manuel_utilisation'] ?>.pdf" download="Titre à afficher du fichier" type="button" class="btn btn-outline-danger"><i class="fas fa-upload"></i></a></div>  -->
          <div class="d-flex flex-row my-1"><a href="<?php echo $data['manuel_utilisation']; ?>" download="manuel_utilisation" type="button" class="btn btn-outline-danger">Manuel d'utilisation<i class="fas fa-upload fa-x3 ml-2"></i></a></div>
          <!-- <div class="d-flex flex-row h-50 m-5"><a href="facture/<?php echo $value['photo_ticket'] ?>.pdf" download="Titre à afficher du fichier" type="button" class="btn btn-outline-danger"><i class="fas fa-upload"></i></a></div>  -->
          <div class="d-flex flex-row my-1"><a href="<?php echo $data['photo_ticket']; ?>" download="facture" type="button" class="btn btn-outline-danger">Facture<i class="fas fa-upload fa-x3 ml-2"></i></a></div>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<?php
include 'footer.php';
?>
