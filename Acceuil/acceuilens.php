<!DOCTYPE html>
<html>

<head>
    <title>Teacher Homepage</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include "../Includes/header.php";?>
    <div class="container">
        <h1>Bienvenue, Professeur!</h1>

        <?php
        require_once "../config.php";
        $pdo = connect();
        $idEnseignant = 1;
        $query = "SELECT * FROM matiere WHERE idEnseignant = :idEnseignant";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':idEnseignant', $idEnseignant);
        $statement->execute();
        $matieres = $statement->fetchAll(PDO::FETCH_ASSOC);


        foreach ($matieres as $matiere) {
            echo "<div class='container'>";
            echo "<ul class='list-group'>";
            echo "<li class='list-group-item'><a class='liste' href='saisienotes.php?id=" . $matiere['idMatiere'] . "'>" . $matiere['nomMatiere'] . "</a></li>";
            echo "</ul>";
            echo '</div>';
        }
        ?>
    </div>


    <?php
    include "../Includes/footer.php";
    ?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>