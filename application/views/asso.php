<div id="messages">
    <p>
        Ceci est la page de présentation du club
    </p>
    <p>
        Il y a <?php echo $nb_activites; ?> dans le club actuellement. </br>
        Les activités :
        <?php foreach ($activites as $activite): ?>
            <p>
                <div id="<?php echo $activite->id; ?>"> <?php echo $activite->libelle; ?></div>
            </p>
        <?php endforeach; ?>

    </p>
    <p>
        <a href="<?php echo site_url(array('accueil', 'mAccueil')) ?>">accueil</a>
    </p>
</div>
