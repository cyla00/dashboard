<?php
function reg_keep(){
  if(isset($_GET['first'])){
    $first = $_GET['first'];
    echo "<input type='text' name='first_name' value='".$first."'><br>";
  }
  else{
    echo "<input type='text' name='first_name' value=''><br>";
  }
  if(isset($_GET['last'])){
    $last = $_GET['last'];
    echo "<input type='text' name='last_name' value='".$last."'><br>";
  }
  else{
    echo "<input type='text' name='last_name' value=''><br>";
  }
}
