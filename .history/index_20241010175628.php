<div class="wrapper">
    <?php get_header(); ?>

    <div class="custom-header">
        <img alt="" src="<?php header_image(); ?>">
    </div>

    <section class="content-area">
        <div class="left-column">
            <!-- Category: Events -->
            <h2 class="category-heading">Events</h2>
            <?php
            $events_query = new WP_Query( array( 'category_name' => 'events' ) );
            if ( $events_query->have_posts() ) :
                while ( $events_query->have_posts() ) : $events_query->the_post(); ?>
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
            wp_reset_postdata();
            ?>

            <!-- Category: Foot Wear -->
            <h2 class="category-heading">Foot Wear</h2>
            <?php
            $footwear_query = new WP_Query( array( 'category_name' => 'foot-wear' ) );
            if ( $footwear_query->have_posts() ) :
                while ( $footwear_query->have_posts() ) : $footwear_query->the_post(); ?>
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
            wp_reset_postdata();
            ?>

            <!-- Category: Games -->
            <h2 class="category-heading">Games</h2>
            <?php
            $games_query = new WP_Query( array( 'category_name' => 'games' ) );
            if ( $games_query->have_posts() ) :
                while ( $games_query->have_posts() ) : $games_query->the_post(); ?>
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
            wp_reset_postdata();
            ?>

            <!-- Category: Products -->
            <h2 class="category-heading">Products</h2>
            <?php
            $products_query = new WP_Query( array( 'category_name' => 'product' ) );
            if ( $products_query->have_posts() ) :
                while ( $products_query->have_posts() ) : $products_query->the_post(); ?>
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
            wp_reset_postdata();
            ?>

            <!-- Category: Shirts -->
            <h2 class="category-heading">Shirts</h2>
            <?php
            $shirts_query = new WP_Query( array( 'category_name' => 'shirts' ) );
            if ( $shirts_query->have_posts() ) :
                while ( $shirts_query->have_posts() ) : $shirts_query->the_post(); ?>
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
            wp_reset_postdata();
            ?>

            <!-- Category: Windows -->
            <h2 class="category-heading">Windows</h2>
            <?php
            $windows_query = new WP_Query( array( 'category_name' => 'windows' ) );
            if ( $windows_query->have_posts() ) :
                while ( $windows_query->have_posts() ) : $windows_query->the_post(); ?>
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
