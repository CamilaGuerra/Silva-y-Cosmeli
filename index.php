<?php get_header(); ?> 


<!-- título y subtítulo de inicio -->
<div class="container-fluid inicio">
    <div class="row d-flex justify-content-start mascara">
        <div class="col-md-5 text-start bg-light mt-auto">
            <h1>Silva y Cosmeli</h1>
            <h5 class="subtitulo">Agency</h5>
        </div>
    </div>
</div>


<!-- slider de auspiciadores -->
<div class="container">
    <div class="row marcas">
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=marcas"); ?>
        <?php while (have_posts()) : the_post(); ?> 
               
            <?php echo do_shortcode( '[logo-showcase id="195" title="Auspiciadores"]' ); ?>

        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?> 
    </div>
</div>



<!-- loop servicios showposts -->
<div class="container">
    <div class="row d-flex justify-content-center mini-servicio">
        <h3 class="text-center">Contamos con variados servicios</h3>
         
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=servicios&showposts=2"); ?>
            <?php while (have_posts()) : the_post(); ?> 

            <div class="col-md-6 test-start">
                <h4><?php the_title(); ?></h4>
                <hr>
                <div class="slider"><?php the_field('slider'); ?></div>
            </div>    

            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?> 
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-md-3 text-center">
                <a class="btn btn-danger" href="<?php bloginfo('template_url'); ?>/servicios">Más información</a>
            </div>
        </div>        
    </div>
</div>


<!-- loop trabajos showposts -->
<div class="container">
    <div class="row d-flex justify-content-center mini-trabajo">
        <h3 class="text-center">Proyectos que hemos hecho</h3>
         
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=trabajos-realizados&showposts=3"); ?>
        <?php while (have_posts()) : the_post(); ?> 

            <div class="col-md-4 text-center">
                <hr>
                <div class="mini-img-trabajos">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                </div>
                <h4><?php the_title(); ?></h4>              
            </div>    

        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?> 

        <div class="row justify-content-center mt-5">
            <div class="col-md-3 text-center">
                <a class="btn btn-danger" href="<?php bloginfo('template_url'); ?>/trabajos-realizados">Ver más proyectos</a>
            </div>
        </div>        
    </div>
</div>

<!-- loop somos showposts -->
<div class="container-fluid mini-somos">
    <div class="row d-flex justify-content-center">
        <h3 class="text-center">Integrantes de la empresa</h3>
         
            <?php if (have_posts()) : ?>
            <?php query_posts("category_name=integrantes&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?> 

            <div class="col-md-4 text-center inte">
                <?php 
                    $image = get_field('imagen_de_integrante');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h2 class="mb-2"> <?php the_title(); ?> </h2>
                <h5><?php the_field('cargo'); ?></h5>
            </div> 

            <?php endwhile; ?> 
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?> 
            <div class="row justify-content-center mt-2 mb-5">
                <div class="col-md-3 text-center">
                    <a class="btn btn-danger" href="<?php bloginfo('template_url'); ?>/somos">Conoce al resto del equipo</a>
                </div>
            </div>        
    </div>
</div>




<?php get_sidebar(); ?> 
<?php get_footer(); ?>