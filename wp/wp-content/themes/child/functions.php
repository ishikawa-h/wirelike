<?php

function create_post_type() {

  /* お知らせ */
  register_post_type( 'info',
    array(
      'labels' => array(
        'name' => 'お知らせ',
        'all_items' => 'お知らせ一覧',
        'singular_name' => 'お知らせ',
      ),
      'public' => true,
      'menu_position' => 6,
      'supports' => array(),
      'has_archive' => false,
    )
  );
}

add_action( 'init', 'create_post_type' );
