<?php

function customtheme_theme_support(){
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','customtheme_theme_support');

function customtheme_menus(){

    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init','customtheme_menus');


function customtheme_register_styles() {

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('customtheme-style', get_template_directory_uri() . "/style.css", array('customtheme-bootstrap'), $version, 'all');
    wp_enqueue_style('customtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('customtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts','customtheme_register_styles');

function customtheme_register_scripts() {
    
    $version = wp_get_theme()->get('Version');
    wp_enqueue_script('customtheme-jqeury', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('customtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo', array(), '1.16.0', true);
    wp_enqueue_script('customtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6', array(), '4.4.1', true);
    wp_enqueue_script('customtheme-main', get_template_directory_uri() . "./assets/js/main.js", array(), $version, 'all');
   
    
}

add_action('wp_enqueue_scripts','customtheme_register_scripts');

// function customtheme_widget_areas(){

//     register_sidebar(
//         array(
//             'before_title'=>'<h2>',
//             'after_title'=>'</h2>',
//             'before_widget'=>'',
//             'after_widget'=>''
//         ),
//         array(
//             'name'=>'Sidebar Area',
//             'id' => 'sidebar-1',
//             'description'=>'Sidebar Widget Area'
//         )
//     );
// }

// add_action('widgets_init', 'customtheme_widget_areas');

?>