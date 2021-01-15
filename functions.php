<?php
function epineda_estils(){

    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action('wp_enqueue_scripts','epineda_estils');
?>
