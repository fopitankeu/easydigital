<?php
$serveur="localhost";
$login="root";
$pass="";
try{
    $connexion=new PDO ("mysql:host=$serveur;dbname=test",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //  echo'connexion a la base de données réussie';
}
catch(PDOException $e){
    echo'Echec de la connexion : ' .$e->getMessage();
}
?> 