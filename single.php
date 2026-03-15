<!-- include header -->
<?php get_header(); ?>

        <!-- the loop -->
        <?php while (have_posts()){
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        <?php } ?>

<!-- include footer -->
<?php get_footer(); ?>