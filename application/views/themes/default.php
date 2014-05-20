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
                    <header id="header">
                        <div id="social-media-icons">
                            <a class="social-media-icon facebook" target="_blank" href="https://www.facebook.com/asso.amam">Facebook</a>
<!--                            <a class="social-media-icon twitter" target="_blank" href="">Twitter</a>
                            <a class="social-media-icon G-Plus" target="_blank" href="">G-Plus</a>
                            <a class="social-media-icon youtube" target="_blank" href="">Youtube</a>-->
                        </div>
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
                                        <?php $laclasse = 'accueil'; ?><li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse)); ?>">Accueil</a></li>
                                        <?php $laclasse = 'asso'; ?>   <li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse)); ?>">L'association</a></li>
                                        <?php $laclasse = 'event'; ?>   <li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse)); ?>">Evenements</a></li>
                                        <?php $laclasse = 'emploi'; ?>   
                                        <!--<li <?php echo ($classe == $laclasse) ? 'class="active"' : '' ?> ><a href="<?php echo site_url(array($laclasse)); ?>">Offres d'emploi</a></li>-->
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