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
    <style type="text/css">
        nav{
            background-color: <?php echo get_template_mod('unique_id', '') ?>
        }
    </style>
</head>
<body>
    <header>
        <div class="header-image">
            <?php the_custom_logo(); ?>
        </div>
        
    </header>
    <nav>
        
        <?php 
            wp_nav_menu(
                array(
                    'theme-location' => 'main-menu',
                    'container' => 'ul',
                    'menu_class' => 'nav-menu'
                )
            );
        ?>
    </nav>
    