<div class="row-fluid">   
    <div class="span6 bloc-title">Evenements à venir</div>  
    <div class="span6 bloc-title">Evenements passés</div>     
</div> 
<div class="row-fluid" id='zone'>
    
    <div class="span6">
        <?php
        $content = array();
        foreach ($evenements_next as $evenement){
            $date = (isset($evenement->date) && !empty($evenement->date))?dateConv($evenement->date):'';
            $content[$evenement->id] = 
                "
                    <div style='font-weight: bold' id='lib_$evenement->id'> $evenement->libelle</div>
                    <div id='info_$evenement->id'> $evenement->description</div>
                    <div id='date_$evenement->id'> Dates : ".$date."</div>
                ";
        }
        echo display_incolumn($content, 1, 'bloc');
        ?>
    </div>
     <div class="span6">
        <?php
        $content = array();
        foreach ($evenements_past as $evenement){
            $date = (isset($evenement->date) && !empty($evenement->date))?dateConv($evenement->date):'';
            $content[$evenement->id] = 
                "
                    <div style='font-weight: bold' id='lib_$evenement->id'> $evenement->libelle</div>
                    <div id='info_$evenement->id'> $evenement->description</div>
                    <div id='date_$evenement->id'> Dates : ".$date."</div>
                ";
        }
        echo display_incolumn($content, 1, 'bloc');
        ?>
    </div>
</div>
