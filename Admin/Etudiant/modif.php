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
<button type="button" class="btn btn btn-info "><a href="./liste.php">Back</a></button>

    <h2>Modifier un Etudiant</h2>
    <?php
    $id = intval($_GET['id']);
    require_once "../../config.php";
    $pdo = connect();
    $req = "select * from etudiant where idEtudiant = $id";
    $result = $pdo->query($req);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<form action='' method='post'>";
        echo "<label for='nom'>Nom</label>";
        echo "<input type='text' value='" . $row['nomEtudiant'] . "' name='nomEtudiant' id='nom'><br>";
        echo "<label for='prenom'>Prénom</label>";
        echo "<input type='text' value='" . $row['prenomEtudiant'] . "' name='prenomEtudiant' id='prenom'><br>";
        echo "<label for='age'>Age</label>";
        echo "<input type='text' value='" . $row['ageEtudiant'] . "' name='ageEtudiant' id='age'><br>";
        echo "<label for='email'>Email</label>";
        echo "<input type='text' value='" . $row['emailEtudiant'] . "' name='emailEtudiant' id='email'><br>";
        
        echo "<label for='date'>Adresse Mail</label>";
        echo "<input type='date' value='" . $row['dateInscription'] . "' name='dateInscription' id='date'><br>";
        echo "<label for='niveau'>Niveau</label>";
        echo "<input type='text' value='" . $row['niveau'] . "' name='niveau' id='niveau'><br>";
        echo "<label for='groupe'>Groupe</label>";
        echo "<input type='text' value='" . $row['groupe'] . "' name='groupe' id='groupe'><br>";
        echo "<input type='submit' name='modif_ens' value='Enregistrer'>";
        echo "</form>";
    }

    if(isset($_POST['modif_etu'])){
        require_once "../../config.php";
        $id = $_POST["idEtudiant"];
        $nom = $_POST["nomEtudiant"];
        $prenom = $_POST["prenomEtudiant"];
        $age = $_POST["ageEtudiant"];
        $email = $_POST["emailEtudiant"];
        $date = $_POST["dateInscription"];
        $niveau = $_POST["niveau"];
        $groupe = $_POST["groupe"];
        $pdo = connect();
        $req = "UPDATE etudiant SET nomEtudiant = '$nom',
        prenomEtudiant = '$prenom',
        ageEtudiant = '$age',
        emailEtudiant = '$email',
        dateInscription = '$date',
        niveau = '$niveau',
        groupe = $groupe WHERE idEtudiant = $id";
        try{
            $n = $pdo->exec($req);
            if($n>0){
                echo "Etudiant #".$id. "modifié avec succès";
            }
        }catch(PDOException $e){
            echo "Problème de requête...".$e->getMessage();
            die();
        }
    }
    ?>
 
</body>
</html>