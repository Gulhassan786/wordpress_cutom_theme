<div class="wrapper">
    <?php get_header(); ?>
    <div class="custom-header">
        <img alt="" src="<?php header_image(); ?>">
    </div>
    <section class="content-area">
        <div class="left-column">
            <!-- Display posts directly in the index.php file -->
            <?php
            $query = new WP_Query( array( 'cat' => 9 ) );
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
