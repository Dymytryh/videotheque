<?php $title = 'Ajouter des films' ?>

<?php ob_start() ?>
<!--XXX Formulaire d'ajout des films + preview (chargée depuis js)-->


<h1>Ajouter des films</h1>
            <label> Fichier</label></br>
<a  href=""><button>Choississer un fichier</button></a></br></br>

<a  href=""><button>Enregistrer</button></a>



<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
