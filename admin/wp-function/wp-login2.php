<?php
try{
    $connexion=new PDO ("mysql:host=localhost;dbname=test",'root','');
    $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo'connexion a la base de données réussie';
}
catch(PDOException $e){
    echo'Echec de la connexion : ' .$e->getMessage();
}

if(isset($_POST['submit']))
$pseudo=htmlspecialchars($_POST['user']);
$pass=sha1($_POST['pass']);
if(!empty($pseudo) AND !empty($pass))
{

}
else
{
    $erreur="tous les champs doivent etre complétés!";
}
?>