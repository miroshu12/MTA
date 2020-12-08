<?php
add_action( 'after_setup_theme', 'tomasz_setup' );
function tomasz_setup() {
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'Tomasz' ) ) );
}
add_action( 'wp_enqueue_scripts', 'tomasz_load_scripts' );
function tomasz_load_scripts() {
wp_enqueue_style( 'tomasz-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}

add_action( 'widgets_init', 'tomasz_widgets_init' );
function tomasz_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'Tomasz' ),
'id' => 'primary-widget-area-one',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
    
    register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'Tomasz' ),
'id' => 'primary-widget-area-two',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}




