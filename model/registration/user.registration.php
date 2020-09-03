<?php

class Registration{
  private $first_name;
  private $last_name;
  private $email;
  private $password;
  private $re_password;
  private $register;

  public function __construct($first_name, $last_name, $email, $password, $re_password, $register){
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->password = $password;
    $this->re_password = $re_password;
    $this->register = $register;
  }

  public static function reg(){ //REGISTRATION FORM IMPUT ELEMENTS
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $mail = $_POST['email'];
    $pwd = $_POST['password'];
    $repwd = $_POST['re_password'];
    $sub = $_POST['register'];

    $load_reg = new Registration($first, $last, $mail, $pwd, $repwd, $sub);
    return $load_reg;
  }

  public function check(){
    if(empty($this->first_name)||empty($this->last_name)||empty($this->email)||empty($this->password)||empty($this->re_password)){
      header('Location: index.php?register=empty');
      exit();
    }
    else{
      if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this->first_name)||preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this->last_name)){
        header('Location: index.php?register=names');
        exit();
      }
      else{
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
          header('Location: index.php?register=mail');
          exit();
        }
        else{
          if(strlen($this->password) < 8){
            echo "<p class='error'>please choose a password longer than 8 carachters!</p>";
            exit();
          }
          else{
            if($this->password != $this->re_password){
              echo "<p class='error'>password don't match!</p>";
              exit();
            }
            else{
              $reg_conn = new Connection();
              $conn = $reg_conn->connect();

              $sql_check = "SELECT user_email FROM user WHERE user_email=:email";
              $prep = $conn->prepare($sql_check);
              $prep->execute([':email'=>$this->email]);
              $count = $prep->fetch();

              if($count > 0){
                echo "<p class='reg_success'>user already exists!</p>";
                header('Location: index.php?register=exists');
                $conn->close();
              }
              else{
                $hashed_pwd = password_hash($this->password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO user (user_nom, user_prenom, user_email, user_password) VALUES (:first_name, :last_name, :email, :password)";
                $prep = $conn->prepare($sql);
                $prep->execute([
                    ':first_name' => $this->first_name,
                    ':last_name' => $this->last_name,
                    ':email' => $this->email,
                    ':password' => $hashed_pwd,
                ]);

                if(true){
                  echo "<p class='reg_success'>Registration successfull!</p>";
                }
                else{
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                header('Location: index.php?register=success');
                $prep->close();
              }
            }
          }
        }
      }
    }
  }
}
