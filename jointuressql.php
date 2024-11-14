<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jointures SQL</title>
</head>

<body>
    <?php
    $serveur = "localhost";
    $login = "wordpress";
    $pass = "wordpress";

    try {
        $connexion = new PDO("mysql:host=$serveur;dbname=testpierregiraud2", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $jointure_int = "
        SELECT Ins.prenom, Com.commentaire
        FROM Inscrits AS Ins
        LEFT JOIN Commentaires AS Com
        ON Ins.id = Com.id_inscrit

        UNION ALL 

        SELECT Ins.prenom, Com.commentaire
        FROM Inscrits AS Ins
        LEFT JOIN Commentaires AS Com
        ON Ins.id = Com.id_inscrit
        WHERE Ins.id IS NULL
        ";

        $requete = $connexion->prepare($jointure_int);
        $requete->execute();

        $resultat = $requete->fetchAll();
        echo '<pre>';
        print_r($resultat);
        echo '</pre>';
    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }


    ?>

</body>

</html>