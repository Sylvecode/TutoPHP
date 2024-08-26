<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>

<body>
    <?php
    $heure_connexion = 19;
    // if else
    if ($heure_connexion < 18) {
        echo "Passez une bonne journée <br/>";
        $journee = "oui";
    } else {
        echo "Passez une bonne soirée <br/>";
        $journee = "non";
    }

    echo 'Fait-il jour ? La réponse est ' . $journee . '.<br/>';

    $note = 18;
    $difficulte = "moyen";
    // if else if
    if ($note < 10) {
        echo "Vous n'avez pas eu la moyenne. <br/>";
    } else if ($note == 10) {
        echo "Vous avez eu juste la moyenne. <br/>";
    } else {
        echo "Vous avez eu plus de la moyenne. <br/>";
    }

    // AND &&    
    if ($note <= 12 and $difficulte == "facile") {
        echo "C'est nul ! <br/>";
    } else if ($note > 12 and $difficulte == "facile") {
        echo "Pas mal, mais c'était facile <br/>";
    } else if ($note <= 12 and $difficulte == "difficile") {
        echo "Ne vous découragez pas, c'était difficile <br/>";
    } else {
        echo "Bravo ! <br/>";
    }

    // OR ||
    if ($difficulte == "facile" or $difficulte == "moyen") {
        echo "Ce contrôle n'était pas difficile <br/>";
    } else {
        echo "Ce contrôle était dur, non ? <br/>";
    }


    $note = 4;
    if ($note == 0) {
        echo "Tu es nul ! <br/>";
    } else if ($note == 4) {
        echo "C'est très mauvais <br/>";
    } else if ($note == 8) {
        echo "Ce n'est pas bon <br/>";
    } else if ($note == 12) {
        echo "C'est moyen <br/>";
    } else if ($note == 16) {
        echo "Bien joué  <br/>";
    } else if ($note == 20) {
        echo "Parfait  <br/>";
    } else {
        echo "Je n'ai pas de commentaire pour cette note <br/>";
    }

    switch ($note) { // Le switch ne peut tester QUE l'égalité 
        case 0:
            echo "Tu es nul ! <br/>";
            break; // break arrête l'instruction si PHP a rencontré le bon cas
        case 4:
            echo "C'est très mauvais <br/>";
            break;
        case 8:
            echo "C'est n'est pas bon <br/>";
            break;
        case 12:
            echo "C'est moyen </br>";
            break;
        case 16:
            echo "Bien joué <br/>";
            break;
        case 20:
            echo "Parfait ! <br/>";
            break;
        default:
            echo "Je n'ai pas de commentaire pour cette note <br/>";
    }


    $etudiant = true;
    if ($etudiant == true) {
        echo "Vous êtes étudiant <br/>";
    } else {
        echo "Vous n'êtes pas étudiant <br/>";
    }

    if ($etudiant) {
        echo "Vous êtes étudiant <br/>";
    } else {
        echo "Vous n'êtes pas étudiant <br/>";
    }

    if (!$etudiant) {
        echo "Vous n'êtes pas étudiant <br/>";
    } else {
        echo "Vous êtes étudiant <br/>";
    }

    if ($etudiant) {
        ?>
        <p>Vous êtes étudiant "''''''''''''''''"""'"'</p>
        <?php
    }

    $age = 24;

    if ($age >= 18) {
        $autorisation = true;
    } else {
        $autorisation = false;
    }


    $autorisation = ($age >= 18) ? true : false; // alors autorisation sera true, sinon autorisation sera false
    


    ?>

</body>

</html>