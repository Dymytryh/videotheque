<?php $title = 'Ajouter des films' ?>

<?php ob_start() ?>
<!--XXX Formulaire d'ajout des films + preview (chargée depuis js)-->


<h1>Ajouter des films</h1>
            <label> Fichier</label></br>
<form method="post" action="/videotheque/index.php" enctype="multipart/form-data">

	<input type="file" name="fichier"></input>
	
	</br>
	</br>

	<input type="submit" value="Enregistrer" name="submit"></input>


</form>

<?php include 'preview.php' ?>



<?php $content = ob_get_clean() ?>


<?php include 'layout.php' ?>

