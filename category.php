<?php get_header(); ?>
<div class="category-page">
    <h1><?php single_cat_title(); ?></h1>
    <div class="posts-grid">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <div class="post-card">
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
    <?php endif; ?>

</div>

<?php get_footer(); ?>