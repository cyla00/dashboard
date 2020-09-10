<?php
class SingleProduct{

   
   public static function single_instance(){
    $singleProduct = new SingleProduct();
    return $singleProduct;
  }

  public function list($id){
    $id = (int) $id;
    $single_connection = new Connection();
    $conn = $single_connection->connect();

    $single_sql = "SELECT * FROM produit WHERE id_produit =:id";
    $result = $conn->prepare($single_sql);
    $result->execute([':id' => $id]);
    $fetch = $result->fetch(PDO::FETCH_ASSOC);
    return $fetch;
  }
}
