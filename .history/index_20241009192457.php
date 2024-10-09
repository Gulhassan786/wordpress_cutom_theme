<?php 

get_header();
?>

<!-- <?php include('assets\template-parts\home-feature.php'); ?>

<img src="<?php echo get_template_directory_uri();?>/assets/img/cat.jpg"; style="width:200px; height: 200px;" >

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
        <h1> <?php the_title(); ?> </h1>
        <p> <?php the_content(); ?>  </p>

        <?php
    endwhile;
endif;
?> -->

<section class="content-area">
    <div class="left-column">
        <?php include('page.php'); ?>
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    </div>
    
    <div class="right-column">
        <?php get_sidebar() ?>
    </div>
</section>


<?php 

get_footer();
?>