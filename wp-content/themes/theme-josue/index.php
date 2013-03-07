<?php get_header() ?>
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
        </header>

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
        <?php get_footer() ?>
