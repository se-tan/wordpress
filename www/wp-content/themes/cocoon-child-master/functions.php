<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

/* ====================================
 * パスワード保護に関する設定 
 * ==================================== */

// パスワード保護ページの「保護中:」を消す
add_filter('protected_title_format', 'remove_protected');
function remove_protected($title) { return '%s'; }

// Cookieを削除して毎回パスワード要求
add_action('after_setup_theme', 'my_after_setup_theme' );
function my_after_setup_theme() { setcookie('wp-postpass_' . COOKIEHASH, $_POST['post_password'], 0, COOKIEPATH); };

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く