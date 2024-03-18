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
// functions.php
// function post_has_archive($args, $post_type)
// {
//   if ('post' == $post_type) {
//     $args['rewrite'] = true;
//     $args['has_archive'] = 'archive.php'; //URLとして使いたい文字列
//   }
//   return $args;
// };
// add_filter('register_post_type_args', 'post_has_archive', 10, 2);

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; // スラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
