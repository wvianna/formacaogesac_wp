<?php get_header (); ?>

  <div id='mainContent'>
    <div id="pageContent">
      <?php if( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post() ?>
        <h1><?php the_title(); ?></h1>  
        <div class="postContent">
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div id="right-column">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer (); ?>
