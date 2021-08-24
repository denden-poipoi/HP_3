
<?php

// カスタムメニュー機能
add_theme_support('menus');

?>

<?php

// functions.php
// 管理画面で、アイキャッチ画像を投稿できるようにする
// サムネイル機能の有効化
add_theme_support('post-thumbnails');

?>


<?php

//デフォルトのアーカイブページ準備
function post_has_archive($args, $post_type){ //パーマリンクの更新必要
  if('post' == $post_type){
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';//デフォルトもアーカイブを作れるようにする
    $args['label'] = 'blog';  //管理画面の名前変更
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10,2);



//各アーカイブページで何件表示させるか？
function column_posts($query){
  if(is_admin() ||!$query->is_main_query()){
    return;
  }

//デフォルト投稿ページの表示件数
    if($query->is_archive()){
      $query->set('posts_per_page','1');
      return;
    }
}
add_action('pre_get_posts', 'column_posts');


?>