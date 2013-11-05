<div id="messages">
    <p>
        Ceci est la page qui liste les évènements
    </p>
    <p>
    <div> Il y a <?php echo $nb_evenement; ?> évènement de prévu actuellement. </div>
        Les évènements :
        <?php foreach ($evenements as $evenement): ?>
                <div style="font-weight: bold" id="<?php echo $evenement->id; ?>"> <?php echo $evenement->libelle; ?></div>
                <div id="info_<?php echo $evenement->id; ?>"> Informations complémentaires : <?php echo $evenement->description; ?></div>
                <div id="date_<?php echo $evenement->id; ?>"> Dates : <?php echo (isset($evenement->date) && !empty($evenement->date))?  dateConv($evenement->date):''; ?></div>
        <?php endforeach; ?>
    </p>
</div>