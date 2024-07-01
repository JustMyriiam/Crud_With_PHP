<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<h2>Supprimer un Enseignant</h2>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $nom = $_GET['id'];
        try {
            require_once "../../config.php";
            $pdo = connect();
            $req = "delete from enseignant where idEnseignant = $id";
            $n = $pdo->exec($req);
            if($n>0) {
            echo "Enseignant".$nom. "supprimé avec succès";
            header('Location: listeenseignant.php');
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