<?php get_header (); ?>

  <div id='mainContent'>
    <div id="left-column">
      <div id="left-column-top">
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column-top") ) : ?>
	  <?php endif ?>
      </div>
      <div id="left-column-bottom">
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column-bottom") ) : ?>
	  <?php endif ?>
      </div>
    </div>

    <div id="center-column">
      <div id="center-column-top">
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column-top") ) : ?>
	  <?php endif ?>
      </div>

      <div id="center-column-bottom">
	  <?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column-bottom") ) : ?>
	  <?php endif ?>
      </div>
    </div>
    
    <div id="right-column">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer (); ?>

