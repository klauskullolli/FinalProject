<?php 
   require_once 'common/header.php';
   require_once "db/conn.php" ;

  $path = implode("/" ,explode("//" ,select_by_properties("clothes" ,array("id"=>1))[0]["image"])) ;
  print_r($path);
?>

