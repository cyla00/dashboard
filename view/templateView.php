<?php
include 'header.php';

 ?>


<!-- <div id="header">
<div class="header py-5" id="myHeader">
 <h1 class= text-center>Nouveau produit</h1>
</div> -->

<div class="container form content h-80 justify-content-center align-items-center border">
<!-- enctype="multipart/form-data" -->
    <form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
      <div class="col-lg-6 col-sm-12">
        <div class="form-group col-lg-8 col-sm-12">
        <label for="name">Nom du produit:</label>
        <input type="text" id="name" class="form-control" placeholder="Entrer le nom" name="name" required>
        </div>
        <div class="form-group col-lg-8 col-sm-12">
        <label for="ref">Reférence:</label>
        <input type="text" id="ref" class="form-control" placeholder="Entrer a référence" name="ref">
        </div>
        <div class="form-group col-lg-8 col-sm-12">
        <label for="cat">Categorie:</label>
        <!-- <input type="text" id="cat" class="form-control" placeholder="Entrer la categorie" name="category"> -->
        <select class="form-control"name="category" id="cat">
               <option value="">Sélectionner la Categorie :</option>
               <option value="ref1">Multimédia</option>
               <option value="ref2">Téléphonie</option>
               <option value="ref3">Petit électroménager</option>
               <option value="ref4">Electroménager</option>
               <option value="ref5">Voiture</option>
               <option value="ref6">Voiture</option>
         </select>
        </div>
        <div class="form-group col-lg-8 col-sm-12">
        <label for="prix">Prix:</label>
        <input type="text" id="" class="form-control" placeholder="Entrer le prix" name="prix">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="form-group col-lg-8 col-sm-12">
          <label for="example-date-input" class="col-2 col-form-label">Date</label>
          <div class="">
            <input class="form-control" type="date" value="AAAA-MM-DD" id="example-date-input">
          </div>
        </div>
        <div class="form-group col-lg-8 col-sm-12">
          <label for="example-date-input" class="col-2 col-form-label">Date</label>
          <div class="">
            <input class="form-control" type="date" value="AAAA-MM-DD" id="example-date-input">
          </div>
        </div>
        <div class="form-group col-lg-8 col-sm-12">
        <label for="fact">Facture:</label>
        <input type="file" id="" class="form-control" name="fact" value="">
        <!-- <button type="submit" name="upload" class="btn btn-primary" value="Uploader">Uploader</button> -->
        </div>
        <div class="form-group col-lg-8 col-sm-12">
        <label for="nanuel">Manuel d'utilisation:</label>
        <input type="file" id="manuel" class="form-control" name="manuel" value="">
        <!-- <button type="submit" name="upload" class="btn btn-primary" value="Uploader">Uploader</button> -->
        </div>
      </div>
      <div class="form-group col-lg-12 col-sm-12">
      <label for="conseils">Conseils d'entretien:</label>
      <textarea type="text" id="conseils" class="form-control" rows="6" cols="50" name="conseils"></textarea>
      </div>
      <div class="col-lg-12 col-sm-12">
        <button type="submit" class="btn btn-outline-danger" name="submit">Enregistrer</button>
        <!-- <button type="button" value="Annuler" onclick="history.back()" class="btn btn-primary">Annuler</button> -->
        <a href="index.php?action=produits"><button type="button" class="btn btn-outline-danger">Annuler</button></a>
      </div>

    </form>

</div>

<?php
include 'footer.php';
?>
