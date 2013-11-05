<div id="messages">
    <p>
        Ceci est la page de présentation de l'association
    </p>

    <div style="font-weight: bold" >Objectifs :</div>
    <div>
        - Réunir les étudiants diplomés de la MIAGE d'IAx-Marseille
        - Créer un réseau de MIAGISTE
    </div>

    <div style="font-weight: bold" > Historique :</div>
    <div>
        - Créer en 2012
        - Se développe en 2013
        - Va mourir en 2350 avec son fondateur (qui aura survécu jusque la le bougre !)
    </div>

    <div style="font-weight: bold" > Les membres du bureau sont au nombre de : <?php echo $nb_membre;?></div>
    <ul>
        <?php foreach ($membres as $membre) : ?>
                <li style="font-style: italic" id="<?php echo $membre->id; ?>"> <?php echo $membre->nom; ?></li>
        <?php endforeach;?>
    </ul>
</div>
