<?php

// ------------------------------------------------ 
// 1 – Les Constantes 
// ------------------------------------------------
define( 'THEMEROOT', get_stylesheet_directory_uri() ); 
define( 'IMG', THEMEROOT. '/img' ); 
define( 'JS', THEMEROOT. '/js' ); 
define( 'CSS', THEMEROOT. '/css' ); 

function my_theme_setup()
{
    // active les images mises en avant dans Article (Post)
//    add_theme_support('post-thumbnails');
}