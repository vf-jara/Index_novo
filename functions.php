<?php
/**
 * Arquivo de Funções do Template IndexDC
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage IndexDC
 * @since 1.0
 * @version 1.0
 */


add_theme_support( 'post-thumbnails');

	
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

function index_css(){
    wp_register_style('index_style', get_template_directory_uri() . '/style.css',[],'1.0.0');
    wp_enqueue_style('index_style');
}
add_action('wp_enqueue_scripts', 'index_css');



function get_excerpt(){
    $excerpt = get_the_content();
    $excerpt = preg_replace(" ([.*?])",'',$excerpt);
    $excerpt = strip_shortcodes($excerpt);
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, 200);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt.'...';
    return $excerpt;
}

?>