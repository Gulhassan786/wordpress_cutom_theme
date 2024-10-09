<?php 

get_header();
?>

<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div class="post-heading">
                    <h1> <?php the_title(); ?> </h1>
                    <div>
                        <h1> <?php the_post_thumbnail('medium'); ?> </h1>
                    </div>
                </div>
                <div class="post-description">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            
            

            <?php
        endwhile;
    endif;
?>

<?php 

get_footer();
?>