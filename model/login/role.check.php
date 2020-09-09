<?php
function role_check(){
  $role_conn = new Connection();
  $conn = $log_conn->connect();

  $roles = "SELECT admin_role FROM user WHERE user_email=:email";
  $role_result = $roles->execute();
  $role_result->fetch();
  return $role_result;
}
