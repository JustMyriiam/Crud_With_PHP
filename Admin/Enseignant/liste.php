<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../crud.css">
    <title>Document</title>
</head>

<body>
<?php
        include "../../Includes/header.php"
	?>
    <div class="table-container">
        <button type="button" class="btn btn-lg"><a class="lien-btn" href="./ajout.php">Ajouter un enseignant</a></button>
        <table class="table table-hover">
            <legend>Gestion des Enseignants</legend><br>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                require_once "../../config.php";
                $pdo = connect();
                $req = "SELECT * FROM Enseignant";
                $result = $pdo->query($req);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr scope='row'> ";
                    echo "<td>" . $row['idEnseignant'] . "</td>";
                    echo "<td>" . $row['nomEnseignant'] . "</td>";
                    echo "<td>" . $row['prenomEnseignant'] . "</td>";
                    echo "<td>" . $row['ageEnseignant'] . "</td>";
                    echo "<td><a href=detail.php?id=" . $row['idEnseignant'] . "><i class='far fa-eye'></i></a>";
                    echo " | ";
                    echo "<a href='modif.php?id=" . $row['idEnseignant'] . "'><i class='fas fa-pen'></i></a>";
                    echo " | ";
                    echo "<a href='suppr.php?id=" . $row['idEnseignant'] . "' onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?')\"><i class='far fa-trash-alt'></i></a>";
                    echo "</td>";
                    echo "</tr>";
                    
                }
                $pdo = null;
                ?>
            </tbody>
        </table>
    </div>
    <?php
include "../../Includes/footer.php"; 
?>
</body>

</html>