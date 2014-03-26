<div class="row-fluid">
    <div class="span12">
        <?php
        $content = array();
        foreach ($evenements as $evenement){
            $date = (isset($evenement->date) && !empty($evenement->date))?dateConv($evenement->date):'';
            $content[$evenement->id] = 
                "
                    <div style='font-weight: bold' id='lib_$evenement->id'> $evenement->libelle</div>
                    <div id='info_$evenement->id'> $evenement->description</div>
                    <div id='date_$evenement->id'> Dates : ".$date."</div>
                ";
        }
        echo display_inline($content, 2, 'bloc');
        ?>
    </div>
</div>
