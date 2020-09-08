<?php
class ChangePassword{
  private $change_email;
  private $change_actualPass;
  private $change_newPass;
  private $change_repeatNew;

  public function __construct($change_email, $change_actualPass, $change_newPass, $change_repeatNew){
    $this->change_email = $change_email;
    $this->change_actualPass = $change_actualPass;
    $this->change_newPass = $change_newPass;
    $this->change_repeatNew = $change_repeatNew;
  }

  public static function change_instance(){
    $email = $_POST['change_email'];
    $actual = $_POST['change_password'];
    $new = $_POST['change_newpassword'];
    $repNew = $_POST['change_repeatnewpassword'];

    $changePass = new ChangePassword($email, $actual, $new, $repNew);
    return $changePass;
    }

    public function check(){
      $chng_conn = new Connection();
      $conn = $chng_conn->connect();

      $chng_sql = "SELECT user_password FROM user WHERE user_email=:chng_email";
      $chng_prep = $conn->prepare($chng_sql);
      $chng_prep->execute([':chng_email' => $this->change_email]);
      $chng_dump = $chng_prep->fetch(PDO::FETCH_OBJ);

      $pass_check = password_verify($this->change_actualPass, $chng_dump->user_password);

      if($pass_check == true && $this->change_newPass == $this->change_repeatNew){

        $crypted_newPass = password_hash($this->change_repeatNew, PASSWORD_DEFAULT);
        $chng_sql_push = "UPDATE user SET user_password=:chng_pass WHERE user_email=:chng_email";

        $pass_update = $conn->prepare($chng_sql_push);
        $pass_update->execute([
          ':chng_pass' => $crypted_newPass,
          ':chng_email' => $this->change_email
        ]);
        echo "<p class='chng_success'>password changed!</p>";
      }
      else{
        echo "<p class='chng_fail'>changement failed!</p>";
      }
    }
  }
