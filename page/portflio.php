<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portflio</title>
</head>
<link rel="icon" type="../image/png" href="..\img\02.png" />
<link rel="stylesheet" href="..\bootstrap-5.1.1-dist\css\bootstrap.min.css">
<script src="..\bootstrap-5.1.1-dist\js\bootstrap.min.js"></script>
 <script src="..\bootstrap-5.1.1-dist\js\bootstrap.bundle.js"></script>
 <script src="..\bootstrap-5.1.1-dist\js\bootstrap.js"></script>
<style>
.inner{
   
}
.inner img {
    transition:all 1.5s ease;
}
.inner:hover img{
    transform:scale(1.5);
}
</style>
<body>
<?php
include_once("../include/header.php")
?>

<div class="container w-100">
    <div class="row justify-contet center m-2">
        <div class="col-md-4">
        <div class="card" style="width: 25rem;">
        <div class="inner">
        <img src="../img/obs.jpg" class="card-img-top" alt="...">
        </div>
  <div class="card-body">
    <h5 class="card-title text-center">Obsession</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md-4">
        <div class="card" style="width: 25rem;">
        <div class="inner"><img src="../img/equa.jpg" class="card-img-top" alt="..."></div>
  <div class="card-body">
    <h5 class="card-title text-center">Equagamer</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md-4">
        <div class="card" style="width: 25rem;">
        <div class="inner">
        <img src="../img/fd.jpg" class="card-img-top" alt="...">
        </div>
  <div class="card-body">
    <h5 class="card-title text-center">Edir</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md-4 mt-4">
        <div class="card" style="width: 25rem;">
        <div class="inner"><img src="../img/fd.jpg" class="card-img-top" alt="..."></div>
  <div class="card-body">
    <h5 class="card-title text-center">Kajef sarl</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md-4 mt-4">
        <div class="card" style="width: 25rem;">
        <div class="inner">
        <img src="../img/fd.jpg" class="card-img-top" alt="...">
        </div>
  <div class="card-body">
    <h5 class="card-title text-center">Jims finance</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
        </div>
        <div class="col-md-4 mt-4">
        <div class="card" style="width: 25rem;">
        <div class="inner">
        <img src="../img/edi auto2.jpg" class="card-img-top" alt="...">
        </div>
  <div class="card-body">
    <h5 class="card-title text-center">Auto-ecole Edir</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-warning">Go somewhere</a>
  </div>
</div>
        </div>
    </div>
</div>
    <?php
 include_once("../include/footer.php")
 ?>
</body>
</html>