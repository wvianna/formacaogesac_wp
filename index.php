<?php get_header (); ?>

  <div id='mainContent'>
    <div id="left-column">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("left-column") ) : ?>
	<?php endif ?>
    </div>

    <div id="center-column">
	<?php  if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("center-column") ) : ?>
	<?php endif ?>
    </div>
    
    <div id="right-column">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer (); ?>

