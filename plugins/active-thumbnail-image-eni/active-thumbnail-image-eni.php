<?php

/**
* Plugin Name: ENI active Image en avant
* Plugin URI:
* Description: Active les images mise en avant sur les articles
* Version: 1.0
* Author: Seven Valley
* Author URI:
* Text Domain: active-image-avant-eni
**/
function postThumbnail()
{
    // active les images mises en avant dans Article (Post)
   add_theme_support('post-thumbnails');
}
// le crochet : le hook
add_action('after_setup_theme','postThumbnail');