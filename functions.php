<?php

include dirname( __FILE__) . ('/includes/class-mp3.php');

function imas_start_session() 
{
  if(!session_id()) {
      session_start();
  }
}
add_theme_support( 'post-thumbnails' );

function admin_bar()
{
  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );

function theme_scripts() 
{
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
	wp_enqueue_script('jquery-min', get_template_directory_uri().'/assets/js/jquery.min.js', array ('jquery'), '', false);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '', false );
  wp_enqueue_script('radio', get_template_directory_uri().'/assets/js/radio.js', array(), '', false );
}
add_action('wp_enqueue_scripts', 'theme_scripts');

register_nav_menus(array(
  'menu_imas'   => 'Menu iM@S',
));

function wrap_menu_imas() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'
  
  // open the <ul>, set 'menu_class' and 'menu_id' values
  $wrap  = '<ul id="%1$s" class="%2$s nav navbar-nav">';
  
  // get nav items as configured in /wp-admin/
  $wrap .= '%3$s';
  
  // close the <ul>
  $wrap .= '</ul>';
  // return the result
  return $wrap;
}

/* RADIO FUNCTIONS */

function get_radio_singer()
{
  $radio_singer = htmlspecialchars_decode('<span id="singer">Singer is loading ....</span>');
  return $radio_singer;
}
add_shortcode('radio_singer', 'get_radio_singer');

function get_radio_title()
{
  $radio_title = htmlspecialchars_decode('<span id="song">Song is loading ....</span>');
  return $radio_title;
}
add_shortcode('radio_title', 'get_radio_title');

function get_radio_listener()
{
  $radio_listener = htmlspecialchars_decode('<span id="listener">Listener is loading ....</span>');
  return $radio_listener;
}
add_shortcode('radio_listener', 'get_radio_listener');

function get_radio_bitrate()
{
  $radio_bitrate = htmlspecialchars_decode('<span id="bitrate">Bitrate is loading ....</span>');
  return $radio_bitrate;
}
add_shortcode('radio_bitrate', 'get_radio_bitrate');

function get_radio_image()
{
  $radio_image = '<span id="idol-image">Image is loading ....</span>';
  return $radio_image;
}
add_shortcode('radio_image', 'get_radio_image');

function get_radio_url()
{
  $radio_url = htmlspecialchars_decode('<span id="urlk>URL is loading ....</span>');
  return $radio_url;
}
add_shortcode('radio_url', 'get_radio_url');