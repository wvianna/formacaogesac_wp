<?php
session_start();
?>
<?php
/*
Template Name: Mapa da Rede
*/
?>
<?php get_header (); ?>
  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <div id="pageContent">				
				<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

				<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
						<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
						<title>Google Maps AJAX + MySQL/PHP Example</title>
						<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true_or_false&amp;key=ABQIAAAAXizTRQqQO2FNauoneRDF_BT2yXp_ZAY8_ufC3CFXhHIE1NvwkxQ5VqeAwtFyHmlgftZ5J_MKplNe7g" type="text/javascript"></script>

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
								map.setCenter(new GLatLng(47.614495, -122.341861), 13);

								GDownloadUrl("phpsqlajax_genxml.php", function(data) {
								  var xml = GXml.parse(data);
								  var markers = xml.documentElement.getElementsByTagName("marker");
								  for (var i = 0; i < markers.length; i++) {
								    var name = markers[i].getAttribute("name");
								    var address = markers[i].getAttribute("address");
								    var type = markers[i].getAttribute("type");
								    var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
								                            parseFloat(markers[i].getAttribute("lng")));
								    var marker = createMarker(point, name, address, type);
								    map.addOverlay(marker);
								  }
								});
							}
						}

						function createMarker(point, name, address, type) {
							var marker = new GMarker(point, iconBlue);
							var html = "<b>" + name + "</b> <br/>" + address;
							GEvent.addListener(marker, 'click', function() {
								marker.openInfoWindowHtml(html);
							});
							return marker;
						}
						//]]>
					</script>

					</head>-->
					
					<body onload="load()" onunload="GUnload()">
						<h1><?php the_title() ?>: <?php echo $_SESSION["uf"] ?></h1>
						<div id="map" style="width: 785px; height: 300px"></div>
					</body>
				<!--</html>-->
		</div>    
    
  </div>
  <div id="right-column" class="grid_2">
     <?php get_sidebar(); ?>
  </div>
  <div class="clear"></div>
  </div>
  
<?php get_footer (); ?>
