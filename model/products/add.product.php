<?php
class AddProduct{
  private $product_id;
  private $product_nom;
  private $product_referance;
  private $product_categorie;
  private $product_AchaDate;
  private $product_FinGarantDate;
  private $product_prix;
  private $product_ticket;
  private $product_zoneEntretien;
  private $product_LieuxAchat;
  private $product_manuel;

  public function __construct($product_id, $product_nom, $product_referance, $product_categorie, $product_AchaDate, $product_FinGarantDate, $product_prix, $product_ticket, $product_zoneEntretien, $product_LieuxAchat, $product_manuel){
    $this->login_id = $product_id;
    $this->login_nom = $product_nom;
    $this->login_referance = $product_referance;
    $this->login_categorie = $product_categorie;
    $this->login_AchaDate = $product_AchaDate;
    $this->login_FinGarantDate = $product_FinGarantDate;
    $this->login_prix = $product_prix;
    $this->login_ticket = $product_ticket;
    $this->login_zoneEntretien = $product_zoneEntretien;
    $this->login_LieuxAchat = $product_LieuxAchat;
    $this->login_manuel = $product_manuel;
  }

  public static function AddInstance(){

    $id = null;
    $nom = $_POST['nom'];
    $referance = $_POST['referance'];
    $categorie = $_POST['categorie'];
    $AchaDate = $_POST['dateAch'];
    $FinGarantDate = $_POST['dateFin'];
    $prix = $_POST['prix'];
    $ticket = $_POST['ticket'];
    $zoneEntretien = $_POST['entretien'];
    $LieuxAchat = $_POST['lieuxAchat'];
    $manuel = $_POST['manuel'];

    $AddProduct = new AddProduct($id, $nom, $referance, $categorie, $AchaDate, $FinGarantDate, $prix, $ticket, $zoneEntretien, $LieuxAchat, $manuel);
    return $AddProduct;
  }

  public function add(){
    $add_connection = new Connection();
    $conn = $add_connection->connect();

    $add_sql = "INSERT INTO produit (nom_produit,	referance_produit,	categorie_produit,	date_achat,	data_fin_garantie,	prix_produit,	photo_ticket,	zone_entretien,	lieux_achat,	manuel_utilisation) VALUES (:nom, :referance, :categorie, :dateAchat, :fateFin, :prix, :photo, :entretien, :lieuxAchat, :manuel)";

    $add_prep = $conn->prepare($add_sql);
    $add_prep->execute([
      ':nom' => $this->login_nom,
      ':referance' => $this->login_referance,
      ':categorie' => $this->login_categorie,
      ':dateAchat' => $this->login_AchaDate,
      ':fateFin' => $this->login_FinGarantDate,
      ':prix' => $this->login_prix,
      ':photo' => $this->login_ticket,
      ':entretien' => $this->login_zoneEntretien,
      ':lieuxAchat' => $this->login_LieuxAchat,
      ':manuel' => $this->login_manuel
    ]);
  }
}
