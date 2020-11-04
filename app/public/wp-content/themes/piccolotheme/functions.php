<?php
/* My style */
add_action('wp_enqueue_scripts', 'my_styles');
function my_styles () {
  wp_enqueue_style( 'my_style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('open-sans-font','https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap');
  wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css');
  wp_enqueue_style( 'swiper_min', 'https://unpkg.com/swiper/swiper-bundle.min.css');
  wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
}
/* My js */
add_action('wp_enqueue_scripts', 'my_scripts');
function my_scripts() {  
  wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, true);
  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false, null,'true');
  wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js', false, null,'true');
  wp_enqueue_script('swiper_min_js', 'https://unpkg.com/swiper/swiper-bundle.min.js', null, null, true);
  wp_enqueue_script('slider-bandi', get_stylesheet_directory_uri() . '/javascript/homepage-slider.js', false, true);
  wp_enqueue_script('menu', get_stylesheet_directory_uri() . '/javascript/menu.js', false, true);
}