<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn btn-info "><a href="./liste.php">Retour</a></button>

    <h2>Modifier une matière</h2>
    <?php
    $id = intval($_GET['id']);
    require_once "../../config.php";
    $pdo = connect();
    $req = "SELECT * FROM matiere WHERE idMatiere = $id";
    $result = $pdo->query($req);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<form action='' method='post'>";
        echo "<label for='nom'>Nom</label>";
        echo "<input type='text' value='" . $row['nomMatiere'] . "' name='nomMatiere' id='nom'><br>";
        echo "<label for='note'>Note</label>";
        echo "<input type='date' value='" . $row['dateAjout'] . "' name='dateAjout' id='date'><br>";
        echo "<label for='idEtudiant'>ID de l'Étudiant</label>";
        echo "<input type='text' value='" . $row['idEtudiant'] . "' name='idEtudiant' id='idEtudiant'><br>";
        echo "<label for='idEnseignant'>ID de l'Enseignant</label>";
        echo "<input type='text' value='" . $row['idEnseignant'] . "' name='idEnseignant' id='idEnseignant'><br>";
        echo "<input type='submit' name='modif_matiere' value='Enregistrer'>";
        echo "</form>";
    }

    if(isset($_POST['modif_matiere'])){
        require_once "config.php";
        $id = $_POST["idMatiere"];
        $nom = $_POST["nomMatiere"];
        $note = $_POST["note"];
        $date = $_POST["dateAjout"];
        $idEtudiant = $_POST["idEtudiant"];
        $idEnseignant = $_POST["idEnseignant"];
        $pdo = connect();
        $req = "UPDATE matiere SET nomMatiere = '$nom', note = '$note', dateAjout = '$date', idEtudiant = '$idEtudiant', idEnseignant = '$idEnseignant' WHERE idMatiere = $id";
        try{
            $n = $pdo->exec($req);
            if($n > 0){
                echo "Matière #".$id. " modifiée avec succès";
            }
        } catch(PDOException $e){
            echo "Problème de requête...".$e->getMessage();
            die();
        }
    }
    ?>
 
</body>
</html>
