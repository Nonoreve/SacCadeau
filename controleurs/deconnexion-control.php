<?php
  session_start();
  session_destroy();
  header('location: ../vues/index.php');
  exit;
 ?>
