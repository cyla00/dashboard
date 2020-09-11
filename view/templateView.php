<?php
include 'header.php';
require 'class/form.php';
 ?>

<div class="container form content h-80 justify-content-center align-items-center border">

    <form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
      <?php $form = new Form(); ?>
      <div class="col-lg-6 col-sm-12">
        <?php
        echo $form->input('text','nom', 'Nom du produit : ');
        echo $form->input('text','referance', 'Référence : ');
        // $categories = ['0' => 'Multimédia','1'=>'Téléphonie','2'=>'Petit électroménager','3'=>'Electroménager','4'=>'Voiture','5'=>'Sport'];
        $categories = ['Multimédia','Téléphonie','Petit électroménager','Electroménager','Voiture','Sport'];
        echo $form->select('categorie', 'Catégorie : ', $categories );
        echo $form->input('text','prix', 'Prix : ');
        echo $form->input('text','lieuxAchat', 'Lieux d\'achat : ');
         ?>
      </div>
      <div class="col-lg-6 col-sm-12">
        <?php
         echo $form->date('date','dateAch', 'Date d\'achat : ');
         echo $form->date('date','dateFin', 'Date de fin de garantie : ');
         echo $form->file('file','ticket', 'Facture : ');
         echo $form->file('file','manuel', 'Manuel d\'utilisation : ');
         ?>
      </div>
      <div class="form-group col-lg-12 col-sm-12">
        <?php echo $form->textarea('entretien', 'Conseils d\'entretien :');?>
      </div>
      <div class="col-lg-12 col-sm-12">
        <?php echo $form->submit('submit', 'Valider');?>
        <a href="index.php?action=produits"><button type="button" class="btn btn-outline-danger">Annuler</button></a>
      </div>

    </form>

</div>

<?php
include 'footer.php';
?>
