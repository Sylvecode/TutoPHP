<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions String PHP</title>
</head>

<body>
    <?php
    echo strlen("Bonjour à tous") . '<br/>';
    echo str_word_count("Bonjour à tous") . '<br/>';
    echo str_word_count("Salut l'ami") . '<br/>';
    echo str_word_count("Bonjour a tous") . '<br/>';

    echo str_repeat("Bonjour <br/>", 7);

    $texte = "Bonjour, comment allez-vous ?";
    echo str_replace("Bonjour", "Bonsoir", $texte, $i);
    echo '<br/> Nombre de remplacements : ' . $i . '<br/>';

    $minmaj = "BonJour, VouS aLLez bIEN ?";
    echo strtolower($minmaj) . '<br/>';
    echo strtoupper($minmaj) . '<br/></br>';

    echo strpos("Bonjour", "o") . '<br/>';
    echo strpos("Bonjour à tous", "tous") . '<br/>';
    echo strpos("Bonjour", "e") . '<br/>';


    $str = 'J\'aime le <strong>"PHP"</strong>';
    echo htmlspecialchars($str);

    echo "<br/><br/><br/>";

    echo nl2br("Bonjour !
    Comment ça va ?");

    echo "<br/><br/>";

    $ch2tb = "Bonjour à tous";
    print_r(explode(" ", $ch2tb));

    echo "<br/><br/>";

    print_r(str_split("Bonjour", 2));

    echo "<br/><br/>";

    $tb2ch = array('Bonjour', 'à', 'tous');
    echo implode(" ", $tb2ch);


    ?>

</body>

</html>