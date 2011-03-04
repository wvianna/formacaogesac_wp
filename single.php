<?php get_header (); ?>
  <div id="mainContent" class="container_11">
    <div id="content" class="grid_9">
    <div id="pageContent">
      <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post() ?>
        <h1><?php the_title(); ?></h1>  
        <div class="postContent">
          <?php 
		$content = stripslashes(get_the_content());
		$content = apply_filters('the_content', $content);		
		echo $content;
 	  ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php comments_template(); ?>
    </div>
    </div>
    <div id="right-column" class="grid_2">
      <?php get_sidebar(); ?>
    </div>
    <div class="clear"></div>
</div>
<?php get_footer (); ?>
