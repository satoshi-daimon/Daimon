<?php

// カテゴリーボタン表示関数
function get_post_categories_list() {
  $categories = get_the_category();
  $category_list = '';
  if (!empty($categories)) {
      $category_list .= '<ul>';
      foreach ($categories as $category) {
          $category_list .= '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
      }
      $category_list .= '</ul>';
  }
  return $category_list;
}

// aタグ無効化
function my_comment_tag_disable($data) {
	global $allowedtags;
	$allowedtags = array();
	return $data;
}
add_filter('preprocess_comment', 'my_comment_tag_disable');
remove_filter('comment_text', 'make_clickable', 9);

// 広告用関数
function show_advertisement_sidebar_00(){
  $ads = array(
    '<p>広告です</p> ',
   );
  $random_ad = $ads[array_rand($ads)];
  return $random_ad;  
};

// 広告用関数
function show_advertisement_sidebar_01(){
  $ads = array(
    '<p>広告です</p> ',
   );
  $random_ad = $ads[array_rand($ads)];
  return $random_ad;  
};

// 広告用関数
function show_advertisement_sidebar_02(){
  $ads = array(
    '<p>広告です</p> ',
  );
  $random_ad = $ads[array_rand($ads)];
  return $random_ad;  
};
