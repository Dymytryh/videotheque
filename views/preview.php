<h2>Preview</h2>
<!--XXX Tableau de préview des films (d'un fichier json)-->




<?php 
$json = file_get_contents("././data/films.json");

var_dump(json_decode($json));


$parsed_json = json_decode($json);
//$titre_film = $parsed_json->{'titre'};

//echo "${titre_film}";
?>

<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
        </tr>
    </thead>
    <tbody>
    	<th scope="row"></th>
            <td></td>
        </tr>
       
    </tbody>

