<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- It's not the good way to include css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/style.css">
    <title>
    <?php echo get_the_title(); ?> |
    <?php bloginfo("name"); ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <h1></h1>
<header>
    <!-- Header image -->
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg" alt="Header Image" class="header-image">

    <!-- Navigation Menu generated from WordPress Admin -->
    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location' => 'main-menu', // Menu location set in functions.php
            'container' => 'ul',             // Wrap the menu in a <ul> tag
            'menu_class' => 'nav-menu',      // Class for the <ul> tag
        ));
        ?>
    </nav>
</header>