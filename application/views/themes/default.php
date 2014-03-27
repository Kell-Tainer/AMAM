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
        <div class='container' id="main-content">
            <div class ='contenu'>
                <div id="masthead">
                    <header>
                        <div class="muted">  <?php echo img('amam_v1_trns.png') ?> </div>
                    </header>
                    <div class="navbar">
                        <div class="navbar-inner">
                            <div class='container'>

                                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </a>
                                
                                <div class="nav-collapse collapse">
                                    <ul class="nav">
                                        <?php $laclasse = 'accueil'; ?><li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse, 'mAccueil')); ?>">Accueil</a></li>
                                        <?php $laclasse = 'asso'; ?>   <li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse, 'l_asso')); ?>">L'association</a></li>
                                        <?php $laclasse = 'event'; ?>   <li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse, 'l_evenement')); ?>">Evenements</a></li>
                                        <?php $laclasse = 'emploi'; ?>   <li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse, 'emploi')); ?>">Offres d'emploi</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> 
                <?php echo $output; ?>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div class="container">
            <div class="footer">
                <div class="row-fluid">
                    <div class="span4 copyright "> © 2014 Copyright by AMAM | All rights reserved </div>
                    <div class="span4 offset4">
                        <ul class="footer-link">
                            <li><a href="<?php echo site_url(array('contact', 'contact')) ?>">Contact</a> <span class="divider"></span> </li>
                            <li><a href="<?php echo site_url(array('contact', 'contact')) ?>">Metions légales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php foreach ($js as $le_js): ?>
            <script type="text/javascript" src="<?php echo $le_js; ?>"></script> 
        <?php endforeach; ?>
    </body>
</html>