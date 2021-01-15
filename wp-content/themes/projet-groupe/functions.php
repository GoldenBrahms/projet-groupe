<?php 

add_action('wp_enqueue_scripts', 'add_theme_style');
function add_theme_style() {

    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
}


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

