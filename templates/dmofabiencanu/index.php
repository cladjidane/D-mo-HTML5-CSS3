<?php
/**
 * Juste une template simple
 */

defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
//JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
    <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
    <jdoc:include type="head" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/apple-touch-icon.png">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/style.css">
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/960.css">
	
	<!--
	
		TODO // Lier les fichiers entres eux pour n'avoir à faire qu'un appel
	
	-->
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/file-api.css">
	
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/modernizr-1.7.min.js"></script>
</head>
<body>

	<div id="header-container">
		<header class="wrapper">
			<h1 id="title">HTML5 <span>par l'exemple</span></h1>
            <nav>
                <?php if($this->countModules('menu')) : ?>
                    <aside>
                        <jdoc:include type="modules" name="menu" />
                    </aside>
                <?php endif; ?>
			</nav>
		</header>
	</div>
    
	<div id="main" class="wrapper container_16">
		<article class="grid_11">
				<jdoc:include type="message" />
				<jdoc:include type="component" />            
		</article>
        
        <?php if($this->countModules('aside')) : ?>
            <aside id="aside" class="grid_5">
                <div class="div-parent"><jdoc:include type="modules" name="aside" /></div>
            </aside>
		<?php endif; ?>
	</div>
    
	<div id="footer-container">
		<footer class="wrapper">        
            <jdoc:include type="modules" name="footer" />
        </footer>
	</div>
    
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/script.js"></script>
	<!--[if lt IE 7 ]>
	<script src="js/libs/dd_belatedpng.js"></script>
	<script> DD_belatedPNG.fix('img, .png_bg');</script>
	<![endif]-->
</body>
</html>
