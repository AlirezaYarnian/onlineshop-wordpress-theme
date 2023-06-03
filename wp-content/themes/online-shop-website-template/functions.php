<?php
function add_theme_script(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('carousel' , get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
    wp_enqueue_style('googleFont' , get_template_directory_uri() . '/fonts/googlefonts.css');
    wp_enqueue_style('gstaticFont', get_template_directory_uri() . 'https://fonts.gstatic.com');
    /*favIcon*/
    wp_enqueue_style('favIcon', get_template_directory_uri() . '/img/favicon.ico');
    /*JS scripts*/
    wp_enqueue_script('JS', get_template_directory_uri() . '/js/jQuery-3.4.1.min.js', array(), false, true);
    wp_enqueue_script('bootstrap.bundle', get_template_directory_uri(). '/js/bootstrap.bundle.js', array(), false, true);
    wp_enqueue_script('easing.min', get_template_directory_uri() . '/lib/easing/easing.min.js', array(), false, true);
    wp_enqueue_script('owl.carousel-js', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', array('jQuery'), false , true);
    /*Contact javascript file*/
    wp_enqueue_script('jqBootstrapValidation.min', get_template_directory_uri() . '/mail/jqBootstrapValidation.min.js', array(), false, true);
    wp_enqueue_script('contact', get_template_directory_uri() . '/mail/contact.js', array(), false , true);
    /*Template Javascript*/
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), false, true);
}

add_action('wp_enqueue_scripts','add_theme_script');

function onlineShop_setup_theme(){
add_theme_support('title-tag');
add_theme_support('atomatic-feed-links');
/*menu section*/
    register_nav_menus(array(
            'main-menu' =>__('main menu items'),
            'mobile-menu'=> __('mobile menu items'),
            'top-menu'=> __('top menu items')
        )
    );
}
add_action('after_setup_theme', 'onlineShop_setup_theme');
