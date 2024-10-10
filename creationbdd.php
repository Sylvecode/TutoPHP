<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creation BDD
    </title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "wordpress";
    $pass = "wordpress";


    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=testpierregiraud2", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $codesql = "CREATE TABLE Visiteurs(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(50),
        prenom VARCHAR(50),
        email VARCHAR(70)
        )";
        $connexion->exec($codesql);
        echo 'Table "Visiteurs" créée';

    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }



    ?>

</body>

</html>