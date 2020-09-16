<?php
include 'header.php';

$content = form($result);

  if (isset($creationConfirm)) {
    echo $creationConfirm;
  }
  elseif (isset($modificationConfirm)) {
    echo $modificationConfirm;
  }

include 'footer.php';
?>
