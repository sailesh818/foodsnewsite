<?php get_header(); ?>
        <!-- the loop -->
        <?php while (have_posts()){
            the_post(); ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><?php the_excerpt(); ?></p>
            <p><?php the_time('F jS, Y') ?> by <?php the_author() ?> </p>
            <a href="<?php the_permalink(); ?>">Read more</a>
        <?php } ?>

<?php get_footer(); ?>