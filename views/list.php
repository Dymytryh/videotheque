<?php $title = 'Liste des films' ?>

<?php ob_start() ?>
<h1>Liste des films</h1>
<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Détail</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($films as $film): ?>
        <tr>
            <th scope="row"><?= $film['titre'] ?></th>
            <td><?= $film['auteur'] ?></td>
            <td>
                <a href="index.php/show?id=<?= $film['id'] ?>">
                    Voir
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="index.php/add">Ajouter des films</a>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
