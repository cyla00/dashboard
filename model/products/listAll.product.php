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
    // example pour lister les elements row:

    // if($fetch > 0){
    //     echo $fetch['referance_produit'];
    //     echo $fetch['nom_produit'];
    // }
    // else{
    //   echo "nothing";
    // }
   }


}
