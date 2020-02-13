<?php

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

add_action( 'wp_enqueue_scripts', 'exam_enqueue_styles' );
function exam_enqueue_styles() {

  wp_enqueue_style('exam_styles', get_template_directory_uri().'/css/styles.css');
  wp_enqueue_style('exam_styles_min', get_template_directory_uri().'/css/bootstrap.min.css');

}