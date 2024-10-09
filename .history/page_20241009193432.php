<div class="wrapper">
    <?php 
        get_header();
    ?>

    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <div class="post">
                    <div class="post-heading">
                        <a href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
                    </div>
                    <div class="post-description">
                        <?php the_content() ?>
                    </div>
                </div>
                
                

                <?php
            endwhile;
        endif;
    ?>
</div>
<?php 

get_footer();
?>