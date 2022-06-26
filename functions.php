<?php
//どのテーマでも共通で読み込む↓
// アイキャッチを設定
add_theme_support('post-thumbnails');

//jQueryを読み込むようにする（ログアウトの際にjQueryをよみこまなくなるのを防止）
function theme_style(){
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_style');
//どのテーマでも共通で読み込む ここまで