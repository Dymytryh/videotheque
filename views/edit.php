<?php $title = 'Editer un film' ?>

<?php ob_start() ?>
<!--XXX Formulaire d'édition d'un film + possibilité de supprimer le film -->


<?php foreach ($film as $film): ?>
	
<h1><?= $film['titre'] ?></h1>

    <form method="post" id="form1">
	<div>Titre</div>
    <input name="titre" value=<?= $film['titre'] ?>></input>
            
    <div>Auteur</div>
    <input name="auteur" type = "text" value=<?= $film['auteur'] ?>></input>

    <div>Date de sortie</div>
    <input name="date_sortie" type="date" value=<?= $film['date_sortie'] ?>></input></br>

    <input name="3d" type="checkbox" <?php  if ($film['3d'] == 1) {echo 'checked';}  ?> ></input><label> 3D</label>
            
    <div>Prix</div>
    <input name="prix" value=<?= $film['prix'] ?>></input>

    
   
</br>


<input type="submit" name = "edit" form="form1" value="Editer"></input>

<input type="submit" name ="delete" form="form1" value="Supprimer"></input>
 <?php endforeach; ?>
</form>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
