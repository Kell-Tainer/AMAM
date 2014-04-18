<div class="row-fluid">
    <div class="span12 img-content"><?php echo img('Asso/groupe-head.png') ?></div>      
</div> 
<div class="row-fluid">
    <div class="span6 pres">Historique :</div>     
    <div class="span6 pres">Objectifs :</div>     
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