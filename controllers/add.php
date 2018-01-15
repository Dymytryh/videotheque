<?php
if(isset($_POST['submit'])) {
    //XXX Confirmation du formulaire + redirection vers la page d'accueil
    require_once 'models/films.php';

}
else {
    //XXX Afficher le formulaire
    require 'views/add.php';
}
