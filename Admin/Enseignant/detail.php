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
    <?php
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        require_once "../../config.php";
        $pdo = connect();
        $req = "select * from enseignant where idEnseignant = $id";
        $result = $pdo->query($req);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            try {
                echo "<table class='table'>";
                echo "<legend>Toutes les informations sur l'enseignant #$id</legend>";
                echo "<tbody>";
                echo "<tr >";
                echo "<td class='table-info'>Id</td>";
                echo "<td>" . $row['idEnseignant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Nom</td>";
                echo "<td>" . $row['nomEnseignant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Prénom</td>";
                echo "<td>" . $row['prenomEnseignant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Age</td>";
                echo "<td>" . $row['ageEnseignant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Email</td>";
                echo "<td>" . $row['emailEnseignant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Numéro de Téléphone</td>";
                echo "<td>" . $row['numTelEnseignant'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td class='table-info'>Date d'embauche</td>";
                echo "<td>" . $row['dateEmbauche'] . "</td>";
                echo "</tr>";
                echo "</tbody>";
                echo "</table>";
            } catch (PDOException $e) {
                echo "Problème de requête..." . $e->getMessage();
            }
        }
    }
    ?>
</body>

</html>
