<?php 

get_header();
?>

<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div class="post-heading">

                </div>
                <div class="post-description"></div>
            </div>
            
            <p> <?php the_content(); ?>  </p>

            <?php
        endwhile;
    endif;
?>

<?php 

get_footer();
?>