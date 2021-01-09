<?php

/**
 * Log-in the User
 *
 * This function accepts various parameters that are used for checking whether the user exists or not.
 *
 * @since 1.0.0
 *
 * @param int $user_id The ID of the user.
 * @param string $user_login The users username/email.
 * @param string $user_pass Password of the user.
 * @param boolean $user_remember Whether to remember the user credentials or not.
 *
 * @return void Return early if the user doesn't exist.
 * @author WebsiteGuider
 **/

 function custom_log_userin($user_id, $user_login, $user_pass) {
     if (! absint( $user_id ) || $user_id < 1 ) {
         return ;
     }

     wp_set_auth_cookie( $user_id);
     wp_set_current_user( $user_id, $user_login )
 }