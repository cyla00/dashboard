<?php
include 'header.php';
 ?>

<div class="container form content h-80 justify-content-center align-items-center border">

    <form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
      <?php $form = new Form(); ?>
      <div class="col-lg-6 col-sm-12">

        <?php
        echo $form->hidden('addProduct','1','');
        echo $form->input('text','name', 'Nom du produit : ', $result['nom_produit']);
        echo $form->input('text','ref', 'Référence :', $result['referance_produit']);
        $categories = ['Multimédia','Téléphonie','Petit électroménager','Electroménager','Voiture','Sport'];
        echo $form->select('category', 'Catégorie : ', $categories, $result['categorie_produit']);
        echo $form->input('text','prix', 'Prix : ', $result['prix_produit']);
        echo $form->input('text','lieuAchat', 'Lieux d\'achat : ', $result['lieux_achat']);
         ?>
      </div>
      <div class="col-lg-6 col-sm-12">
        <?php
         echo $form->date('date','dateAchat', 'Date d\'achat : ', $result['date_achat']);
         echo $form->date('date','dateGaranti', 'Date de fin de garantie : ', $result['data_fin_garantie']);
         echo $form->file('file','fact', 'Facture : ', $result['photo_ticket']);
         echo $form->file('file','manuel', 'Manuel d\'utilisation : ', $result['manuel_utilisation']);
         ?>
      </div>
      <div class="form-group col-lg-12 col-sm-12">
        <?php echo $form->textarea('zoneEntretien', 'Conseils d\'entretien :', $result['zone_entretien']);?>
      </div>
      <div class="col-lg-12 col-sm-12">
        <?php echo $form->submit('submit', 'Valider');?>
        <a href="index.php?action=produits"><button type="button" class="btn btn-outline-danger">Annuler</button></a>
      </div>
    </form>
</div>

<?php
  if (isset($creationConfirm)) {
    echo $creationConfirm;
  }
  elseif (isset($modificationConfirm)) {
    echo $modificationConfirm;
  }

include 'footer.php';
?>
