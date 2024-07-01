<!DOCTYPE html>
<html>
<head>
    <title>Notes de l'étudiant</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<?php
    include "../Includes/header.php";
    ?>
    <div class="container">
        <h1>Notes de l'étudiant</h1>

        <?php
            require_once "../config.php";
            $pdo = connect();
            $studentId = 1; 
            
            $query = "SELECT * FROM notes WHERE idEtudiant = :idEtudiant";
            $statement = $pdo->prepare($query);
            $statement->bindParam(':idEtudiant', $idEtudiant);
            $statement->execute();
            $notes = $statement->fetchAll(PDO::FETCH_ASSOC);

            echo "<table class='table'>";
            echo "<thead><tr><<th>Examen</th><th>Note</th></tr></thead>";
            echo "<tbody>";
            foreach ($notes as $note) {
                echo "<tr>";
                echo "<td>".$note['nomMatiere']."</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        ?>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <?php
    include "../Includes/footer.php";
    ?>

</body>
</html>
