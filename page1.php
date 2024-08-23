<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuto PHP</title>
</head>

<body>
    <?php include("header.php");
    ?>
    <?php include("menu.php");
    ?>

    <h1>Sylvain Périé</h1>

    <p>
        Bienvenue sur mon site !<br />
        Sur celui-ci, vous trouverez des cours et tutoriels gratuits de programmation etc...
    </p>

    <p>Les variables</p>

    <?php
    $departement = "tarn";
    $chiffre = 81;
    $pi = 3.14;
    $variable1 = true;
    $variable2 = false;
    $nombre1 = 5;
    $nombre2 = 3;

    $addition = $nombre1 + $nombre2;
    $soustraction = $nombre1 - $nombre2;
    $multiplication = $nombre1 * $nombre2;
    $division = $nombre1 / $nombre2;
    $modulo = $nombre1 % $nombre2;

    echo 'Addition : ' . $addition . '<br/>'; // Affiche 8
    echo 'Soustraction : ' . $soustraction . '<br/>'; // Affiche 2
    echo 'Mutiplication : ' . $multiplication . '<br/>'; // Affiche 15
    echo 'Division : ' . $division . '<br/>'; // Affiche 1,6667
    echo 'Modulo : ' . $modulo . '<br/>'; // Affiche 2
    
    echo $nombre1 . '+' . $nombre2 . '<br>';

    $addition = 20;
    $soustraction = $soustraction - $soustraction;
    $multiplication = $addition;

    echo 'Nouvelle valeur addition : ' . $addition . '<br/>';
    echo 'Nouvelle valeur soustraction : ' . $soustraction . '<br>';
    echo 'Nouvelle valeur multiplication : ' . $multiplication . '<br>';




    echo "Le $departement est un département de France <br/>"; // plus lourd
    echo 'Le ' . $departement . ' est un département de France <br/>'; // plus performant et lisible
    echo $chiffre;
    ?>

    <?php include("footer.php");
    ?>

</body>

</html>