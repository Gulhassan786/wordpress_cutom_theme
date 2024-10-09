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
                        <h1> <?php the_post_thumbnail(); ?> </h1>
                    </div>
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