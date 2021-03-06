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

	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAhkv1LQ5o7adUjjGMXuxtdRS3f7-K7TyzWU5eJciWaP1eqQ0GbBQSaeH6FrxRWl-yYEIsA0DE2EsCaA" type="text/javascript"></script>

	<script type="text/javascript">
		//<![CDATA[

		var iconBlue = new GIcon(); 
		iconBlue.image = 'http://labs.google.com/ridefinder/images/mm_20_blue.png';
		iconBlue.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
		iconBlue.iconSize = new GSize(12, 20);
		iconBlue.shadowSize = new GSize(22, 20);
		iconBlue.iconAnchor = new GPoint(6, 20);
		iconBlue.infoWindowAnchor = new GPoint(5, 1);

		var iconRed = new GIcon(); 
		iconRed.image = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
		iconRed.shadow = 'http://labs.google.com/ridefinder/images/mm_20_shadow.png';
		iconRed.iconSize = new GSize(12, 20);
		iconRed.shadowSize = new GSize(22, 20);
		iconRed.iconAnchor = new GPoint(6, 20);
		iconRed.infoWindowAnchor = new GPoint(5, 1);

		var customIcons = [];
		customIcons["restaurant"] = iconBlue;
		customIcons["bar"] = iconRed;

		function load() {
			if (GBrowserIsCompatible()) {
				var map = new GMap2(document.getElementById("map"));
				map.addControl(new GSmallMapControl());
				map.addControl(new GMapTypeControl());
				map.setCenter(new GLatLng(-16.07694166666670, -48.50963888888890), 3);

				GDownloadUrl("<?php bloginfo('template_url');?>/phpsqlajax_genxml.php", function(data) {
					var xml = GXml.parse(data);
					var markers = xml.documentElement.getElementsByTagName("marker");
					for (var i = 0; i < markers.length; i++) {
						var name = markers[i].getAttribute("name");
						var address = markers[i].getAttribute("address");
						var type = markers[i].getAttribute("type");
						var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
						                        parseFloat(markers[i].getAttribute("lng")));
						var monitor = markers[i].getAttribute("monitor");
						var email = markers[i].getAttribute("email");
						var telefone = markers[i].getAttribute("telefone");
						var marker = createMarker(point, name, address, monitor, email, telefone, type);
						map.addOverlay(marker);
					}
				});
			}
		}

		function createMarker(point, name, address, monitor, email, telefone, type) {
			var marker = new GMarker(point, iconBlue);
			var html = "<b>" + name + "</b> <br/> ENDEREÇO DO PONTO: " + address + "<br/> TELEFONE DO PONTO: " + telefone + "<br/>  E-MAIL DO PONTO: " + email + "<br/> NOME DO MONITOR: " + monitor;
			GEvent.addListener(marker, 'click', function() {
				marker.openInfoWindowHtml(html);
			});
			return marker;
		}
		//]]>
	</script>


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
<link id="contraste" rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>
	<div id="headerbr">
		<div class="mclogo"><img src="<?php bloginfo('template_url');?>/imgs/comunicacoes_logo.png" alt="Comunicações - Ministério das Comunicações" title="Comunicações - Ministério das Comunicações" class="comunicacoes" /></div>
		<div class="brasillogo"><!-- <img src="++resource++gesac.theme.images/imgLogoBrasil.gif" alt="Brasil - Um País de todos" title="Brasil - Um País de todos" height="35" width="105"> --></div>
    </div>
	<div id="header">
	<div class="container_11">
    	<a href="<?php bloginfo('url')?>" id="logo"><img src="<?php bloginfo('template_url');?>/imgs/logo.png" alt="<?php bloginfo('title')?>" /></a>
		<div id="top_right">	
			<div id="subnav">
				<a href="<?php echo get_bloginfo('url').'/mapa-do-site'; ?>">Mapa do Site</a> | <a href="<?php echo get_bloginfo('url').'/fale-conosco'; ?>">Fale Conosco</a> | <a href="<?php echo get_bloginfo('url').'/feed'; ?>">RSS</a> <a href="<?php echo get_bloginfo('url').'/feed'; ?>"><img src="<?php bloginfo('template_url');?>/imgs/rss.png" alt="RSS" /></a>
			</div>
		    <!-- <form id="searchForm" action="#" method="post">
				<input type="text" name="q" />
				<input type="submit" value="Buscar" id="searchsubmit" />
			</form> -->
			<?php get_search_form(); ?>
			<div id="acessibilidade">
				<a href="#" id="aumenta_fonte"><img src="<?php bloginfo('template_url');?>/imgs/icon_a-mais.gif" alt="Aumentar letra" /></a>
				<a href="#" id="normaliza_fonte"><img src="<?php bloginfo('template_url');?>/imgs/icon_a.gif" alt="Tamanho normal de letra" /></a>
				<a href="#" id="diminui_fonte"><img src="<?php bloginfo('template_url');?>/imgs/icon_a-menos.gif" alt="Diminuir letra" /></a>&nbsp;
				<a href="#" id="habilita_contraste"><img src="<?php bloginfo('template_url');?>/imgs/icon_c-mais.gif" alt="Aumentar contraste" /></a>
				<a href="#" id="desabilita_contraste"><img src="<?php bloginfo('template_url');?>/imgs/icon_c-menos.gif" alt="Contraste normal" /></a>
			</div>
		</div>
  </div>
  </div>

    <div id="navigation">
       <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
    </div>
