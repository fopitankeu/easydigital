<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="author" content="Fopi tankeu">
    <title>easy digital</title>
 <link rel="stylesheet" href="..\bootstrap-5.1.1-dist\css\bootstrap.min.css">
 <link rel="icon" type="image/png" href="..\img\02.png" />
 <script src="..\bootstrap-5.1.1-dist\js\bootstrap.min.js"></script>
 <script src="..\bootstrap-5.1.1-dist\js\bootstrap.bundle.js"></script>
 <script src="..\bootstrap-5.1.1-dist\js\bootstrap.js"></script>
</head>
<body>
<?php
include_once("../include/header.php")
?>
<div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
  style="background-image: url('../img/003.webp');">
  <span class="m-4 h1 p-3 text-warning">Trouvez la Solution Parfaite avec Easy Digital</span>
  <p class="h4 m-4 p-3">
  Contactez notre Agence Web et Digitale dès maintenant et nous vous
apporterons immédiatement les réponses à vos préoccupations.
Notre équipe est disponible et enthousiaste à l’idée de recevoir votre appel.
  </p>
  <a href="page/contact.php" class="btn btn-warning p-3 h4 text-light w-50">NOUS CONTACTER</a><hr>
</div>
    <div class="col m-2">
  <div class="row">
    <div class="col"> <div class="text-dark button text-center p-4 m-2">
    <span class="m-4 h2 p-4 text-warning">Où nous trouver</span>
    <iframe class="m-3 p-2" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.847659191019!2d9.764654315154685!3d4.051478448071652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10610dee49b0a7bf%3A0x94438bd95bd48771!2sEasy%20digital!5e0!3m2!1sfr!2scm!4v1648425742395!5m2!1sfr!2scm" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h6 class="m-2 p-2">COMMENT NOUS JOINDRE</h6>
        <h3>Nous Contacter</h3>
       <div class="m-2 p-2">
       <span>Nous avons une assistance clientèle rapide et courtoise, 
         <br> que ce soit par Tchat,  courrier électronique ou par  téléphone. Vous avez la garantie que nous vous répondrons avec des solutions dans un délai de 24H</span>
       <div class="m-2 p-2">
       <div class=""><span>Téléphone 1(whatsapp) :</span>
        <span class="text-warning h4 m-2 p-2">+237 690915732</span><br></div>
      <div class="">  <span>Téléphone : </span>
        <span class="text-warning h4">+237 620 74 83 36</span><br></div>
        <span>Email :</span>
        <span class="text-warning h4">easydigital@.com</span><br>
      <div class="">
        <img src="../img/map.png" alt="" srcset="">
        <span>MAKEPE missoke marie lumière ,Douala-Cameroun</span>
      </div>
       </div>
       </div>
      </div></div>
    <div class="col-sm-3 offset-sm-2 col-md-4 offset-md-0  m-4 p-2"> <form class="row g-3 m-4 ">
       <h2 class="">Laissez-Nous un Message</h2>
       <h4>Remplissez juste ce formulaire pour nous contacter</h4>
    <div class="col-md-6">
    <label for="inputNom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputNom">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputphone" class="form-label">Téléphone</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="numéro whatsapp">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Site web</label>
    <input type="text" class="form-control" id="inputSite" placeholder="www.easydigital.com">
  </div>
  <div class="col-12">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-12">
    <label for="inputpréoccupation" class="form-label">Préoccupations</label>
      <textarea class="form-control" name="" id="inputpréoccupation" rows="3"></textarea>
    </div> 
  <div class="col-12">
    <button type="submit" class="btn btn-warning">Envoyer le message</button>
  </div>
</form>
</div>
  </div>
 <?php
 include_once("../include/footer.php")
 ?>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "674588946", // WhatsApp number
            call_to_action: "Contactez-nous", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>
</html>