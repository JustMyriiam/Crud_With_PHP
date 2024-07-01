<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css" />
    <title>Document</title>
</head>

<body>
<?php
	    include "../../Includes/header.php"; 
	?>
    <div class="table-container">
        <button type="button" class="btn btn-primary btn-lg"><a href="./ajout.php">Ajouter une matière</a></button>
        <table class="table table-hover">
            <legend>Gestion des Matières</legend><br>
            <thead>
                <tr>
                <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Date d'Ajout</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                require_once "../../config.php";
                $pdo = connect();
                $req = "SELECT * FROM Matiere";
                $result = $pdo->query($req);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr scope='row'> ";
                    echo "<td>" . $row['idMatiere'] . "</td>";
                    echo "<td>" . $row['nomMatiere'] . "</td>";
                    echo "<td>" . $row['dateAjout'] . "</td>";
                    echo "<td><a href=detail.php?id=" . $row['idMatiere'] . "><i class='far fa-eye'></i></a>";
                    echo " | ";
                    echo "<a href='modif.php?id=" . $row['idMatiere'] . "'><i class='fas fa-pen'></i></a>";
                    echo " | ";
                    echo "<a href='suppr.php?id=" . $row['idMatiere'] . "' onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette matière ?')\"><i class='far fa-trash-alt'></i></a>";
                    echo "</td>";
                    echo "</tr>";
                }
                $pdo = null;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <?php
include "../../Includes/footer.php"; 
?>
</body>
</html>