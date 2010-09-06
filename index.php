<?php get_header (); ?>

  <div id="mainContent" class="container_11">
  <div id="content" class="grid_9" style="">
    <div id="left-column" class="grid_5 alpha">
      <div id="left-column-top">

      <?php include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
	  
          <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column-top") ) : ?>
	  <?php endif ?>
      </div>
      <div id="left-column-bottom">  
      
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column-bottom") ) : ?>
	  <?php endif ?>
      </div>
    </div>

    <div id="center-column" class="grid_4 omega">
      <div id="center-column-top">
      
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column-top") ) : ?>
	  <?php endif ?>
      </div>
      <div id="center-column-bottom">
    
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column-bottom") ) : ?>
	  <?php endif ?>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div id="right-column" class="grid_2">
    <?php get_sidebar(); ?>
  </div>
  <div class="clear"></div>
  </div>
  
<?php get_footer (); ?>

