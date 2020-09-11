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
register_nav_menu('header',__('header'));
}
function register_my_menu_footer() {
register_nav_menu('footer',__('footer'));
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

register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
) );


function capitaine_register_post_types() {
  // CPT Portfolio
    $labels = array(
        'name' => 'Portfolio',
        'all_items' => 'Tous les projets',  // affiché dans le sous menu sur WP
        'singular_name' => 'Projet',
        'add_new_item' => 'Ajouter un projet',
        'edit_item' => 'Modifier le projet',
        'menu_name' => 'Portfolio'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 20,
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'portfolio', $args );
}

function infos_custom_post_type() {
	$labels = array(
		'name'                => 'Informations',
		'singular_name'       => 'Informations',
		'menu_name'           => 'Informations',
		'all_items'           => 'Toutes les informations',
		'view_item'           => 'Voir les informations',
		'add_new_item'        => 'Ajouter une nouvelle info',
		'add_new'             => 'Ajouter',
		'edit_item'           => 'Editer l\' information',
		'update_item'         => 'Modifier l\' information',
		'search_items'        => 'Rechercher un information',
		'not_found'           => 'Non trouvée',
		'not_found_in_trash'  => 'Non trouvée dans la corbeille',
	);
	$args = array(
		'label'               => 'information',
		'description'         => 'Tous sur les évènements',
		'labels'              => $labels,
    'menu_icon'           => 'dashicons-info',
    'menu_position'       => 5,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			        => array( 'slug' => 'information'),
	);
	register_post_type( 'information', $args );
}


add_action('after_setup_theme','montheme_supports');
add_action('wp_enqueue_scripts','montheme_register_assets');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('document_title_separator', 'montheme_title_separator');
add_action( 'init', 'register_my_menu' );
add_action( 'init', 'register_my_menu_footer' );
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');
add_action( 'after_setup_theme', 'themename_custom_header_setup' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'init', 'capitaine_register_post_types' );
add_action( 'init', 'infos_custom_post_type' );

?>
