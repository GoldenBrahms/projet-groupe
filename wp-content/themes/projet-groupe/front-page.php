<?php 
/* Template Name: Custom Login Page*/
global $wpdb;

if ($_POST) {
    $username = $wpdb->escape($_POST['user']);
    $password = $wpdb->escape($_POST['password']);
    //echo '<h2 class="hello"> Hello World !!</h2>';
    if (empty($username) || empty($password)) {
        echo '<p>please enter username</p>';
    } 
    $login_array = array();
    $login_array['user_login'] = $username;
    $login_array['user_password'] = $password;

    $verify_user = wp_signon($login_array, false);
    if (is_wp_error($verify_user) ) {
        echo '<h1>user doesnt exist</h1>';
    } else {
        echo "<script>window.location = '" .site_url("/tableau-de-bord")."'</script>";
    }
}


?>
<?php
 if (!is_user_logged_in( )) :?>
<div class="login">
<div id="left_login" class="left_login">
    <div class="gestion">
        <h1>GESTION</h1>
        <h1>ADMINISTRATIVE</h1>
        <h1>DE L'ACTIVITÉ</h1>
        <h1>FORMATION</h1>
    </div>
</div>
<form method="post" class="right_login">
<style type="text/css">
           
        </style>
        <div class="right-login-elements">
            <input type="text" name="user" id="user" placeholder="identifiant"/>
            <input type="password" name="password" id="password" class="password" placeholder="mot de passe"/>
            <input class="connexion" type="submit" value="CONNEXION"></input>
        <div>
</form>
</div>

<?php else :?>
<?php get_header('cdf')?>
    <?php global $current_user; wp_get_current_user(); ?>
<?php if ( is_user_logged_in() ) { 
 echo 'Bonjour ' . $current_user->user_login . "\n";} 
else { wp_loginout(); } ?>
<?php endif ?>