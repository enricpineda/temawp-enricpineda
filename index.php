<?php
/*
**** MAIN TEMPLATE ****
*/
/*--------- HEADER --------------*/
get_header();

?>
<div>
/*--------- CONTENT -------------*/
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

/*--------- SIDEBAR -------------*/
<div class="lateral">
    <?php
    get_sidebar();
?>
    </div>
    /*--------- FOOTER -------------*/
</div>
    <?php
    get_footer();


?>
