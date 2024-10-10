<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP et MySQL</title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "wordpress";
    $pass = "wordpress";


    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=testpierregiraud", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connexion à la base de données réussie';
    } catch (PDOException $e) {
        echo 'Echec de la connexion : ' . $e->getMessage();
    }



    ?>

</body>

</html>