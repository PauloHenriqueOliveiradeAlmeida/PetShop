<?php
  
  try {
      $conn = new PDO("mysql:dbname=petshop;host=localhost", "root", "minas");
  } catch (Exception $e){
      echo "Eroo na conecxão".$e ->getMessage();
  }

?>