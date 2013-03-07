<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->


<!--[if gt IE 8]><!--> 
<html lang="es" class="no-js"> <!--<![endif]-->
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
        <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/coin-slider-styles.css">

        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
        <script src="<?php bloginfo('template_url')?>/js/vendor/modernizr-2.6.2.min.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <header>

        	<div class="logo">
                <a href="index.php">
                    <hgroup>  
                    <h1>José Nuñez Barbosa</h1>
                    <h4>A B O G A D O S</h4>
                </hgroup>
                </a>

            </div>
            <section id="slider" >
        
                <a >
                    <img src="<?php bloginfo('template_url')?>/img/dibujo.png" >
                </a>
                
                <a >
                    <img src="<?php bloginfo('template_url')?>/img/dibujo2.png" >
                 </a>
                
                <a>
                   <img src="<?php bloginfo('template_url')?>/img/dibujo.png" >
                </a>
            
            </section>
        	
        </header>

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

            <section class ="bienvenida" > 
                <div class="parrafo1">   
                    <div class="titulos"><b>BIENVENIDOS A OSTERLING ABOGADOS</b></div><br/><br/>
                    <div align="justify">
                        <strong>Osterling Abogados </strong>
                        es una prestigiosa firma de asesoría jurídica con una larga trayectoria
                        en el país,que nace de la excelencia profesional de nuestra prácticas
                        y el compromiso total con cada uno de nuestros clientes.<br><br>
                        Más de tres décadas de experiencia nos han convertido en uno de los estudios
                        más destacados del país.  
                    </div>
                    <div class="trabaja" align="right">
                    <a href=""><img src="" width="200" height="22" border="0" alt="TRABAJA CON NOSOTROS"/></a>
                    </div>                                               
                </div>                 
                <div class="parrafo2">
                    <div class="parrafo21">
                        <div align="justify">
                            <div class="titulos"><b>PROBONO</b></div><br/><br/>
                            Osterling Abogados es miembro adherente a la Declaración Pro-Bono
                            de las Américas. Con esta justa causa buscamos contribuir con el desarrollo
                            económico, social y cultural de nuestro país y bajo esta Declaración, nos
                            comprometemos a brindar un trabajo mínimo de 20 horas al año, por abogado.                        
                        </div>
                        <div align="right">
                            <a href="" class="links">Ver más &gt;</a>
                        </div>
                    </div>                   
                    <div align="right">
                        <img src="<?php bloginfo('template_url')?>/img/i1.jpg" name="" width="87" height="134" border="0" />                       
                        <img src="<?php bloginfo('template_url')?>/img/i2.jpg" name="" width="87" height="134" border="0" />                        
                    </div>                                
                </div>
            </section>
          <!-- <aside class="sidebar">
                <?php wp_list_categories(); ?>
            </aside>   -->          
        <footer>Qaysen</footer>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

        <script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/coin-slider.js"></script>

        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>

        <script src="<?php bloginfo('template_url') ?>/js/main.js"></script>


        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
        <script>
            $('#slider').coinslider({ width: 1100, navigation: false, delay: 500, height: 400 });
        </script>
    </body>
</html>
