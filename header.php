<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<body>
  <div id="visual-portal-wrapper">
    <div id="divHeaderBrasil">
      <ul>
        <li class="logo">
          <img src="<?php bloginfo('template_url');?>/imgs/comunicacoes_logo.png" alt="Comunicações - Ministério das Comunicações" title="Comunicações - Ministério das Comunicações" class="comunicacoes">
        </li>
        <li class="brasil">
          <!-- <img src="++resource++gesac.theme.images/imgLogoBrasil.gif" alt="Brasil - Um País de todos" title="Brasil - Um País de todos" height="35" width="105"> -->
        </li>
      </ul>
    </div>
  <div id="header">
    <h1 class="logo">
      <a href="<?php bloginfo('url')?>"><?php bloginfo('title')?></a>
    </h1>
    <ul id="topMenu">
      <li><a href="#">Apresentação</a></li>
      <li><a href="#">Link 2</a></li>
      <li><a href="#">Link 3 dolor sit amet</a></li>
      <li><a href="#">Link 4 lorem ipsum</a></li>
      <li><a href="#">Calendário formação</a></li>
    </ul>

    <form id="searchForm" action="#" method="post">
      <input type="text" name="q" />
      <input type="button" value="buscar" />
    </form>
  </div>
