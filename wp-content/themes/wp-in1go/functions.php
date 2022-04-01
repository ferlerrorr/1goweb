<?php
@ini_set( 'upload_max_size' , '1000M' );
@ini_set( 'post_max_size', '100M');
@ini_set( 'max_execution_time', '300' );

//!remove jquery migrate
// function remove_jquery_migrate($scripts)
// {
//     if (!is_admin() && isset($scripts->registered['jquery'])) {
//         $script = $scripts->registered['jquery'];
//         if ($script->deps) { // Check whether the script has any dependencies
//             $script->deps = array_diff($script->deps, array(
//                 'jquery-migrate'
//             ));
//         }
//     }
// }
// add_action('wp_default_scripts', 'remove_jquery_migrate');

// function modify_jquery_version() {
//     if (!is_admin()) {
//         wp_deregister_script('jquery');
//         wp_register_script('jquery',
// 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '2.0.s');
//         wp_enqueue_script('jquery');
//     }
// }
// add_action('init', 'modify_jquery_version');


//! remove wp version number from scripts and styles
function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );

//! For Local Dev Environment only

// ?EnQue - Dependencies
// !Add Css
function fj_addstyle(){
  wp_enqueue_style('style',get_template_directory_uri()."/style.min.css");
}
 add_action('wp_enqueue_scripts','fj_addstyle');
//!Add Scripts
function fj_addscripts(){
  wp_enqueue_script('scripts',get_template_directory_uri()."/js/mainjs.js");
}
 add_action('wp_enqueue_scripts','fj_addscripts');
 //?EnQue - Dependencies
// Post Thumbnails
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
// Post Thumbnails
// Support for custom Logo
add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
$defaults = array(
'height'      => 100,
'width'       => 400,
'flex-height' => true,
'flex-width'  => true,
'header-text' => array( 'site-title', 'site-description' ),
);
add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
// Support for custom Logo

// Comment Reply Fix
function load_script_for_fake_threading() {
	if (is_singular()) wp_enqueue_script('comment-reply');
  }
  add_action('wp_enqueue_scripts','load_script_for_fake_threading');
// Comment Reply Fix
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');




























