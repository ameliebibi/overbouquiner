<?php
//Ne JAMAIS fermer la balise !!

//Ajouter des images à la une ("thumbnail")
add_theme_support ("post-thumbnails");

//Ajouter un lien en dessou des excerpt un lien "read more"

function excerpt_read_more_link($output) {
  global $post;
  return $output . '<a href="'. get_permalink($post->ID) . '"> Read more...</a>';
}
add_filter('the_excerpt', 'excerpt_read_more_link');

function register_my_menus() {
  register_nav_menus (
    array(
      'primary-nav' => 'primary menu',
      'secondary-nav' => 'secondary menu',
    )
  );
}

require_once('wp_bootstrap_navwalker.php');
add_action("init","register_my_menus");

if ( function_exists('register_sidebar') ) {
  register_sidebar(array(
    'name' => 'Main Sidebar',
    'id' => 'main-sidebar',
    'description' => 'Displayed in my home',//apparaît ds l'interface admin
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="section">',
    'after_title' => '</h4>',
  ));
}