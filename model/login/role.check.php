<?php
function role_check(){

  $log_conn = new Connection();
  $conn = $log_conn->connect();

  $role_check = "SELECT admin_role FROM user WHERE user_email = :email";
  $role_prep = $conn->prepare($role_check);
  $role_prep->execute(array(
    'email' => $_SESSION['logged_email']
  ));
  $role_result = $role_prep->fetch();
  
  if ($role_result['admin_role'] == 0) {
    $role_user = "User";
  }
  elseif ($role_result['admin_role'] == 1) {
    $role_user = "Admin";
  }
  return $role_user;
}
