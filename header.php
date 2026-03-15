<!doctype html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="site-header">
    <div class="header-row">
        <!-- LEFT SIDE: Logo + Text -->
        <div class="header-left">
            <img src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="Logo" class="logo">
            <div class="header-text">
                <span class="main-text"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></span>
            </div>
        </div>
        <!-- RIGHT SIDE: Login & Enquiry -->
        <div class="header-right">
            <a href="#" class="header-link">Login</a>
            <a href="#" class="header-link">Enquiry</a>
        </div>
    </div>
    <!-- // this website is here now -->
    <?php
wp_nav_menu(array(
    'theme_location' => 'primary-menu',
    'container' => 'div',
    'menu_class' => 'header-menu'
));
?>
</div>