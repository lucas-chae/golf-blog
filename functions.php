<?php 

function theme_add_style() {
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js');
}

add_action('wp_enqueue_scripts', 'theme_add_style');


function mytheme_enqueue_style() {
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_style');




//Navigation Menus

register_nav_menus(array(
    
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
    
));



?>


