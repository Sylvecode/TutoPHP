<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex test</title>
</head>

<body>
    <?php

    $r = "J'apprends à coder";
    $regex1 = "coder";
    $regex2 = "ode";
    $regex3 = "CoDeR";


    if (preg_match("/[a-zA-Z0-9ééà]/", $r)) {
        echo "L'expression a bien été trouvée<br/>";
    } else {
        echo "Expression non trouvé<br/>";
    }
    /*
    if (preg_match("/[aeiouy]/", $r)) { // recherche soit un a, e, i, o, u, y true si une des lettres est trouvée, placé le $ ou ^ en dehors des crochets
        echo "L'expression a bien été trouvée<br/>";
    } else {
        echo "Expression non trouvé<br/>";
    }
    
    if (preg_match("/^$regex1/", $r)) { // ^recherche le pattern en début de chaine de caractères
        echo "L'expression a bien été trouvée<br/>";
    } else {
        echo "Expression non trouvé<br/>";
    }
    
    if (preg_match("/$regex2$/", $r)) { // $ recherche le pattern en fin de chaine de caractères
        echo "L'expression a bien été trouvée<br/>";
    } else {
        echo "Expression non trouvé<br/>";
    }
    if (preg_match("/$regex3/i", $r)) { // i rend le regex insensible à la casse
        echo "L'expression a bien été trouvée<br/>";
    } else {
        echo "Expression non trouvé<br/>";
    }
    if (preg_match("/coder|programmer/", $r)) { //  |(ou)  recherche "coder" ou "programmer"
        echo "L'expression a bien été trouvée<br/>";
    } else {
        echo "Expression non trouvé<br/>";
    }
        */

    ?>

</body>

</html>