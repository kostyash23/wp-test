<?php
function my_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'main-menu', 'Main Menu' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );
?>
<?php
function my_theme_enqueue_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/styles.css' );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
?>