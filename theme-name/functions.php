<?php
add_action('init', 'define_constants');
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function define_constants()
{
    define('THEME', get_theme_file_uri());
    define('ASSETS', THEME . '/assets/');
    define('CSS', ASSETS . 'css/');
    define('JS', ASSETS . 'js/');
    define('IMG', ASSETS . 'img/');
    define('ICON', IMG . 'icons/');
    define('NODE_MODULES', THEME . '/node_modules/');
}

function enqueue_scripts()
{
    // CSS
    //wp_enqueue_style('theme', get_stylesheet_uri() , false, microtime());

    // JS
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.min.js', false, false, true);
    //wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', false, false, true);
    //wp_enqueue_script('bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', false, false, true);
    //wp_enqueue_script('aos-js', '//unpkg.com/aos@next/dist/aos.js', false, false, true);
    //wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', false, false, true);
    //wp_enqueue_script('jquery-mask', '//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js', false, false, true);
    //wp_enqueue_script('theme-script', JS . 'script.js', false, microtime(), true);
}
?>
