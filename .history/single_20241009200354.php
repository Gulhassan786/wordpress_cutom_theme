<?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <div class="post-heading">
                    <h1><?php the_title(); ?></h1>
                </div>
                <div class="post-description">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php
        endwhile;
    endif;
    ?>