<?php 
// aquí pongo que galería de imágenes es igual a $images para poder poner el código después.
$images = get_field('galeria_de_imagenes');

get_header(); ?>

<!-- loop de proyecto (single-page) -->
<div class="container-fluid single-fondo">
    <div class="row d-flex justify-content-center mascara4">
        <div class="col-md-10 bg-single fondo-single">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 top">
                        <h2 class="text-center single-titulo"><?php the_title(); ?></h2>
                    </div>
                </div>


                <div class="row d-flex align-items-center justify-content-center contenedor-arriba">

                    <div class="col-md-5">
                        <div class="img-trabajos">
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive ', 'title' => 'Feature image']); ?>
                        </div>
                    </div>

                <div class="col-md-1">
                </div>

                    <div class="col-md-5 derecha">
                        <h4><strong style="color:#FF343B;">Año:</strong> <?php the_field('ano_de_realizacion'); ?></h4>
                        <h4><strong style="color:#FF343B;">Ubicación:</strong>
                            <?php the_field('ubicacion_del_proyecto'); ?></h4>
                        <h4><strong style="color:#FF343B;">Tiempo de trabajo:</strong>
                            <?php the_field('tiempo_de_realizacion'); ?></h4>
                        <h4><strong style="color:#FF343B;">Metros cuadrados:</strong>
                            <?php the_field('metros_cuadrados'); ?>m²</h4>

                    </div>


                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 parrafo-single">
                        <p><?php the_field('descripcion_del_proyecto'); ?></p>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col.md.10 g-imagenes">

                        <?php 
                            
                            if( $images ): ?>

                        <?php foreach( $images as $image ): ?>

                        <a href="<?php echo esc_url($image['url']); ?>">
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                        <p><?php echo esc_html($image['caption']); ?></p>

                        <?php endforeach; ?>

                        <?php endif; ?>


                    </div>
                </div>


                <div class="row d-flex justify-content-center">
                    <div class="col-md-2">
                        <a class="btn btn-danger boton-single" href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
                    </div>
                </div>

            </div>


            <?php endwhile; ?>
            <?php else : ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>