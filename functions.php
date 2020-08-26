<?php


function montheme_supports () {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
}

function montheme_register_assets () {
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css', []);
  wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', ['popper'], false, true);
  wp_register_script('popper','https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js', [], false, true);
  wp_enqueue_style('bootstrap');
  wp_enqueue_script('bootstrap');
  wp_enqueue_style('style', get_stylesheet_uri());
}

function montheme_document_title_parts($title) {
  unset($title['tagline']);
  return $title;
}

function montheme_title_separator(){
  return '|';
}

function register_my_menu() {
register_nav_menu('header',__('Header Menu'));
}

function montheme_menu_class($classes){
  $classes[] = 'nav-item';
  return $classes;
}

function montheme_menu_link_class($attrs){
  $attrs['class'] = 'nav-link';
  return $attrs;
}

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/images/bg.jpg',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
// function page_custom_page_setup() {
//     $page = array(
//         'default-image'      => get_template_directory_uri() . '/images/bg2.jpg',
//         'width'              => 1000,
//         'height'             => 250,
//         'flex-width'         => true,
//         'flex-height'        => true,
//     );
//     add_theme_support( 'custom-page', $page );
// }

function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 16,
 'width'       => 16,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}


add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts','montheme_register_assets');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('document_title_separator', 'montheme_title_separator');
add_action( 'init', 'register_my_menu' );
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>
