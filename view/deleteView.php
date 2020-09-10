<?php
include 'header.php';

 ?>
<div class="container d-flex flex-row justify-content-center">
  <form role="form" action="index.php?action=deleteconfirm&id=<?php echo $_GET['id'];?>&nom=<?php echo $_GET['nom'];?>" method="post" class="row w-100 p-5 m-5 d-flex flex-row justify-content-center">
    <div class="text-center col-lg-6 col-sm-12 d-flex flex-column shadow p-5">
      <div class="form group p-5">
        <!-- <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <input type="hidden" name="nom" value="<?php echo $_GET['nom']; ?>"> -->
        Vous souhaitez supprimer le produit : <?= $title ?>
      </div>
      <div class="form group">
        <button type="submit" class="btn btn-outline-danger" name="submit">Confirmer</button>
        <a href="index.php?action=produits"><button type="button" class="btn btn-outline-danger">Annuler</button></a>
      </div>
   </div>
  </form>
</div>
<?php
include 'footer.php';
?>
