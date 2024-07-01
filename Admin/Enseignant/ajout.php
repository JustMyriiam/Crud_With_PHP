<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../crud.css">

</head>

<body>
<button type="button" class="btn "><a class="lien-btn" href="./liste.php">Back</a></button>

    <div id="wrapper">
        <form method="post">
            <legend>Ajouter un Nouveau Enseignant</legend>
            <div class="row mb-2">
                <label for="id" class="col-sm-4 col-form-label">Identifiant</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="id" name="idEnseignant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nom" name="nomEnseignant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="prenom" class="col-sm-4 col-form-label">Prenom</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="prenom" name="prenomEnseignant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="age" class="col-sm-4 col-form-label">Age</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="age" name="ageEnseignant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-7">
                    <input type="email" class="form-control" id="email" name="emailEnseignant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="tel" class="col-sm-4 col-form-label">Numéro de Téléphone</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="tel" name="numTelEnseignant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="date" class="col-sm-4 col-form-label">Date d'embauche</label>
                <div class="col-sm-7">
                    <input type="Date" class="form-control" id="date" name="dateEmbauche" >
                </div>
            </div>
            <div id="btn">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['idEnseignant']) && isset($_POST['nomEnseignant']) && isset($_POST['prenomEnseignant']) && isset($_POST['ageEnseignant']) && isset($_POST['emailEnseignant']) && isset($_POST['numTelEnseignant']) && isset($_POST['dateEmbauche'])) {
        require_once "../../config.php";
        $id = $_POST["idEnseignant"];
        $nom = $_POST["nomEnseignant"];
        $prenom = $_POST["prenomEnseignant"];
        $age = $_POST["ageEnseignant"];
        $email = $_POST["emailEnseignant"];
        $tel = $_POST["numTelEnseignant"];
        $date = $_POST["dateEmbauche"];
        $pdo = connect();
        $req = "insert into Enseignant values('$id', '$nom','$prenom', '$age', '$email', '$tel', '$date')";
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