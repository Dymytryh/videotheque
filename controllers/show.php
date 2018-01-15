<?php
//XXX Afficher un film sur base de l'id
require_once 'models/films.php';
$film = get_film_by_id($_GET['id']);
echo $_GET['id'];
require '/views/show.php';
