<?php
  class Login{
    private $login_email;
    private $login_password;

    public function __construct($login_email, $login_password){
      $this->login_email = $login_email;
      $this->login_password = $login_password;
    }

    public static function log(){ //LOGIN FORM IMPUT ELEMENTS
      $log_email = $_POST['log_email'];
      $log_password = $_POST['log_password'];

      $login = new Login($log_email, $log_password);
      return $login;
    }

    public function check(){
      $reg_conn = new Connection();
      $conn = $reg_conn->connect();

      $log_check = "SELECT user_password FROM user WHERE user_email=:email";

      $log_prep = $conn->prepare($log_check);
      $log_prep->execute([':email'=>$this->login_email]);
      $dump = $log_prep->fetch(PDO::FETCH_OBJ);

      $pass_check = password_verify($this->login_password, $dump->user_password);

      if(empty($this->login_password)){
        header('Location: index.php?login=empty');
      }
      else if($pass_check == true){
        header('Location: index.php?login=success');
      }
      else{
        header('Location: index.php?login=fail');
      }
    }
  }
