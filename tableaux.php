<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux en php</title>
</head>

<body>
    <?php
    $prenoms = array('Pierre', 'Paul', 'Jacques');

    for ($x = 0; $x <= 2; $x++) {
        echo $prenoms[$x] . '<br/>';
    }

    foreach ($prenoms as $items) {
        echo $items . '<br/>';
    }

    $prenoms[0] = 'Pierre';
    $prenoms[1] = 'Paul';
    $prenoms[2] = 'Jacques';

    $age = array(
        'Pierre' => 24,
        'Paul' => 22,
        'Jacques' => 'non renseigné'
    );

    foreach ($age as $valeurs) {
        echo $valeurs . '<br/>';
    }
    ;

    foreach ($age as $clef => $valeurs) {
        echo 'L\'age de ' . $clef . ' est ' . $valeurs . '.<br/><br/><br/>';
    }
    ;

    echo '<pre>'; // met en forme pour plus de lisibilité
    print_r($age); // utile pour debogguer
    echo '</pre>';


    $membres = array(
        array('Pierre', 24, 'pierre.giraud@edhec.com'),
        array('Paul', 22, 'pierre.dubreuil@live.com'),
        array('Jacques', 36, 'jacquot@gmail.com')
    );

    echo $membres[0][0] . ' a ' . $membres[0][1] . ' ans. Son mail est : ' . $membres[0][2] . '<br/>';
    echo $membres[1][0] . ' a ' . $membres[1][1] . ' ans. Son mail est : ' . $membres[1][2] . '<br/>';
    echo $membres[2][0] . ' a ' . $membres[2][1] . ' ans. Son mail est : ' . $membres[2][2] . '<br/><br/><br/>';

    for ($ligne = 0; $ligne < 3; $ligne++) {
        $membre_no = $ligne + 1;
        echo 'Membre numéro ' . $membre_no . '<br/>';
        echo '<ul>';
        for ($col = 0; $col < 3; $col++) {
            echo '<li>' . $membres[$ligne][$col] . '</li>';
        }
        echo '</ul>';
    }



    ?>

</body>

</html>