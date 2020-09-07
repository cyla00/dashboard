<?php
  class Login{
    private $login_email;
    private $login_password;

    public function __construct($login_email, $login_password){
      $this->login_email = $login_email;
      $this->login_password = $login_password;
    }

    public static function log(){
      $login = new Login($log_email, $log_password);
      return $login;
    }

    public function check(){
      $log_conn = new Connection();
      $conn = $log_conn->connect();
      session_start();  //TO DELETE IF CONTROLLER MANAGES

      $log_check = "SELECT user_password FROM user WHERE user_email=:email";

      $log_prep = $conn->prepare($log_check);
      $log_prep->execute([':email'=>$this->login_email]);
      $dump = $log_prep->fetch(PDO::FETCH_OBJ);

      $_SESSION['logged_email'] = $this->login_email;

      $pass_check = password_verify($this->login_password, $dump->user_password);

      if(empty($this->login_password)){
        header('Location: index.php?login=empty');
      }
      else if($pass_check == true){
        $role_check = "SELECT admin_role FROM user WHERE user_email=:email";
        $role_prep = $conn->prepare($role_check);
        $role_prep->execute([':email' => $_SESSION['logged_email']]);
        $role_dump = $role_prep->fetch(PDO::FETCH_NUM);

        if($role_dump[0] == 'user'){
          header('Location: index.php?login=success&user=user');
        }
        else{
          header('Location: index.php?login=success&user=admin');
        }
      }
      else{
        header('Location: index.php?login=fail');
      }
    }
  }
