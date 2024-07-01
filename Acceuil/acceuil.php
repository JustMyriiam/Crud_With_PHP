<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="./acceuil.css">
  <title>Document</title>
</head>

<body>
  <?php
  include "../Includes/header.php";
  ?>

  <div class="container text-center">
    <div class="row">
      <div class="col">
        <img id="welcome-img" src="./1.png" alt="image d'accueil">
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button id="btn-ens"><a href="./connexionens.php">Enseignant</a></button>
        <button id="btn-etud"><a href="./connexionetu.php">Etudiant</a></button>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <button id="btn-adm"><a href="./connexionadm.php">Admin</a></button>
      </div>
    </div>
  </div>

</body>

<?php
include "../Includes/footer.php";
?>

</html>