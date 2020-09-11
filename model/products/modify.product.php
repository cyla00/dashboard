<?php
class ModifyProduct{
  private $mod_product_id;
  private $mod_product_nom;
  private $mod_product_referance;
  private $mod_product_categorie;
  private $mod_product_AchatDate;
  private $mod_product_FinGarantDate;
  private $mod_product_prix;
  private $mod_product_ticket;
  private $mod_product_zoneEntretien;
  private $mod_product_LieuxAchat;
  private $mod_product_manuel;

  public function __construct($mod_product_id, $mod_product_nom, $mod_product_referance, $mod_product_categorie, $mod_product_AchatDate, $mod_product_FinGarantDate, $mod_product_prix, $mod_product_ticket, $mod_product_zoneEntretien, $mod_product_LieuxAchat, $mod_product_manuel){
    $this->mod_id = $mod_product_id;
    $this->mod_nom = $mod_product_nom;
    $this->mod_referance = $mod_product_referance;
    $this->mod_categorie = $mod_product_categorie;
    $this->mod_AchatDate = $mod_product_AchatDate;
    $this->mod_FinGarantDate = $mod_product_FinGarantDate;
    $this->mod_prix = $mod_product_prix;
    $this->mod_ticket = $mod_product_ticket;
    $this->mod_zoneEntretien = $mod_product_zoneEntretien;
    $this->mod_LieuxAchat = $mod_product_LieuxAchat;
    $this->mod_manuel = $mod_product_manuel;
  }

  public static function ModInstance(){
    $mod_id = $_GET['id'];
    $mod_nom = $_POST['nom'];
    $mod_referance = $_POST['referance'];
    $mod_categorie = $_POST['categorie'];
    $mod_AchatDate = $_POST['dateAch'];
    $mod_FinGarantDate = $_POST['dateFin'];
    $mod_prix = $_POST['prix'];
    $mod_ticket = $_POST['ticket'];
    $mod_zoneEntretien = $_POST['entretien'];
    $mod_LieuxAchat = $_POST['lieuxAchat'];
    $mod_manuel = $_POST['manuel'];

    $ModProduct = new ModifyProduct($mod_id, $mod_nom, $mod_referance, $mod_categorie, $mod_AchatDate, $mod_FinGarantDate, $mod_prix, $mod_ticket, $mod_zoneEntretien, $mod_LieuxAchat, $mod_manuel);
    return $ModProduct;
  }

  public function mod(){
    $mod_connection = new Connection();
    $conn = $mod_connection->connect();

    $mod_sql = "UPDATE produit SET nom_produit=:nom, referance_produit=:ref, categorie_produit=:categ, date_achat=:dateAch, data_fin_garantie=:finGar, prix_produit=:prix, photo_ticket=:ticket, zone_entretien=:zone, lieux_achat=:lieux, manuel_utilisation=:manuel WHERE id_produit=:id";

    $mod_prep = $conn->prepare($mod_sql);
    $mod_prep->execute([
      ':nom' => $this->mod_nom,
      ':ref' => $this->mod_referance,
      ':categ' => $this->mod_categorie,
      ':dateAch' => $this->mod_AchatDate,
      ':finGar' => $this->mod_FinGarantDate,
      ':prix' => $this->mod_prix,
      ':ticket' => $this->mod_ticket,
      ':zone' => $this->mod_zoneEntretien,
      ':lieux' => $this->mod_LieuxAchat,
      ':manuel' => $this->mod_manuel,
      ':id' => $this->mod_id
    ]);
}
//besoin de faire afficher l' ID du produit en question dans l url pour le $_GET
