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
        <h2>Left Column</h2>
        <p>This is the content of the left column.</p>
                
    </div>
    
    <div class="right-column">
        <h2>Right Column</h2>
        <p>This is the content of the right column.</p>

        <?php get_sidebar() ?>
        <?php get_sidebar() ?>
    </div>
</section>


<?php 

get_footer();
?>