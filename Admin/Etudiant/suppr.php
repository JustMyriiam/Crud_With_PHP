<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<button type="button" class="btn btn btn-info "><a href="./liste.php">Back</a></button>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $nom = $_GET['nomEtudiant'];
        try {
            require_once "../../config.php";
            $pdo = connect();
            $req = "delete from etudiant where idEtudiant = $id";
            
            $n = $pdo->exec($req);
            if($n>0) {
            echo "Etudiant".$nom. "supprimé avec succès";
            header('Location: liste.php');
            exit();}
    
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        header('Location: liste.php');
        exit();
    }
    

    ?>
</body>
</html>