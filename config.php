<?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'etudiantdb');

    function connect(){
        try{
            $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USERNAME, DB_PASSWORD);
            //echo "Connexion réalisée avec succès";
            return $pdo;
        }catch(PDOException $e){
            print "Erreur! :".$e->getMessage(). "<br>";
            die();
        }
    }
    ?>