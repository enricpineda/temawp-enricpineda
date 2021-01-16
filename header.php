<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo( 'name' ); ?></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head();?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" class="logo_portada">
   <!-- <h1><?php bloginfo( 'name' ); ?></h1>
    <h4><?php bloginfo( 'description' ); ?></h4>-->
    <!-- Menú per a mòbils -->
    <?php wp_nav_menu(array('theme_location'=>'menupral-mobil','container-class' => 'menumobil'));?>
    <?php wp_nav_menu(array('theme-location'=> 'menupral-gran'));?>
</header>
