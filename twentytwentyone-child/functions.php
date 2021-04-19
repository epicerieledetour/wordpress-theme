<?php // Opening PHP tag - nothing should be before this, not even whitespace

function ldt_wp_head() {
	// Mailchimp connection check
	// echo '<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/370004ca29680d140f5c7683f/c59730efdde6f940e0669bd48.js");</script>' . "\n";
}
add_action( 'wp_head', 'ldt_wp_head' );

function ldt_setup() {

	// Editor color palette.
  // See style.css for color definition

	$black     = '#000000';
	$gray      = '#666666';
  $lightgray = '#EAEAE3';
	$green     = '#CEDF39';
	$blue      = '#81D3CC';
  $orange    = '#FFA131';
  $yellow    = '#FFED72';
	$red       = '#FF6462';
	$white     = '#F8F8F8';

  add_theme_support(
    'editor-color-palette',
    array(
      array(
        'name'  => esc_html__( 'Black', 'twentytwentyone' ),
        'slug'  => 'black',
        'color' => $black,
      ),
      array(
        'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
        'slug'  => 'gray',
        'color' => $gray,
      ),
      array(
        'name'  => esc_html__( 'Light Gray', 'twentytwentyone' ),
        'slug'  => 'light-gray',
        'color' => $lightgray,
      ),
      array(
        'name'  => esc_html__( 'Green', 'twentytwentyone' ),
        'slug'  => 'green',
        'color' => $green,
      ),
      array(
        'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
        'slug'  => 'blue',
        'color' => $blue,
      ),
      array(
        'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
        'slug'  => 'orange',
        'color' => $orange,
      ),
      array(
        'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
        'slug'  => 'yellow',
        'color' => $yellow,
      ),
      array(
        'name'  => esc_html__( 'Red', 'twentytwentyone' ),
        'slug'  => 'red',
        'color' => $red,
      ),
      array(
        'name'  => esc_html__( 'White', 'twentytwentyone' ),
        'slug'  => 'white',
        'color' => $white,
      ),
    )
  );
}

function ldt_enqueue_styles() {

	// enqueue parent styles
	// https://codex.wordpress.org/Function_Reference/wp_enqueue_style
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media )
	// wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');

	// enqueue child styles
	// wp_enqueue_style('ldt-theme', get_stylesheet_uri(), array('twenty-twenty-one-style'), wg_get_theme->get('Version'));
  // wp_enqueue_style('ldt-theme', get_stylesheet_directory_uri() .'/style.css', array('twenty-twenty-one-style'));
  wp_enqueue_style('ldt-theme', get_stylesheet_uri(), array('twenty-twenty-one-style'));
}
add_action('wp_enqueue_scripts', 'ldt_enqueue_styles');
add_action('after_setup_theme', 'ldt_setup', 100);
