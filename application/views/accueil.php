<div class="row-fluid">
    <div class="span8">
        <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
                <div class="item active"> <?php echo img('accueil/vue1_marseille.png', 'm') ?>
                    <div class="carousel-caption">
                        <p>La ville de Marseille</p>
                    </div>
                </div>
                <div class="item"> <?php echo img('accueil/vue1_aix.png', 'ba') ?>
                    <div class="carousel-caption">
                        <p>La ville d'Aix-en-Provence</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> 
            <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a> </div>
    </div>
    <div class="span4">
        <?php foreach ($next_evenement as $event): ?>
            <div class="bloc-title"><?php echo $event->libelle; ?></div>
        <?php endforeach; ?>
    </div>
</div>
<div class="row-fluid">
    <div class="span10">
        L'AMAM ? </br></br>
        En 2012, trois anciens Miagistes d'Aix-Marseille se retrouvent en manque de Miagitude. Stevens, Clémence et Laurent </br>
        décident de prendre leur courage à deux mains et se lancent dans la magnifique aventure associative que va être l'AMAM. </br>
        </br>
        Rejoints depuis par de nouveaux anciens, ils se donnent pour mission de réunir les miagistes Aix-Marseillais, de leur créer </br>
        un véritable réseau Miagiste et de faire parvenir aux jeunes et aux moins jeunes un retour des expériences professionnelles </br>
        de chacun. </br></br>

        A l'heure de Facebook et de Twitter, la MIAGE d'Aix-Marseille se devait d'avoir son réseau social, c'est ce que l'AMAM propose.

    </div>
</div>