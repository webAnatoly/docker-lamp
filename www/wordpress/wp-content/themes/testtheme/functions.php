<?php

function register_styles() {
  wp_register_style('myCss', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('myCss');
}

add_action( 'wp_enqueue_scripts', 'register_styles' );

function load_my_script() {
  // wp_deregister_script('mainJS'); это для отключения стандартной jquery идущей в комплекте с вордпесс
  wp_register_script('mainJS', get_template_directory_uri() . '/js/main.js');
  wp_enqueue_script('mainJS');
}

add_action( 'wp_enqueue_scripts', 'load_my_script' );