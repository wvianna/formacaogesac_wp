<ul>
  <?php while (have_posts()) : the_post(); ?>
  <li>
    <strong><?php the_title() ?></strong>
    <em><?php the_date('d/m/Y') ?></em>
    <p>
      <?php the_content() ?>
    </p>
  </li>
  <?php endwhile; ?>
</ul>
