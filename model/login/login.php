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

      $pass_check = "SELECT user_email, user_password FROM user WHERE user_password=:password";
      $email_check = "SELECT user_email, user_password FROM user WHERE user_email=:email";

      $pw_prep = $conn->prepare($pass_check);
      $pw_prep->execute([':password'=>password_verify($this->login_password, $pass_check)]);
      $pass_count = $pw_prep->fetch();

      $mail_prep = $conn->prepare($email_check);
      $mail_prep->execute([':email'=>$this->login_email]);
      $mail_count = $mail_prep->fetch();

      if($pass_count > 0){
        echo "<p class='reg_success'>invalid user!</p>";
        header('Location: index.php?login=invalid');
        $conn->close();
      }
      else if($mail_count > 0){
        echo "exists cool";
      }
      else{
        header('Location: index.php?login=invalid');
        $conn->close();
      }
    }

  }
