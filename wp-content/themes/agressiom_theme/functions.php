<?php

add_action( 'wp_enqueue_scripts', 'true_enqueue_js_and_css' );

function true_enqueue_js_and_css() {

    // CSS
    wp_enqueue_style(
        'style_css', // идентификатор стиля
        get_stylesheet_directory_uri() . '/css/style.css',  // URL стиля
        array(), // без зависимостей
        '1.0'
    );

    // JavaScript
    wp_enqueue_script(
        'scripts_js', // идентификатор скрипта
        get_stylesheet_directory_uri() . '/js/scripts.js', // URL скрипта
        array( 'jquery' ), // зависимости от других скриптов
        time(), // версия каждую секунду разная, чтоб не кэшировать во время разработки
        true // true - в футере, false – в хедере
    );

}

add_theme_support( 'menus' );
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 200,
    'flex-height' => true, // если гибкая высота.
    'flex-width'  => true, // если гибкая ширина.
    'header-text' => array( 'site-title', 'site-description' ),
    'unlink-homepage-logo' => true, // убрать или оставить ссылку на главную ver. WP 5.5.
) );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support()
{
    add_theme_support('woocommerce');
}