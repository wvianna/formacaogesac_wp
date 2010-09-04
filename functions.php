<?php

  // includes
  include_once(TEMPLATEPATH . '/global/inc/the_thumb.php');
  include_once(TEMPLATEPATH . '/global/inc/limit_chars.php');
  include_once(TEMPLATEPATH . '/global/inc/widget_destaque.php');
  include_once(TEMPLATEPATH . '/global/inc/widget_posts.php');
  include_once(TEMPLATEPATH . '/global/inc/widget_mundo_digital.php');
  include_once(TEMPLATEPATH . '/global/inc/widget_atividades.php');

   // Adiciona as funcionalidades do wordpress 3.0
  add_theme_support( 'nav-menus' );
  register_nav_menus( array(
      'primary' => __( 'Primary Navigation', 'formacaogesac' ),
  ) );

  if ( function_exists('register_sidebar') )
    register_sidebar(array('name' => "left-column-top"));
    register_sidebar(array('name' => "left-column-bottom"));
    register_sidebar(array('name' => "center-column-top"));
    register_sidebar(array('name' => "center-column-bottom"));
    register_sidebar(array('name' => "right-column1"));
    register_sidebar(array('name' => "right-column2"));
    register_sidebar(array('name' => "right-column3"));

  // Registra os scripts do tema
  function my_theme_scripts ()
  {
    wp_enqueue_script('jquery', '', '', '', true);
    wp_enqueue_script('jquery-ui-tabs', '', array('jquery'), '', true);
    wp_enqueue_script('global-functions', get_bloginfo('template_directory').'/global/js/global.js', array('jquery'), '', true);
  }
  add_action('wp_enqueue_scripts', 'my_theme_scripts');

?>

