<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions date / temps</title>
</head>

<body>
    <?php
    echo time();

    echo 'Nous sommes le ' . date("d/m/Y") . '<br/>';
    echo 'Aujourd\'hui c\'est ' . date('l') . '<br/>';
    echo 'Il est ' . date("H:i:s");
    echo date("d-m-Y, 11000000");

    $jour = array(
        "",
        "Lundi",
        "Mardi",
        "Mercredi",
        "Jeudi",
        "Vendredi",
        "Samedi",
        "Dimanche"
    );

    $mois = array(
        "",
        "Janvier",
        "Février",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Aout",
        "Septembre",
        "Octobre",
        "Novembre",
        "Décembre"
    );

    $datefr = $jour[date("N")] . ' ' . date("d") . ' ' . $mois[date("n")] . ' ' . date("Y");
    echo 'Nous sommes le ' . $datefr;


    setlocale(LC_TIME, 'fr_FR');
    echo 'Nous sommes le ' . strftime("%A %d %B %Y") . '<br/>';
    echo 'Il est actuellement ' . strftime("%H : %M : %S");

    $date1 = checkdate(12, 31, 2014);
    $date2 = checkdate(13, 31, 2014);
    $date3 = checkdate(01, 25, -100);

    if ($date1) {
        echo "La date est valide ! <br/>";
    } else {
        echo "La date n'est pas valide ! <br/>";
    }

    if ($date2) {
        echo "La date est valide ! <br/>";
    } else {
        echo "La date n'est pas valide ! <br/>";
    }

    if ($date3) {
        echo "La date est valide ! <br/>";
    } else {
        echo "La date n'est pas valide ! <br/>";
    }

    echo "<pre>";
    print_r(getdate());
    echo "<pre/>";

    echo "<br></br>";

    echo "<pre>";
    print_r(getdate("1"));
    echo "</pre>";

    ?>
</body>

</html>