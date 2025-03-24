<?php get_header(); ?> 

<?php
/*
Template Name: Contacto
*/
?>

<!-- titulo contacto -->
<div class="container-fluid contacto">
    <div class="row d-flex justify-content-center mascara6"> 
        <div class="col-md-8 text-center">
            <h2>Contáctanos</h2>
        </div>        
    </div>
</div>


<div class="container">

    <!-- información de contacto -->
    <div class="row contact align-items-center justify-content-between">
        <div class="col-md-5 direccion">
            <h3>¿Quieres comunicarte con nosotros?</h3>
            <h6>Si quieres nuestros servicios no dudes en contarctarnos, trabajamos todos los días, exccepto festivos</h6>

            <div class="atencion">
                <p><strong>Nuestro horario de atención: </strong>09:00 - 18:00</p>
                <p><strong>Dirección: </strong>Edificio #233 Bellavista, Valparaíso, Valparaíso, Chile.</p>
            </div>


            <!-- google maps -->
            <div class="mapa">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="500" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bellavista%20valparaiso&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- formulario de contacto -->
        <div class="col-md-6 formulario">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php the_content(); ?>
                </div>
            </div>
             
        </div>
    </div>

</div>



<?php get_footer(); ?>