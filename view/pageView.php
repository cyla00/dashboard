

 <?php

 if (isset($_SESSION)=== false) {
   session_start();
 }
 ?>

 <!DOCTYPE html>
 <html lang="en">
 	<head>
 		<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <link href="https://www.glyphicons.com/">
     <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
     <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css">
     <link rel="stylesheet" href="view/css/stylePage.css"/>
 </head>

 <div class="container">
   <!-- <div class="fixed-table-toolbar"> -->
     <div class="bs-bars pull-left">
         <button class="btn btn-default" onclick="displayChange()" type="button" name="toggle" aria-label="Toggle" title="Toggle">
           <i class="fas fa-th-list"></i>
         </button>
         <div class="keep-open btn-group" title="Columns">
           <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-label="Columns" title="Columns" aria-expanded="false">
           <i class="fas fa-filter"></i>
           <span class="caret"></span>
           </button>
             <ul class="dropdown-menu" role="menu">
               <li class="dropdown-item-marker" role="menuitem">
                 <label><input type="checkbox" data-field="id" value="0" checked="checked"><span>ID</span></label>
               </li>
               <li class="dropdown-item-marker" role="menuitem">
                 <label><input type="checkbox" data-field="name" value="1" checked="checked"> <span>Name</span></label>
               </li>
               <li class="dropdown-item-marker" role="menuitem">
                 <label><input type="checkbox" data-field="buy date" value="2" checked="checked"><span>Buy date</span></label>
               </li>
               <li class="dropdown-item-marker" role="menuitem">
                 <label><input type="checkbox" data-field="garanty" value="3" checked="checked"> <span>Garanty</span></label>
               </li>
               <li class="dropdown-item-marker" role="menuitem">
                 <label><input type="checkbox" data-field="price" value="4" checked="checked"> <span>Price</span></label>
               </li>
               <li class="dropdown-item-marker" role="menuitem">
                 <label><input type="checkbox" data-field="vendor" value="5" checked="checked"> <span>e-comm/direct</span></label>
               </li>
             </ul>
         </div>
     <!-- </div> -->
    </div>



   <div class="toolbar">
     <!-- <?php foreach ($data as $value): ?> --><?php $value['categorie_produit'] ?>
     <button id="alertBtn" class="btn btn-default">categorie value</button>
     <!-- <?php endforeach; ?> -->

   </div>


   <table id="listtable" class="table" data-toggle="table" data-search="true" data-pagination="true">
     <thead>
       <th data-sortable="true" data-field="id">ID</th>
       <th data-sortable="true" data-field="name">Name</th>
       <th data-sortable="true" data-field="buy date">Buy</th>
       <th data-sortable="true" data-field="garanty">Garanty</th>
       <th data-sortable="true" data-field="price">Price</th>
       <th data-sortable="true" data-field="vendor">e-comm/direct</th>
       <th data-sortable="true" data-field="actionview"data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
       <th data-sortable="true" data-field="actions" data-formatter="operateFormatter" data-events="operateEvents">Actions</th>
     </thead>
     <tbody>
       <tr>
         <!-- <?php foreach ($data as $value): ?> -->
           <!-- <td><?php $value['id_produit'] ?></td>
           <td><?php $value['nom_produit'] ?></td>
           <td><?php $value['referance_produit'] ?></td>
           <td><?php $value['date_achat'] ?></td>
           <td><?php $value['data_fin_garantie'] ?></td>
           <td><?php $value['prix_produit'] ?></td>
           <td><?php $value['lieux_achat'] ?></td> -->
         <!-- <?php endforeach; ?> -->
       </tr>
       <tr>

           <td>jgkslfgjs</td>
           <td>fdgdfg</td>
           <td>dfgdfgdf</td>
           <td>dfgdfg</td>
           <td>dfgdfgd</td>
           <td>dfgdfgdfgfd></td>
           <td>dfgdfgdfg</td>

       </tr>

     </tbody>
  </table>
  <table id="cardtable" style="display:none;" class="table" data-toggle="table" data-search="true" data-pagination="true">
     <tbody>
       <!-- <tr> -->
          <!-- <?php foreach ($data as $value): ?> -->
         <!-- <td>
           <div class="card-view">
           <span class="title" style="">Produit:</span>
           <span class="value"><?php $value['id_produit'] ?></span>
           </div>
           <div class="card-view">
             <span class="title" style="">Nom du produit:</span>
             <span class="value"><?php $value['nom_produit'] ?></span>
           </div>
           <div class="card-view">
             <span class="title" style="">référence:</span>
             <span class="value"><?php $value['reference_produit'] ?></span>
           </div>
           <div class="card-view">
             <span class="title" style="">Date d'achat:</span>
             <span class="value"><?php $value['date_achat'] ?></span>
           </div>
           <div class="card-view">
             <span class="title" style="">Date fin de garantie:</span>
             <span class="value"><?php $value['data_fin_garantie'] ?></span>
           </div>
           <div class="card-view">
             <span class="title" style="">Prix:</span>
             <span class="value"><?php $value['prix_produit'] ?></span>
           </div>
           <div class="card-view">
             <span class="title" style="">e-comm/direct:</span>
             <span class="value"><?php $value['lieux_achat'] ?></span>
           </div>
         </td>-->
         <!-- <?php endforeach; ?> -->
       <!-- </tr> -->
       <tr>

         <td>
           <div class="card-view">
           <span class="title" style="">Produit:</span>
           <span class="value">sgsdgdsg</span>
           </div>
           <div class="card-view">
             <span class="title" style="">Nom du produit:</span>
             <span class="value">sdgsdgsdg</span>
           </div>
           <div class="card-view">
             <span class="title" style="">référence:</span>
             <span class="value">sdgsdgdsgsdg</span>
           </div>
           <div class="card-view">
             <span class="title" style="">Date d'achat:</span>
             <span class="value">sgsdsdg</span>
           </div>
           <div class="card-view">
             <span class="title" style="">Date fin de garantie:</span>
             <span class="value">sdgsdgdsg</span>
           </div>
           <div class="card-view">
             <span class="title" style="">Prix:</span>
             <span class="value">sdgsdgsdgsdg</span>
           </div>
           <div class="card-view">
             <span class="title" style="">e-comm/direct:</span>
             <span class="value">sdfsdfsdfsdf</span>
           </div>
         </td>

       </tr>
     </tbody>
  </table>
 </div>

 <?php
 include 'footer.php';
 ?>
