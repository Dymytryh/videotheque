<?php $title = 'Film' ?>

<?php ob_start() ?>
<!-- XXX Tableau affichant le détail du film
     XXX Bouton permettant d'éditer un film
-->

<h1><?php echo $film['titre'] ?></h1>
<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Date de sortie</th>
            <th>3D</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <th scope="row"><?= $film['titre'] ?></th>
            <td><?php echo $film['auteur'] ?></td>
            <td><?php echo $film['date_sortie'] ?></td>
            <td><?php echo $film['3d'] ?></td>
            <td><?php echo $film['prix'] ?></td>
        </tr>
       
    </tbody>
</table>

<a  href="/videotheque/index.php/edit?id=<?= $film['id'] ?>"><button>Editer</button></a>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
