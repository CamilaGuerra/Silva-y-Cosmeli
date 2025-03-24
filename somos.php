<?php get_header(); ?> 

<?php
/*
Template Name: Somos
*/
?>

<!-- titulo somos -->
<div class="container-fluid somos">
    <div class="row d-flex justify-content-center mascara5"> 
        <div class="col-md-8 text-center">
            <h2>Sobre Nosotros</h2>
        </div>        
    </div>
</div>

<div class="container-fluid fondo-somos">
    <!-- descripción de empresa y foto respresentativa -->
    <div class="row arriba-somos">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5 descripcion-empresa">
                        <h3>Silva y Cosmeli</h3>
                        <hr>
                        <h6>Somos una agencia de Arquitectura integral, que se caracteriza por vestir  tus espacios por dentro y por fuera, integrando siempre el color como  elemento distintivo y generador de sensaciones positivas.
                        Nuestra metodología de trabajo se basa en los conceptos: cercano, integral y personalizado.
                        Cercano, porque siempre contarás con un arquitecto coach asignado para ti, quién responderá tus consultas vía whatsapp o correo electrónico. Integral, porque te asesoramos desde el diseño hasta la  construcción en forma permanente. Y Personalizado, porque  generamos las reuniones necesarias para concretar juntos.</h6>
                    </div>
                    <div class="col-md-5 img-empresa">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- loop de integrantes -->
    <div class="row justify-content-center fondo-blanco">
        
        <div class="row justify-content-center">
            <div class="col-md-5">
                <h3 class="text-center">Nuestro Equipo</h3>
            </div>
        </div>

        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=integrantes"); ?>
        <?php while (have_posts()) : the_post(); ?> 

            <div class="col-md-4 text-center inte">
                <?php 
                    $image = get_field('imagen_de_integrante');
                    if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h2> <?php the_title(); ?> </h2>
                <h5><?php the_field('cargo'); ?></h5>
            </div>

        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>

    </div>


    <!-- redes sociales -->
    <div class="row d-flex justify-content-center redes">
        <div class="col-md-3 text-center">
            <div class="iconoo face">
                <i class="fa-brands fa-facebook-f fa-4x"></i>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="iconoo">
                <i class="fa-brands fa-instagram fa-4x"></i>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="iconoo">
                <i class="fa-brands fa-twitter fa-4x"></i>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>