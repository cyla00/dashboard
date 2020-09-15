<?php
class ListAllProduct{

  public static function list_instance(){
    $listProduct = new ListAllProduct();
    return $listProduct;
  }

  public function list(){
    $list_connection = new Connection();
    $conn = $list_connection->connect();

    $list_sql = "SELECT * FROM produit";
    $result = $conn->prepare($list_sql);
    $result->execute();

    return $result;

   }

   public function produitParCat(){
     $list_connection = new Connection();
     $conn = $list_connection->connect();

     $list = "SELECT categorie_produit , COUNT(nom_produit) FROM produit GROUP BY categorie_produit";
     $result = $conn->prepare($list);
     $result->execute();
     return $result;
   }
}
