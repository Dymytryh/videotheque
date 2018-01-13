<?php
if(isset($_POST['submit']) && isset($_GET['id'])) {
    //XXX Confirmation du formulaire (update OU delete)
    //XXX redirection vers la page d'affichage (index.php/show?id=X) si update
    //XXX redirection vers la page d'accueil (index.php) si delete
}
else {
    //XXX Afficher le formulaire d'édition sur base de l'id
    require 'views/edit.php';
}
