<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <title>Document</title>
</head>

<body>
<button type="button" class="btn btn btn-info "><a href="./liste.php">Back</a></button>

    <div id="wrapper">
        <form method="post">
            <legend>Ajouter un Nouveau Etudiant</legend>
            <div class="row mb-2">
                <label for="id" class="col-sm-4 col-form-label">Identifiant</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="id" name="idEtudiant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nom" name="nomEtudiant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="prenom" class="col-sm-4 col-form-label">Prenom</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="prenom" name="prenomEtudiant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="age" class="col-sm-4 col-form-label">Age</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="age" name="ageEtudiant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" id="email" name="emailEtudiant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="date" class="col-sm-4 col-form-label">Date d'Inscription</label>
                <div class="col-sm-7">
                    <input type="Date" class="form-control" id="date" name="dateInscription" >
                </div>
            </div>
            <div class="row mb-2">
                <label for="niveau" class="col-sm-4 col-form-label">Niveau</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="niveau" name="niveau" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="groupe" class="col-sm-4 col-form-label">Groupe</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="groupe" name="groupe" required>
                </div>
            </div>
            <div id="btn">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST["idEtudiant"]) && isset($_POST["nomEtudiant"]) && isset($_POST["prenomEtudiant"]) && isset($_POST["ageEtudiant"]) && isset($_POST["emailEtudiant"]) && isset($_POST["dateInscription"]) && isset($_POST["niveau"]) && isset($_POST["groupe"])) {
        require_once "../../config.php";
        $id = $_POST["idEtudiant"];
        $nom = $_POST["nomEtudiant"];
        $prenom = $_POST["prenomEtudiant"];
        $age = $_POST["ageEtudiant"];
        $email = $_POST["emailEtudiant"];
        $date = $_POST["dateInscription"];
        $niveau = $_POST["niveau"];
        $groupe = $_POST["groupe"];
        $pdo = connect();
        $req = "insert into etudiant values('$id', '$nom', '$prenom', '$age', '$email', '$date', '$niveau', '$groupe')";
        try {
            $n = $pdo->exec($req);
            if ($n > 0) {
                echo "<h1>"."Ajout effectuée avec succes..." ."</h1>";
                echo "<a href='liste.php'>voir la liste</a>";
            }
        } catch (PDOException $e) {
            echo "Problème de requete... : " . $e->getMessage();
        }
    }
    $pdo = null;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>