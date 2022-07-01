<?php

// ------------------------------------------------ 
// 1 – Les Constantes 
// ------------------------------------------------
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMG', THEMEROOT . '/img');
define('JS', THEMEROOT . '/js');
define('CSS', THEMEROOT . '/css');

function my_theme_setup()
{
    // active les images mises en avant dans Article (Post)
    //    add_theme_support('post-thumbnails');
    register_nav_menus([
        // 'identifiant' => 'Nom dans le backoffice Wordpress',
        'menu-haut' => 'Menu en haut',
        'menu-bas' => 'Menu en bas'
    ]);
}

add_action('after_setup_theme', 'my_theme_setup');

// ------------------------------------------------
//-------------------------------------------------------
// 3 . Ajouter les class css au menu Bootstrap 5 
//-------------------------------------------------------
// <ul><li><a class="nav-link"
// <ul><li><a class="nav-link active" si page courante

function my_filter_a($attributes)
{
    $attributes["class"] = "nav-link";
    if ($attributes["aria-current"]) {
        $attributes["class"] = "nav-link active";
    }
    return $attributes;
}

add_filter('nav_menu_link_attributes', 'my_filter_a');
//-------------------------------------------------------

