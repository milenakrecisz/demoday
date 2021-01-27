<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <?php
      wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container_class' => 'header-menu' ) );
    ?>

</head>

<body <?php body_class(); ?>>
