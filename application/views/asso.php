<!--<div class="row-fluid">
    <div class="span12 img-content"><?php echo img('Asso/groupe-head.png') ?></div>      
</div> -->
<div class="row-fluid">
    <div class="span6 pres">
        <div class="title-pres">Historique</div>
        <div class="title-pres2">Date de création</div>
        <div class="text-pres">1er mai 2012</div>
        <div class="title-pres2">Date du 1er événement</div>
        <div class="text-pres">8 juin 2012</div>
        <div class="title-pres2">Événements organisés</div>
        <div class="text-pres">14</div>
        <div class="title-pres2">Promotions regroupées</div>
        <div class="text-pres">22</div>
        <div class="title-pres2">Membres du bureau</div>
        <div class="text-pres">13</div>
    </div>     
    
    <div class="span6 pres">
        <div class="title-pres">Objectifs</div>
        <div class="title-pres2">Maintenir les liens existants…</div>
        <div class="text-pres2">Un diplôme, un emploi, le tout souvent accompagné d’une vie de famille… chacun ayant son emploi du temps, il n’est pas toujours simple de se retrouver après la MIAGE. Nous sommes là pour vous y aider.</div>
        <div class="title-pres2">… et en créer…</div>
        <div class="text-pres2">Vous recherchez un emploi ? Un contact perdu ? De nouveaux contacts parmi les étudiants ou les fraîchement diplômés ? Forte de son répertoire et de son réseau de connaissances, l’AMAM peut sûrement vous guider.</div>
        <div class="title-pres2">… pour renforcer votre réseau.</div>
        <div class="text-pres2">Dans le monde de l’ingénierie et de l’informatique, un constat se veut de plus en plus important : les Miagistes sont partout. Nous devons faire de ce constat une force ; en maintenant plus de contacts entre nous , nous augmentons les chances pour chacun d’évoluer vers un avenir professionnel optimal.</div>
    </div>
</div> 
<div class="row-fluid" id='zone'>
    <div class="span12">   
        <?php
        $content = array();
        foreach ($bureaux as $bureau)
        {
            $content[$bureau->id] =
                    "
                        <div class='media'>
                            <img class='media-object pull-left photo_ident' src='" . img_url('Photo_ident/' . mb_strtolower($bureau->prenom) . $bureau->id . '.png') . "' alt='' />
                            <div class='media-body'>
                                <div class='media-heading' data-src='holder.js/64x64' id='ident_$bureau->id'> $bureau->prenom $bureau->nom</div>";
                                foreach ($bureau->postes as $poste)
                                {
                                    $content[$bureau->id] .= "<div id='poste_$bureau->id'_'$poste->id'> $poste->libelle </div>";
                                }
                                $content[$bureau->id] .= "
                                Promotion : $bureau->promotion </div>
                        </div>
                    ";
        }
        echo display_inline($content, 3, 'bloc bureau');

        $content = array();
        foreach ($membres as $membre)
        {
            $content[$membre->id] =
                    "   <div class='media'>
                            <img class='media-object pull-left photo_ident' src='" . img_url('Photo_ident/' . mb_strtolower($membre->prenom) . $membre->id . '.png') . "' alt='' />
                            <div class='media-body'> 
                                <div class='media-heading' data-src='holder.js/64x64' id='ident_$membre->id'> $membre->prenom $membre->nom</div>";
                                foreach ($membre->postes as $poste)
                                {
                                    $content[$membre->id] .= "<div id='poste_$membre->id'_'$poste->id'> $poste->libelle </div>";
                                }
                                $content[$membre->id] .= "
                                Promotion : $membre->promotion </div>
                        </div>
                    ";
        }
        echo display_inline($content, 3, 'bloc');
        ?>
    </div> 
</div>