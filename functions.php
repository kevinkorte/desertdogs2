<?php

function jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, null);
  wp_enqueue_script('jquery');
}

if (!is_admin()) add_action('wp_enqueue_scripts', 'jquery_enqueue', 11);

function wp_dd_styles() {
  wp_enqueue_style('bootstrap-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
  wp_enqueue_style('main', get_template_directory_uri().'/style.css');
}
function wp_dd_scripts() {
  wp_enqueue_script('bootstrap-js-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, null, true);
  wp_enqueue_script('material-min-js', get_template_directory_uri().'/material.min.js', false, null, true);
  wp_enqueue_script('material-js', get_template_directory_uri().'/material-kit.js', false, null, true);
}

add_action('wp_enqueue_scripts', 'wp_dd_styles');
add_action('wp_enqueue_scripts', 'wp_dd_scripts');
