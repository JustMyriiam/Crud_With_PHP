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
<button type="button" class="btn btn btn-info "><a href="./liste.php">Retour</a></button>

    <div id="wrapper">
        <form method="post">
            <legend>Ajouter une Nouvelle Matière</legend>
            <div class="row mb-2">
                <label for="nomMatiere" class="col-sm-4 col-form-label">Nom de la Matière</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nomMatiere" name="nomMatiere" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="note" class="col-sm-4 col-form-label">Note</label>
                <div class="col-sm-7">
                    <input type="number" class="form-control" id="note" name="note" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="dateAjout" class="col-sm-4 col-form-label">Date d'Ajout</label>
                <div class="col-sm-7">
                    <input type="date" class="form-control" id="dateAjout" name="dateAjout" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="idEtudiant" class="col-sm-4 col-form-label">Identifiant de l'Étudiant</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="idEtudiant" name="idEtudiant" required>
                </div>
            </div>
            <div class="row mb-2">
                <label for="idEnseignant" class="col-sm-4 col-form-label">Identifiant de l'Enseignant</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="idEnseignant" name="idEnseignant" required>
                </div>
            </div>
            <div id="btn">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
    <?php
    if (isset($_POST['idMatiere']) && isset($_POST['nomMatiere']) && isset($_POST['note']) && isset($_POST['idEtudiant']) && isset($_POST['idEnseignant']) ) {
        require_once "../../config.php";

        $nomMatiere = $_POST["nomMatiere"];
        $note = $_POST["note"];
        $dateAjout = $_POST["dateAjout"];
        $idEtudiant = $_POST["idEtudiant"];
        $idEnseignant = $_POST["idEnseignant"];
        
        $pdo = connect();
        $req = "INSERT INTO Matiere (nomMatiere, note, dateAjout, idEtudiant, idEnseignant) VALUES ('$nomMatiere', '$note', '$dateAjout', '$idEtudiant', '$idEnseignant')";
        
        try {
            $n = $pdo->exec($req);
            if ($n > 0) {
                echo "<h1>Ajout effectué avec succès...</h1>";
                echo "<a href='liste.php'>Voir la liste</a>";
            }
        } catch (PDOException $e) {
            echo "Problème de requête... : " . $e->getMessage();
        }
    }
    $pdo = null;
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>
