<?php

function university_files(){
    wp_enqueue_script('amzing-university-js', get_theme_file_uri('/build/index.js'), null, '1.0', true);
    wp_enqueue_style('custom-fonts-google', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main-styles-vendor', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('our_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('university_style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'university_files');

function university_features(){

    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features')
?>
