<?php
class DeleteProduct{
  private $deletedProduct_id;

  public function __construct($deletedProduct_id){
    $this->del_product_id = $deletedProduct_id;
  }

  public static function del_instance($id){
    $delete = new DeleteProduct($id);
    return $delete;
  }

  public function query(){
    $del_conn = new Connection();
    $conn = $del_conn->connect();

    $del_sql = "DELETE FROM produit WHERE id_produit = :id";
    $del_prep = $conn->prepare($del_sql);
    $del_prep->execute(array('id' => $this->del_product_id));

    //besoin de faire afficher l' ID du produit en question dans l url pour le $_GET
  }
}
