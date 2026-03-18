<!-- include header -->
<?php get_header(); ?>

<div class="content-container">
    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Loop through all categories -->
        <?php
        // Get all categories
        $categories = get_categories();
        
        foreach ($categories as $category) :
            ?>
            <div class="category-page">
                <!-- Display the category name -->
                <h1><?php echo esc_html($category->name); ?></h1>
                
                <div class="post-grid">
                    <?php
                    // Query the posts for this category
                    $args = array(
                        'posts_per_page' => 5, // Number of posts to display
                        'post_type' => 'post', // Only display posts
                        'cat' => $category->term_id, // Filter by current category
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
                        <p>No posts found in this category.</p>
                    <?php endif; wp_reset_postdata(); ?>
            </div>
            <?php endforeach; ?>
    </div>

    <!-- Sidebar Area -->
    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<!-- include footer -->
<?php get_footer(); ?>