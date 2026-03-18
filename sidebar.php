<div class="category-page">
    <h1><?php single_cat_title(); ?></h1>
    <div class="post-grid">
        <?php
        // Query the posts (you can customize the query if needed)
        $args = array(
            'posts_per_page' => 5, // Number of posts to display
            'post_type' => 'post', // Only display posts
        );
        $recent_posts = new WP_Query($args);
        
        if ($recent_posts->have_posts()) :
            while ($recent_posts->have_posts()) : $recent_posts->the_post();
        ?>

        <div class="posts-card">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <h3 class="post-title">
                    <?php the_title(); ?>
                </h3>
            </a>
        </div>

        <?php endwhile; ?>
        </div>
        
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; wp_reset_postdata(); ?>
</div>