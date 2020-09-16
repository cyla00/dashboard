<?php
chdir('..');
require 'model/connection.php';
require 'model/login/role.check.php';
require 'model/products/listAll.product.php';
$list = New ListAllProduct();
$result = $list->list();
$result1 = $list->produitParCat();


  $data = $result1->fetchAll();
  $data1 = $result->fetchAll();
  //var_dump($data);
  //echo json_encode($data);


$data = json_encode($data);

echo $data;
?>
