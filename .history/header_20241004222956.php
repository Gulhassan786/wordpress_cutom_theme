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
    <header style="background-color: blue; height: 200px;">
        <div class="header-image">

        </div>

        
    </header>
    <nav>
        <?php 
            wp_nav_menu(
                array(
                    'theme-location' => 'main-menu',
                    'container'
                )
            );
        ?>
    </nav>
    