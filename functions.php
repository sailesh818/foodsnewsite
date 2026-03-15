<?php
// Enqueue theme stylesheet
function iblog_custom_css() {
    wp_enqueue_style('iblog_main_css', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'iblog_custom_css');

// Register menus
function foodsrecipes_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'foods-recipes'),
    ));
}
add_action('after_setup_theme', 'foodsrecipes_register_menus');
?>