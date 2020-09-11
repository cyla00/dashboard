<?php
include 'header.php';

 ?>

<div class="container form content h-80 justify-content-center align-items-center border">
<!-- enctype="multipart/form-data" -->
    <form action="" method="post" class="col-lg-12 col-sm-12 row p-5" >
      <div class="col-lg-6 col-sm-12">
        <input type="hidden" name="addProduct" value="true">
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
            <input class="form-control" type="date" value="AAAA-MM-DD" id="example-date-input" name="dateAchat">
          </div>
        </div>
        <div class="form-group col-lg-8 col-sm-12">
          <label for="example-date-input" class="col-2 col-form-label">Date</label>
          <div class="">
            <input class="form-control" type="date" value="AAAA-MM-DD" id="example-date-input" name="dateGaranti">
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
        <div class="form-group col-lg-8 col-sm-12">
        <label for="prix">Zone Entretien</label>
        <input type="text" id="" class="form-control" placeholder="Entrer la Zone d'entretien" name="zoneEntretien">
        </div>
        <div class="form-group col-lg-8 col-sm-12">
        <label for="prix">Lieu D'Achat</label>
        <input type="text" id="" class="form-control" placeholder="Entrer le lieu d'achat" name="lieuAchat">
        </div>
      </div>
      <div class="col-lg-12 col-sm-12">
        <button type="submit" class="btn btn-outline-danger" name="submit">Enregistrer</button>
        <!-- <button type="button" value="Annuler" onclick="history.back()" class="btn btn-primary">Annuler</button> -->
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
