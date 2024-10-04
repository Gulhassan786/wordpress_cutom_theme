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
    <h1>Header</h1>
    <?ph>