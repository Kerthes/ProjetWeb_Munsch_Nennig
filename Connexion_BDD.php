<?php
try{
  $objPDO=new PDO('mysql:host=devbdd.iutmetz.univ-lorraine.fr;
  port=3306;dbname=nennig16u_projetweb','nennig16u_appli','31802655');
  /*echo "Connexion OK";*/
}
catch(Exception $exception){
  die($exception->getMessage());
}
?>