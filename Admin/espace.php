<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler order-md-first" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
              <?php include "../Includes/header.php";?>
            </a>

            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <i class="fas fa-chalkboard-teacher"></i> Enseignant
                            <ul class="list-group sub-list">
                                <li class="list-group-item"><a href="./Enseignant/liste.php">Liste des enseignants</a></li>
                                <li class="list-group-item"><a href="./Enseignant/ajout.php">jouter un enseignant</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-user-graduate"></i> Etudiant
                            <ul class="list-group sub-list">
                                <li class="list-group-item"><a href="./Etudiant/liste.php">Liste des étudiants</a></li>
                                <li class="list-group-item"><a href="./Etudiant/ajout.php">Ajouter un étudiant</a></li>
                            </ul>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-book"></i> Matière
                            <ul class="list-group sub-list">
                                <li class="list-group-item"><a href="./Matière/liste.php">Liste des matières</a></li>
                                <li class="list-group-item"><a href="./Matière/ajout.php">Ajouter une matière</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'accueil de l'administrateur</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <style>
    .admin-page {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .admin-menu {
      list-style: none;
      padding: 0;
      text-align: center;
    }
    .admin-menu li {
      display: inline-block;
      margin-right: 10px;
      margin-bottom: 10px;
    }
    .admin-menu a {
      display: inline-block;
      padding: 10px 20px;
      background-color: #f8f9fa;
      color: #000;
      text-decoration: none;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div class="admin-page">
    <ul class="admin-menu">
      <li>
        <a href="./Enseignant/liste.php"><i class="fas fa-user"></i> Gérer les Enseignants</a>
      </li>
      <li>
        <a href="./Etudiant/liste.php"><i class="fas fa-book"></i> Gérer les Etudiants</a>
      </li>
      <br>
      <li>
        <a href="./Matière/liste.php"><i class="fas fa-clipboard-list"></i> Gérer les Matières</a>
      </li>
      <li>
        <a href="#"><i class="fas fa-cog"></i> Paramètres</a>
      </li>
    </ul>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
<?php
include "../Includes/footer.php"; 
?>
</html>