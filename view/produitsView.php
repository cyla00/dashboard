

<?php

include 'header.php';
?>
 <div class="container content">
     <div class="bs-bars pull-left">
         <button class="btn btn-default" onclick="displayChange()" type="button" name="toggle" aria-label="Toggle" title="Toggle">
           <i class="fas fa-th-list fa-2x"></i>
         </button>

         <button class="btn btn-default" >
           <a href="index.php?action=add"><i class="far fa-plus-square fa-2x"></i></a>
         </button>
         <button class="btn btn-default" >
           <a href="index.php?action=setting"><i class="fas fa-cog fa-2x"></i></a>
         </button>
    </div>

<!-- TABLE1 -->
<table id="listtable" class="table" data-toggle="table" data-show-columns="true" data-search="true" data-pagination="true">
  <thead>
    <tr class="text-center">
      <th data-sortable="true" data-field="details" class="col-1">Détails</th>
      <th data-sortable="true" data-field="id" class="col-1">ID</th>
      <th data-sortable="true" data-field="name" class="col-2">Nom</th>
      <th data-sortable="true" data-field="category" class="col-2">Categorie</th>
      <th data-sortable="true" data-field="ref" class="col-2">Référence</th>
      <th data-sortable="true" data-field="buy date" class="col-2">Acheté</th>
      <th data-sortable="true" data-field="garanty" class="col-2">Garantie</th>
      <th data-sortable="true" data-field="price" class="col-2">Prix</th>
      <th data-sortable="true" data-field="vendor" class="col-2">Vendeur</th>
      <!-- afficher que si admin -->
      <th data-sortable="true" class="col-2">modifier</th>
      <th data-sortable="true" class="col-2">supprimer</th>
    </tr>
  </thead>
  <tbody>

      <?php
      while ($donnees = $result->fetch()){ ?>
        <tr>
        <td class='text-center'><a href="index.php?action=produit&id=$value['id_produit']" ><i class="fas fa-info-circle fa-2x"></i></a></td>
        <td><?php echo $donnees['id_produit'] ?></td>
        <td><?php echo $donnees['nom_produit'] ?></td>
        <td><?php echo $donnees['categorie_produit'] ?></td>
        <td><?php echo $donnees['referance_produit'] ?></td>
        <td><?php echo $donnees['date_achat'] ?></td>
        <td><?php echo $donnees['data_fin_garantie'] ?></td>
        <td><?php echo $donnees['prix_produit'] ?></td>
        <td><?php echo $donnees['lieux_achat'] ?></td>
         <td><a href="index.php?action=edit&id=5"><i class="fas fa-edit fa-2x"></i></a></td>
        <td><a href="index.php?action=delete&id=5"><i class="fas fa-trash-alt fa-2x"></i></a>
        </td>
        </tr>
      <?php } ?>

    <tr class="text-center">
        <td class="col-1"><a href="index.php?action=produit&id=5"><i class="fas fa-info-circle fa-2x"></i></a></td>
        <td class="col-1">5</td>
        <td class="col-2">Cafetière</td>
        <td class="col-2">électroménager</td>
        <td class="col-2">5869df</td>
        <td class="col-2">14/09/1018</td>
        <td class="col-2">14/09/1010</td>
        <td class="col-2">149</td>
        <td class="col-2">cdiscount</td>
        <!-- seulement si user = admin -->
        <td class="col-2"><a href="index.php?action=edit&id=5"><i class="fas fa-edit fa-2x"></i></a></td>
        <td class="col-2"><a href="index.php?action=delete&id=5"><i class="fas fa-trash-alt fa-2x"></i></a></td>
    </tr>
    <tr class="text-center">
        <td class="col-1"><a href="index.php?action=produit&id=5"><i class="fas fa-info-circle fa-2x"></i></a></td>
        <td class="col-1">5</td>
        <td class="col-2">Lave vaisselle</td>
        <td class="col-2">électroménager</td>
        <td class="col-2">2324256KL</td>
        <td class="col-2">14/10/2019</td>
        <td class="col-2">14/10/2020</td>
        <td class="col-2">660</td>
        <td class="col-2">Darty Nevers</td>
        <!-- seulement si user = admin -->
        <td class="col-2">
          <a href="index.php?action=edit&id=5"><i class="fas fa-edit fa-2x"></i></a>
        </td>
        <td class="col-2">
          <a href="index.php?action=delete&id=5"><i class="fas fa-trash-alt fa-2x"></i></a>
        </td>
    </tr>
  </tbody>
</table>

  <table id="cardtable" style="display:none;" class="table" data-toggle="table" data-search="true" data-pagination="true">
     <tbody>
       <!-- <tr class="w-100"> -->
          <!-- <?php foreach ($data as $value): ?> -->
         <!-- <td class="w-50">
           <div class="card-view p-1">
           <span class="title mr-2">Produit:</span>
           <span class="value"><?php echo $value['id_produit'] ?></span>
           </div>
           <div class="card-view" p-1>
             <span class="title mr-2">Nom du produit:</span>
             <span class="value"><?php echo $value['nom_produit'] ?></span>
           </div>
           <div class="card-view" p-1>
             <span class="title mr-2">référence:</span>
             <span class="value"><?php echo $value['reference_produit'] ?></span>
           </div>
           <div class="card-view" p-1>
             <span class="title mr-2">Date d'achat:</span>
             <span class="value"><?php echo $value['date_achat'] ?></span>
           </div>
           <div class="card-view" p-1>
             <span class="title mr-2">Date fin de garantie:</span>
             <span class="value"><?php echo $value['data_fin_garantie'] ?></span>
           </div>
           <div class="card-view" p-1>
             <span class="title mr-2">Prix:</span>
             <span class="value"><?php echo $value['prix_produit'] ?></span>
           </div>
           <div class="card-view" p-1>
             <span class="title mr-2">e-comm/direct:</span>
             <span class="value"><?php echo $value['lieux_achat'] ?></span>
           </div>
           <td class="col-6 text-center justify-content-center align-items-center">
              <div class="col d-flex flex-row justify-content-around align-items-center">
                <div class="text-center align-self-center"><a href="index.php?action=produit&id=5" ><i class="fas fa-info-circle fa-2x"></i></a></div>
                <!-- affiche si status admin -->
                <!-- <div class="col text-center align-self-center"><a href="" ><i class="fas fa-edit fa-2x"></i></a></div>
                <div class="col text-center align-self-center"><a href="" ><i class="fas fa-trash-alt fa-2x"></i></i></a></div>
              </div>
            </td> -->


         </td> -->
         <!-- <?php endforeach; ?> -->
       <!-- </tr> -->
       <tr class="w-100 shadow" >
        <td class="col-6">
           <div class="card-view p-1">
           <span class="title mr-2">Id:</span>
           <span class="value">5</span>
           </div>
           <div class="card-view p-1">
           <span class="title mr-2">Produit:</span>
           <span class="value">Cafetière</span>
           </div>
           <div class="card-view p-1" >
             <span class="title mr-2">référence:</span>
             <span class="value">electromeneger</span>
           </div>
           <div class="card-view p-1">
             <span class="title mr-2">Date d'achat:</span>
             <span class="value">14/09/2018</span>
           </div>
           <div class="card-view p-1">
             <span class="title mr-2">Date fin de garantie:</span>
             <span class="value">14/09/2020</span>
           </div>
           <div class="card-view p-1">
             <span class="title mr-2">Prix:</span>
             <span class="value">249</span>
           </div>
           <div class="card-view p-1">
             <span class="title mr-2">e-comm/direct:</span>
             <span class="value">cdiscount</span>
           </div>
        </td>
        <td class="col-6 text-center justify-content-center align-items-center">
          <div class="d-flex flex-row justify-content-around align-items-center">
            <div class="col text-center align-self-center"><a href="index.php?action=produit&id=5" ><i class="fas fa-info-circle fa-2x"></i></a></div>
            <!-- affiche si status admin -->
            <div class="col text-center align-self-center"><a href="" ><i class="fas fa-edit fa-2x"></i></a></div>
            <div class="col text-center align-self-center"><a href="" ><i class="fas fa-trash-alt fa-2x"></i></i></a></div>
          </div>
        </td>
       </tr>
     </tbody>
  </table>
 </div>

 <?php
 include 'footer.php';
 ?>
