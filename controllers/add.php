<?php
if(isset($_POST['submit'])) {
    //XXX Confirmation du formulaire + redirection vers la page d'accueil
    require_once 'models/films.php';
    $values = $values = "titre= '".$_POST['titre']."', auteur = '".$_POST['auteur']."', date_sortie = '".$_POST['date_sortie']."', prix= '".$_POST['prix']."', 3d='".$d3."'";
add_film();
}
else {
    //XXX Afficher le formulaire
    require 'views/add.php';
}
