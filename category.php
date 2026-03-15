<?php get_header(); ?>

<div class="category-page">
    <h1><?php single_cat_title(); ?></h1>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post-item">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>
                <p><?php the_time('F jS, Y') ?> by <?php the_author(); ?></p>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </div>
        <?php endwhile; ?>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'total' => $wp_query->max_num_pages
            ));
            ?>
        </div>

    <?php else : ?>
        <p>No posts found in this category.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>