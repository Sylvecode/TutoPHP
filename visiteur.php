<?php

include_once('visiteur.class.php');

$visiteur1 = new Visiteur;


$visiteur1->set_prenom('Pierre');
$visiteur1->set_nom('Giraud');



echo 'Ton nom ? ' . $visiteur1->nom;
echo 'Ton prenom ? ' . $visiteur1->prenom; // la propriété est définit comme private, elle ne peut pas être récupérée ici





?>