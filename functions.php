<?php

//Lier la feuille de style et les fonts au projet

function simplenews_enqueue_styles(){

    wp_enqueue_style('latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap');

    wp_enqueue_style('merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');

    wp_enqueue_style('maincss', get_template_directory_uri() . '/styles/main.css', array('latofont','merrifont') );
}
add_action('wp_enqueue_scripts', 'simplenews_enqueue_styles');

//Support de thème
function simplenews_add_theme_support(){

    add_theme_support('post-thumbnails'); //Ajoute les thumbnails dans le theme

    add_theme_support('title-tag'); //change le title de l'onglet 
}
add_action('after_setup_theme', 'simplenews_add_theme_support');

//Déclarer les menu de navigation
function simplenews_register_menus(){

    register_nav_menus(array(
        'main-menu' => __('Menu principal') //Localisation __ 
    ));

}
add_action('after_setup_theme', 'simplenews_register_menus');

//Widgets
function simplenew_widgets_init($id){

    register_sidebar(array(
        'name' => 'Widget 1', 
        'id' => 'widget-1',
        'description' => 'Widget affiché en haut du sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => 'Widget 2', 
        'id' => 'widget-2',
        'description' => 'Widget affiché en dessous du sidebar',
        'before_widget' => '<div class="side-widget">',
        'after_widget' => '</div>'
    ));
    
}
add_action('widgets_init', 'simplenew_widgets_init');

?>