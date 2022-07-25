<?php
require_once ('wp-connexion.php');
if(isset($_POST['forminscription']))
{
 if(!empty($_POST['pseudo'])  AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
 {
     echo"ok";
 }
 else{
     echo"non rempli";
 }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>easy digital</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="..\..\bootstrap-5.1.1-dist\css\bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="..\..\css\signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100">
  <form method="POST" action="">
    <img class="mb-4  rounded-circle" src="../../img/04.jpg" alt="" width="150" height="150">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control m-2" id="floatingInput" placeholder="Pseudo" name="Pseudo">
      <label for="floatingInput">Pseudo</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control m-2" id="floatingInput" placeholder="email" name="mail">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control m-2" id="floatingInput" placeholder="Confirmation email" name="mail2">
      <label for="floatingInput">Confirmation Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control m-2" id="floatingPassword" placeholder="Password" name="mdp">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control m-2" id="floatingPassword" placeholder="Confirmation mot de pass" name="mdp2">
      <label for="floatingPassword">Confirmation mot de pass </label>
    </div>
    <input class="w-100 btn btn-lg btn-warning" type="submit" name="forminscription" values="Je m'inscrs">
    <p class="mt-5 mb-3 text-muted">&copy; 2021-2022 easy digital</p>
  </form>
</main>


    
  </body>
</html>
