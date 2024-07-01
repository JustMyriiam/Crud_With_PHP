<!DOCTYPE html>
<html>

<head>
    <title>Saisie des notes</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    
    <div class="container">
        <h1>Saisie des notes</h1>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        
            include "../config.php";
            $pdo = connect();
            $req = "SELECT * FROM Etudiant WHERE Etudiant.idMatiere = $id";
        
            $statement = $pdo->query($req);
            $eleves = $statement->fetchAll(PDO::FETCH_ASSOC);
        
            foreach ($eleves as $row) {
                echo "<tr scope='row'>";
                echo "<td>#</td>";
                echo "<td>Nom Etudiant</td>";
                echo "<td>Saisir note</td>";
                echo "</tr>";
                echo "<tr scope='row'>";
                echo "<td>" . $row['idEtudiant'] . "</td>";
                echo "<td>" . $row['nomEtudiant'] . "</td>";
                echo "<td>";
                echo "<form action='process_notes.php' method='POST'>";
                echo "<div class='form-group'>";
                echo "<label for='note'>Note :</label>";
                echo "<input type='number' name='note' id='note' class='form-control' required>";
                echo "</div>";
                echo "<button type='submit' class='btn btn-primary'>Enregistrer</button>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
        }
        
         ?>



    <?php include "../Includes/footer.php";?>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
