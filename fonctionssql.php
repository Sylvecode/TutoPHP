<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions sql</title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "wordpress";
    $pass = "wordpress";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=testpierregiraud2", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $foncsql = "
        SELECT AVG(dons), age FROM Inscrits WHERE nom!='Bertrand' GROUP BY age HAVING AVG(dons) > 4";

        $requete = $connexion->prepare($foncsql);
        $requete->execute();

        $resultat = $requete->fetchAll();
        echo '<pre>';
        print_r($resultat);
        echo '<pre>';

    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }
    ?>

</body>

</html>