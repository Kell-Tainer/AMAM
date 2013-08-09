<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" > 
    <head>
        <title><?php echo $titre; ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $charset; ?>" />
        <?php foreach ($css as $le_css): ?>
            <link rel="stylesheet" type="text/css" media="screen" href="<?php echo $le_css; ?>" />
        <?php endforeach; ?>
    </head>

    <body>
        <div class='container'>
            <div class ='contenu'>
                <div id="masthead">
                    <h3 class="muted">  <?php echo img('amam_v1.png') ?> </h3>
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class='container'>
                                <ul class="nav">
                                    <?php $laclasse = 'accueil';?><li <?php echo ($classe == $laclasse)?'class="active"':''?> ><a href="<?php echo site_url(array($laclasse, 'mAccueil')); ?>">Accueil</a></li>
                                    <?php $laclasse = 'asso';?>   <li <?php echo ($classe == $laclasse)?'class="active"':''?> ><a href="<?php echo site_url(array($laclasse, 'l_asso')); ?>">L'association</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div> 
                <div>
                    <?php echo $output; ?>
                </div>
            </div>
        </div>
        <?php foreach ($js as $le_js): ?>
            <script type="text/javascript" src="<?php echo $le_js; ?>"></script> 
        <?php endforeach; ?>
    </body>

</html>