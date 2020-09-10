<?php

include 'header.php';

?>
 <div class="container content">
     <div class="bs-bars pull-left">
         <button class="btn btn-default" onclick="displayChange()" type="button" name="toggle" aria-label="Toggle" title="Toggle">
           <i class="fas fa-th-list fa-2x"></i>
         </button>
         <?php if ($role == 'Admin'): ?>
         <button class="btn btn-default" >
           <a href="index.php?action=add"><i class="far fa-plus-square fa-2x"></i></a>
         </button>
         <button class="btn btn-default" >
           <a href="index.php?action=setting"><i class="fas fa-cog fa-2x"></i></a>
         </button>
         <?php endif; ?>
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
      <?php if ($role == 'Admin'): ?>
        <th data-sortable="true" class="col-2">modifier</th>
        <th data-sortable="true" class="col-2">supprimer</th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody>
        <?php
        while ($data = $result->fetch()) { ?>
          <tr>
          <td class='text-center'><a href="index.php?action=produit&id=<?php echo $data['id_produit']; ?>" ><i class="fas fa-info-circle fa-2"></i></a></td>
          <td><?php echo $data['referance_produit']; ?></td>
          <td><?php echo $data['nom_produit']; ?></td>
          <td><?php echo $data['categorie_produit']; ?></td>
          <td><?php echo $data['referance_produit']; ?></td>
          <td><?php echo $data['date_achat']; ?></td>
          <td><?php echo $data['data_fin_garantie'] ?></td>
          <td><?php echo $data['prix_produit']; ?></td>
          <td><?php echo $data['lieux_achat']; ?></td>
          <?php if ($role == 'Admin'): ?>
          <td><a href="index.php?action=edit&<?php echo $data['id_produit']; ?>"><i class="fas fa-edit fa-2x"></i></a></td>
          <td><a href="index.php?action=delete&<?php echo $data['id_produit']; ?>"><i class="fas fa-trash-alt fa-2x"></i></a></td>
          <?php endif; ?>
        </tr>
        <?php }; ?>

  </tbody>
</table>


<table id="cardtable" style="display:none;" class="table" data-toggle="table" data-search="true" data-pagination="true">
   <tbody>
     <?php
        while ($data = $result->fetch()) {  var_dump($data); ?>
     <tr class="w-100">
        <td class="w-50">
         <div class="card-view p-1">
         <span class="title mr-2">Produit:</span>
         <span class="value"><?php echo $data['id_produit']; ?></span>
         </div>
         <div class="card-view p-1">
           <span class="title mr-2">Nom du produit:</span>
           <span class="value"><?php echo $data['nom_produit']; ?></span>
         </div>
         <div class="card-view p-1">
           <span class="title mr-2">référence:</span>
           <span class="value"><?php echo $data['referance_produit']; ?></span>
         </div>
         <div class="card-view p-1">
           <span class="title mr-2">Date d'achat:</span>
           <span class="value"><?php echo $data['date_achat']; ?></span>
         </div>
         <div class="card-view p-1">
           <span class="title mr-2">Date fin de garantie:</span>
           <span class="value"><?php echo $data['data_fin_garantie']; ?></span>
         </div>
         <div class="card-view p-1">
           <span class="title mr-2">Prix:</span>
           <span class="value"><?php echo $data['prix_produit']; ?></span>
         </div>
         <div class="card-view p-1">
           <span class="title mr-2">e-comm/direct:</span>
           <span class="value"><?php echo $data['lieux_achat']; ?></span>
         </div>
         <td class="col-6 text-center justify-content-center align-items-center">
            <div class="col d-flex flex-row justify-content-around align-items-center">
              <div class="text-center align-self-center"><a href="index.php?action=produit&<?php echo $data['id_produit']; ?>"><i class="fas fa-info-circle fa-2x"></i></a></div>
              <!-- affiche si status admin -->
              <?php if ($role == 'Admin'): ?>
              <div class="col text-center align-self-center"><a href="index.php?action=edit&<?php echo $data['id_produit']; ?>"><i class="fas fa-edit fa-2x"></i></a></div>
              <div class="col text-center align-self-center"><a href="index.php?action=delete&<?php echo $data['id_produit']; ?>"><i class="fas fa-trash-alt fa-2x"></i></a></div>
              <?php endif; ?>
            </div>
          </td>
        </td>
      </tr>
    <?php } ?>
   </tbody>
 </table>
</div>

 <?php
 include 'footer.php';
 ?>
