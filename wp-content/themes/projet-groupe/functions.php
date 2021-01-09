<?php 

function add_theme_style() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    
}
add_action('wp-enqueue-style', 'add_theme_style');

function dire_bonjour(){
	echo '<h2 class="hello"> Hello World !!</h2>';
}
add_action( 'bonjour', 'dire_bonjour');

function process_custom_login_form() {
 // Validate the username or email field before submitting
 if ( isset($_POST['custom_user'])) {
    $custom_user =  trim($_POST['custom_user']);
    echo '<h2 class="hello"> Hello World !!</h2>';
}
}

add_action("login", 'process_custom_login_form');

