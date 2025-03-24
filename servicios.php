<?php get_header(); ?> 

<?php
/*
Template Name: Servicios
*/
?>


<!-- título servicios -->
<div class="container-fluid servicios">
    <div class="row d-flex justify-content-center mascara2">
        <div class="col-md-8 text-center">
            <h2>Nuestros Servicios</h2>
        </div>
    </div>
</div>

<!-- Íconos -->
<div class="container contenedor-iconos">
    <div class="iconos">
        <span class="icon">
            <i class="fa-solid fa-person-digging fa-4x"></i> 
        </span>
        <span class="icon">
            <i class="fa-solid fa-hammer fa-4x"></i>
            
        </span>
        <span class="icon">
            <i class="fa-solid fa-compass-drafting fa-4x"></i>
            
        </span>
        <span class="icon">
            <i class="fa-solid fa-wrench fa-4x"></i>
            
        </span>
        <span class="icon">
            <i class="fa-solid fa-paint-roller fa-4x"></i>
                
        </span>        
    </div>
</div>
    
<!-- LOOP SERVICIOS -->
<div class="container loop-servicios">
    <div class="contenedor">
        <div class="row justify-content-between d-flex align-items-center">  
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=servicios"); ?>
            <?php while (have_posts()) : the_post(); ?>            
                    
                <div class="col-md-5">
                    <div id="service" class="titulo"><h4><?php the_title(); ?></h4></div>
                    <hr>
                        
                    <div class="slider"><?php the_field('slider'); ?></div>
                    <div class="descripcion container"><?php the_field('descripcion_servicio'); ?></div>
                    <div class="video d-flex justify-content-center"><?php the_field('video_youtube'); ?></div>
                        
                </div>
                 
            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>