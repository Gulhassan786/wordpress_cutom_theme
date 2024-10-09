<?php 

get_header();
?>

<p> this is page.php </p>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <h1> <?php the_title(); ?> </h1>
        <p> <?php the_content(); ?>  </p>

        <?php
    endwhile;
endif;
?>

<?php 

get_footer();
?>