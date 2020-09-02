<?php
require_once 'model.php';

class Users extends MODEL {

  public function __construct() {
    $this->data_base = "catalog_animaux";
    $this->table = "users";
    $this->table_columns = "(
      id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
      username text NOT NULL,
      password text NOT NULL,
      email text NOT NULL
    )";
    $this->createDataBase();
    $this->createTable();

    if (empty($this->get_username("Alexa")) === TRUE) $this->init_admin("Alexa"); //Si les administrateur ne sont pas definis
    if (empty($this->get_username("Ismail")) === TRUE) $this->init_admin("Ismail");
    if (empty($this->get_username("Robin")) === TRUE) $this->init_admin("Robin");
  }

  public function insert_data() {
    $this->query("INSERT INTO $this->table  VALUES (1,'Alexa','kangourou', 'a.vermenot@codeur.online'),(2,'Ismail','kangourou', 'i.khayam'),(3,'Robin','kangourou', 'r.demarch@codeur.online')");
  }

  public function add($username) {
    $this->query("INSERT INTO $this->table (name) VALUES (?)", $username);
  }

  public function remove($id) {
    $this->query("DELETE FROM $this->table WHERE id = ?", $id);
  }

  public function get_id($id) {
    return $this->query("SELECT * FROM $this->table WHERE id = ?", $id)->fetch_assoc();
  }

  public function get_username($username) {
    return $this->query("SELECT * FROM $this->table WHERE username = ?", $username)->fetch_assoc();
  }

  public function get_email($email) {
    return $this->query("SELECT * FROM $this->table WHERE email = ?", $email)->fetch_assoc();
  }

  public function set_username($id, $username) {
    $this->query("UPDATE $this->table SET username = ? WHERE id = ?", $username, $id);
  }

  public function set_email($id, $email) {
    $this->query("UPDATE $this->table SET email = ? WHERE id = ?", $email, $id);
  }

  public function set_password($id, $password) {
    $this->query("UPDATE $this->table SET password = ? WHERE id = ?", $password, $id);
  }

  public function get_all() {
    return $this->query("SELECT * FROM $this->table");
  }

  public function delete_all() {
    $this->resetTable();
  }
}
