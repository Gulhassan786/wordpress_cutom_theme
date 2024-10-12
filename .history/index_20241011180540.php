<div class="wrapper">
    <?php get_header(); ?>

    <!-- Add the Slider Here -->
    <section class="slider-section">
        <?php
            echo do_shortcode('[smartslider3 slider="2"]');
        ?> 
    </section>

    <!-- Custom Header Section -->
    <div class="custom-header">
        <img alt="" src="<?php header_image(); ?>">
    </div>

    <!-- <section>
        <?php
            $query = new WP_Query( array( 'post_type' => "mycustompost" ) );
            if ( $query -> have_posts() ) :
                while ( $query -> have_posts() ) : $query -> the_post(); ?>
                    <div class="post">
                        <div class="post-heading">
                            <a href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
                        </div>
                        <div class="post-description">
                            <?php the_content(); ?>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="signature">
                            <b>Author: </b><?php the_author(); ?><br>
                            <b>Time: </b><?php the_time(); ?><br>
                            <b>Date: </b><?php the_date(); ?><br>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            // Restore original Post Data
            wp_reset_postdata();
        ?>
    </section> -->

    <section>
    <?php
        $query = new WP_Query( array( 'post_type' => "mycustompost" ) );
        if ( $query -> have_posts() ) :
            while ( $query -> have_posts() ) : $query -> the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="post-card">
                    <div class="post">
                        <div class="post-image">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'custom-size' );
                                ;  // Display featured image
                            } ?>
                        </div>
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="post-meta">
                                <b>Author: </b><?php the_author(); ?><br>
                                <b>Time: </b><?php the_time(); ?><br>
                                <b>Date: </b><?php the_date(); ?><br>
                            </div>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;
        endif;
        wp_reset_postdata();
    ?>
</section>


    <section class="content-area">
        <div class="left-column">
            <h1 style="text-align: center"><?php echo get_theme_mod('my_label_1', 'Actual Content') ?></h1>
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <div class="post">
                        <div class="post-heading">
                            <a href="<?php the_permalink(); ?>"><h1> <?php the_title(); ?> </h1></a>
                        </div>
                        <div class="post-description">
                            <?php the_content(); ?>
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="signature">
                            <b>Author: </b><?php the_author(); ?><br>
                            <b>Time: </b><?php the_time(); ?><br>
                            <b>Date: </b><?php the_date(); ?><br>
                        </div>
                    </div>
                <?php
                endwhile;
            endif;
            // Restore original Post Data
            wp_reset_postdata();
            ?>
            <div class="pagination">
                <?php echo paginate_links(); ?>
            </div>
        </div>

        <div class="right-column">
            <?php get_sidebar(); ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
