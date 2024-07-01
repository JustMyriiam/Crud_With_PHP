<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <button type="button" class="btn btn-info"><a href="./liste.php">Retour</a></button>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        require_once "../../config.php";
        $pdo = connect();
        $req = "SELECT * FROM matiere WHERE idMatiere = :id";
        $statement = $pdo->prepare($req);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            try {
                echo "<table class='table'>";
                echo "<legend>Toutes les informations sur la Matière #" . $row['idMatiere'] . "</legend>";
                echo "<tbody>";
                echo "<tr>";
                echo "<td class='table-info'>Nom de la Matière</td>";
                echo "<td>" . $row['nomMatiere'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Date d'Ajout</td>";
                echo "<td>" . $row['dateAjout'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Identifiant de l'Étudiant</td>";
                echo "<td>" . $row['idEtudiant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Identifiant de l'Enseignant</td>";
                echo "<td>" . $row['idEnseignant'] . "</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            } catch (PDOException $e) {
                echo "Problème de requête..." . $e->getMessage();
            }
        } else {
            echo "Matière introuvable";
        }
    }
    ?>
</body>

</html>
