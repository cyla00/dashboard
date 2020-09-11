<?php
include 'header.php';
 ?>

<div class="container form content h-80 justify-content-center align-items-center border">

    <form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
      <?php $form = new Form(); ?>
      <div class="col-lg-6 col-sm-12">
        <?php
        echo $form->hidden('addProduct','1');
        echo $form->input('text','name', 'Nom du produit : ');
        echo $form->input('text','ref', 'Référence :');
        $categories = ['Multimédia','Téléphonie','Petit électroménager','Electroménager','Voiture','Sport'];
        echo $form->select('category', 'Catégorie : ', $categories);
        echo $form->input('text','prix', 'Prix : ');
        echo $form->input('text','lieuAchat', 'Lieux d\'achat : ');
         ?>
      </div>
      <div class="col-lg-6 col-sm-12">
        <?php
         echo $form->date('date','dateAchat', 'Date d\'achat : ');
         echo $form->date('date','dateGaranti', 'Date de fin de garantie : ');
         echo $form->file('file','fact', 'Facture : ');
         echo $form->file('file','manuel', 'Manuel d\'utilisation : ');
         ?>
      </div>
      <div class="form-group col-lg-12 col-sm-12">
        <?php echo $form->textarea('zoneEntretien', 'Conseils d\'entretien :');?>
      </div>
      <div class="col-lg-12 col-sm-12">
        <?php echo $form->submit('submit', 'Valider');?>
        <a href="index.php?action=produits"><button type="button" class="btn btn-outline-danger">Annuler</button></a>
      </div>

    </form>

</div>

<?php
if (isset($_POST['addProduct'])) {
  echo $creationConfirm;
}
include 'footer.php';
?>
