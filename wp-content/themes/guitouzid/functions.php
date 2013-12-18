<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

add_theme_support('menus');

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');