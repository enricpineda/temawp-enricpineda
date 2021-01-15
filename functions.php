<?php
function epineda_estils(){

    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Roboto&family=Signika:wght@600&display=swap');
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action('wp_enqueue_scripts','epineda_estils');
?>
