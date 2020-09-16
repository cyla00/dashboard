

<?php
include 'header.php';
?>
<form class="col-lg-12 col-sm-12 row p-5" action="" method="post">
  <?php $form = new Form(); ?>
  <div class="col-lg-6 col-sm-12 m-2">
  <?php
  echo $form->input('text','cat', 'Categorie : ', '');
   ?>
  </div>
  <div class="col-lg-12 col-sm-12 m-2">
    <?php echo $form->submit('submit', 'Ajouter');?>
  </div>
</form>

<div class="row p-5">
  <div class="col-lg-6 col-sm-12">
    <table class="table table-striped">
      <thead class="">
        <th>Categories disponibles</th>
      </thead>
      <tbody class="">
      <?php
      //var_dump($categories);
      foreach ($categories as $value): ?>
        <tr>
          <td><?php echo $value; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<?php

$categoriesList = array();
if (isset($_POST['submit'])) {
  $newcat = ucfirst($_POST['cat']);
  array_push($categoriesList, $newcat);
  //print_r($categories);
  //$result = array_unique($categories);
  // var_dump($categoriesList);
  // var_dump($categories);

  $result = array_diff($categoriesList, $categories);
  var_dump($result);
  if ($result !== $newcat){
    $message = "<script>alert('Cette categorie existe déja')</script>";
  } else {
    array_push($categories, $newcat);
    var_dump($categories);
    return $categories;
  }
}

?>

<?php
  // print_r($categories);
  // return $categories;
//   for ($i=0; $i < count($categories) ; $i++) {
//     if ($categories[$i] !== $newcat) {
//         echo $categories[$i]." ".$newcat."<br>";
//     }else{
//       $message = "<script>alert('Cette categorie existe déja')</script>";
//     }
//   }
//   array_push($categories, $newcat);
//   print_r($categories);
//   return $categories;
 //}

 ?>

<?php
include 'footer.php';
?>
