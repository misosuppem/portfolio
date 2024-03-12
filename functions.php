<?php
function my_scripts_method()
{
  wp_enqueue_script(
    'custom_script',
    get_template_directory_uri() . '../main.js',
  );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

/**
 *<title>タグを出力する
 **/
add_theme_support('title-tag');
/**
 * アイキャッチ画像を使用可能にする。
 */
add_theme_support('post-thumbnails');
