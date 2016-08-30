<?php

function wp_enqueue_styles() {
  wp_enqueue_style('bootstrap-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_enqueue_style('main', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', 'wp_enqueue_styles');
