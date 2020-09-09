<?php
class SingleProduct{

  public static function single_instance(){
    $singleProduct = new SingleProduct();
    return $singleProduct;
  }

  public function list(){
    $single_connection = new Connection();
    $conn = $single_connection->connect();


    $single_sql = "SELECT * FROM produit WHERE id_produit=:id";
    $result = $conn->prepare($single_sql);
    $result->execute();
    $fetch = $result->fetch(PDO::FETCH_ASSOC);

    //example pour lister les elements row:

    // if($fetch > 0){
    //     echo $fetch['referance_produit'];
    // }
    // else{
    //   echo "nothing";
    // }
  }
}
