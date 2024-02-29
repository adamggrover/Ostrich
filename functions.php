<?php

function ostrich_register_styles(){

    $version = wp_get_theme() ->get ('Version');

    wp_enqueue_style('ostrich', get_template_directory_uri().'/dist/index.css', array(), $version);
    wp_enqueue_style('slick', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css", array(), '1.8.1');

    

}

add_action('wp_enqueue_scripts', 'ostrich_register_styles');


// Register scripts

function ostrich_register_scripts(){

    $version = wp_get_theme() ->get ('Version');

    wp_enqueue_script('ostrich-main', get_template_directory_uri().'/dist/index.js', array(), $version, true);
    wp_enqueue_script('ostrich-slick-js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), '1.8.1', true);
    wp_enqueue_script('jquery', "//code.jquery.com/jquery-migrate-1.2.1.min.js", array(), '1.8.1', true);
    wp_enqueue_script('jquery', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), '1.8.1', true);

    

    

}

add_action('wp_enqueue_scripts', 'ostrich_register_scripts');

// Theme Support

function ostrich_theme_support(){

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'ostrich_theme_support');

//Add Menu Locations

function ostrich_menus(){

    $locations = array(
        'header' => 'Header',  
        'footer' => 'Footer'
    );

    register_nav_menus($locations);
}

add_action('init', 'ostrich_menus');


