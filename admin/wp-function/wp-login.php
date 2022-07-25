<?php
require_once('wp-auth.php');
 if(isset($_POST['submit']))
 {
     $user=$_POST['user'];
     $pass=$_POST['pass'];
require ("../../function/connexion.php");
$sql="SELECT*FROM utilisateur where user='$user'";
$result=$connexion->prepare($sql);
$result->execute();

if($result->rowcount() > 0)
{

    header('location:../dashboard.php');
}else
{
echo'identifiant incorect';
header('location:../wp-index.php');
}

 }
 
?>