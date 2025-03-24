<?php
$post = $wp_query->post;
if ( in_category('trabajos-realizados') ) {

include(TEMPLATEPATH . '/single-trabajos.php'); 

} else {

include(TEMPLATEPATH . '/single-general.php');

}

?>