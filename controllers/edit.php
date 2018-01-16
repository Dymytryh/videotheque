<?php
if((isset($_POST['edit']) OR isset($_POST['delete'])) && isset($_GET['id'])) {
    //XXX Confirmation du formulaire (update OU delete)
    //XXX redirection vers la page d'affichage (index.php/show?id=X) si update
    //XXX redirection vers la page d'accueil (index.php) si delete

  require_once 'models/films.php';

if(isset($_POST['edit'])){
if(isset($_POST['3d'])){
$d3 = 1;
}else{
	$d3=0;};

	

$values = "titre= '".$_POST['titre']."', auteur = '".$_POST['auteur']."', date_sortie = '".$_POST['date_sortie']."', prix= '".$_POST['prix']."', 3d='".$d3."'";

set_film($_GET['id'],$values);

header("Location: show?id=".$_GET['id']);}

if(isset($_POST['delete'])){

delete_film_by_id($_GET['id']);

header("Location: /videotheque/index.php");
}

require '/views/edit.php';
}
else {
    //XXX Afficher le formulaire d'édition sur base de l'id
    
      require_once 'models/films.php';
$film = get_film_by_id($_GET['id']);
require 'views/edit.php';
}
