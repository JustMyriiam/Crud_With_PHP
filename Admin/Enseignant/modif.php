<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../crud.css">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn btn-info "><a href="./liste.php">Back</a></button>

    <h2>Modifier un Enseignant</h2>
    <?php
    $id = intval($_GET['id']);
    require_once "../../config.php";
    $pdo = connect();
    $req = "select * from enseignant where idEnseignant = $id";
    $result = $pdo->query($req);
    while ($row = $result->fetch(PDO::FETCH_ASSOC)){
        echo "<form action='' method='post'>";
        echo "<label for='nom'>Nom</label>";
        echo "<input type='text' value='" . $row['nomEnseignant'] . "' name='nomEnseignant' id='nom'><br>";
        echo "<label for='prenom'>Prénom</label>";
        echo "<input type='text' value='" . $row['prenomEnseignant'] . "' name='prenomEnseignant' id='prenom'><br>";
        echo "<label for='age'>Age</label>";
        echo "<input type='text' value='" . $row['ageEnseignant'] . "' name='ageEnseignant' id='age'><br>";
        echo "<label for='email'>Email</label>";
        echo "<input type='text' value='" . $row['emailEnseignant'] . "' name='emailEnseignant' id='email'><br>";
        echo "<label for='tel'>Numéro de Téléphone</label>";
        echo "<input type='text' value='" . $row['numTelEnseignant'] . "' name='numTelEnseignant' id='tel'><br>";
        echo "<label for='date'>Adresse Mail</label>";
        echo "<input type='date' value='" . $row['dateEmbauche'] . "' name='dateEmbauche' id='date'><br>";
        echo "<input type='submit' name='modif_ens' value='Enregistrer'>";
        echo "</form>";
    }

    if(isset($_POST['modif_ens'])){
        require_once "config.php";
        $nom = $_POST["nomEnseignant"];
        $prenom = $_POST["prenomEnseignant"];
        $age = $_POST["ageEnseignant"];
        $email = $_POST["emailEnseignant"];
        $tel = $_POST["numTelEnseignant"];
        $date = $_POST["dateEmbauche"];
        $pdo = connect();
        $req = "UPDATE enseignant SET nomEnseignant = '$nom',
        prenomEnseignant = '$prenom',
        ageEnseignant = '$age',
        emailEnseignant = '$email',
        numTelEnseignant = '$tel',
        dateEmbauche = '$date' WHERE idEnseignant = $id";

        try{
            $n = $pdo->exec($req);
            if($n>0){
                echo "Enseignant #".$id. "modifié avec succès";
            }
        }catch(PDOException $e){
            echo "Problème de requête...".$e->getMessage();
            die();
        }
    }
    ?>
 
</body>
</html>