<?php
session_start();
// session_destroy();

$nom_cookie = "utilisateur";
$valeur_cookie = "Pierre";

setcookie($nom_cookie, $valeur_cookie, time() + 3600, "/", "pierre-giraud.fr", false, true);

$nom_cookie_2 = "test";
$valeur_cookie_2 = "Ceci est un test";

setcookie($nom_cookie_2, $valeur_cookie_2);

echo $_COOKIE["test"];
setcookie($nom_cookie_2, "aaa", time() - 3600);


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobales</title>
</head>

<body>
    <?php
    $x = 10;
    $y = 20;

    function Mult()
    {
        $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
    }
    Mult();
    echo $z;


    echo $_SERVER['PHP_SELF'] . '<br/>';
    echo $_SERVER['SERVER_ADDR'] . '<br/>';
    echo $_SERVER['SERVER_NAME'] . '<br/>';
    echo $_SERVER['SCRIPT_NAME'] . '<br/>';
    echo $_SERVER['HTTP_HOST'] . '<br/>';

    $_SESSION['prenom'] = "pierre";
    $_SESSION['age'] = 24;
    $_SESSION['sport'] = "trail";








    ?>

</body>

</html>