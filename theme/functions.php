<?php

// Incluir styles y scripts
function add_theme_scripts()
{
  wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// Registrar menu
function register_menu()
{
  register_nav_menu('menu-cabecera', __('Menu cabecera'));
}
add_action('init', 'register_menu');

// Registrar imagen destacada
add_theme_support('post-thumbnails');

add_theme_support('custom-header', array(
  'flex-width'    => true,
  'width'         => 1728,
  'flex-height'   => true,
  'height'        => 400,
  'default-image' => 'http://dummyimage.com/1728x400/000/fff',
));

add_theme_support('custom-logo', array(
  'height'      => 64,
  'width'       => 128,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array('site-title', 'site-description'),
));
