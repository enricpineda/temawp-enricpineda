<?php
/*
**** MAIN TEMPLATE ****
*/
/*--------- HEADER --------------*/
get_header();

?>
<div class="main-body">
<div class="principal">
    <?php
			// loop.
			while ( have_posts() ) :

				the_post();

				the_title();
				the_content('Continua leyendo...', get_the_title());


				// Fin loop.
			endwhile;

    ?>
    </div>

<div class="lateral">
    <?php
    get_sidebar();
?>
    </div>
</div>
<div style="clear:both;"></div>
    <?php
    get_footer();


?>
