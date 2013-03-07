<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
        	<?php bloginfo('name');

        	?>
        </title>
        <meta name="description" content="<?php bloginfo('description');?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/normalize.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <script src="<?php bloginfo('template_url')?>/js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>

        	<div class="logo"></div>
        	<h1>Elicia Cordova Lazaro</h1>
        </header>
        <section class="slider">

        </section>
        <nav>
        	<ul>
        		<li><a href="">Inicio</a></li>
        		<li><a href="">Sobre mi</a></li>
        		<li><a href="">Proyecto</a></li>
        		<li><a href="">Contacto</a></li>
        	</ul>
        </nav>	

         <section class="noticias">
            <h2 class="titulo-noticias">Articulos</h2>
            <?php while (have_posts()) : the_post(); ?>
                <article class="articulo">
                <h3 class="titulo-articulo"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                <div class="contenido-articulo"><?php the_content() ?></div>
                </article>
            <?php endwhile; ?>
        </section>

        <section class="bienvenida">
        Hola me llamo Josue.
        </section>

        <!--<aside class="sidebar">
        <?php wp_list_categories(); ?>
        </aside>-->

        <footer>
        Diseñada por Qaysen.
        </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url')?>/js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url')?>/js/main.js"></script>


        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
