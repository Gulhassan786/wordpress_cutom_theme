<div class="wrapper">
    <?php get_header(); ?>
    <div class="custom-header">
        <img alt="" src="<?php header_image(); ?>">
    </div>

    <section class="content-area">
        <div class="left-column">
            <!-- Category Sections Start -->
            
            <?php
            // Define an array of category slugs
            $categories = array(
                'events' => 'Events',
                'foot-wear' => 'Foot Wear',
                'games' => 'Games',
                'product' => 'Product',
                'shirts' => 'Shirts',
                'windows' => 'Windows'
            );
            
            foreach ($categories as $slug => $name) : ?>
                <div class="category-section">
                    <h2><?php echo $name; ?></h2>

                    <?php
                    // Set up the paginated query for each category
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'category_name' => $slug, // Filter by category slug
                        'posts_per_page' => 2, // Number of posts per page (adjust as necessary)
                        'paged' => $paged
                    );
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="post">
                                <div class="post-heading">
                                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                                </div>
                                <div class="post-description">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="signature">
                                    <b>Author: </b><?php the_author(); ?><br>
                                    <b>Time: </b><?php the_time(); ?><br>
                                    <b>Date: </b><?php the_date(); ?><br>
                                </div>
                            </div>
                        <?php endwhile; ?>

                        <!-- Pagination for the current category -->
                        <div class="pagination">
                            <?php
                            echo paginate_links(array(
                                'total' => $query->max_num_pages,
                                'current' => $paged,
                            ));
                            ?>
                        </div>

                    <?php else : ?>
                        <p>No posts found in <?php echo $name; ?> category.</p>
                    <?php endif;

                    // Reset post data after each category
                    wp_reset_postdata();
                    ?>
                </div>
            <?php endforeach; ?>
            <!-- Category Sections End -->
        </div>

        <div class="right-column">
            <?php get_sidebar(); ?>
        </div>
    </section>

</div>
<?php get_footer(); ?>
