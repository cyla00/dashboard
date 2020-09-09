<?php
class Connection{
  private $db_host;
  private $db_username;
  private $db_password;
  private $db_name;
  private $db_charset;

  public function connect(){
    $this->db_host = "localhost";
    $this->db_username = "root";
    $this->db_password = "";
    $this->db_name = "dashboard";
    $this->db_charset = "utf8mb4";

    try {
      $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name.';charset='.$this->db_charset.';port=3307', $this->db_username, $this->db_password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // echo "Connected!"; // testing purpouse
      return $conn;
    } catch (PDOException $e) {
      echo "Error!: " . $e->getMessage();
      die();
    }
  }
}
