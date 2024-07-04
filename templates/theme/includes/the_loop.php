<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="mb-5">
<div class="h3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<?php include( get_theme_file_path( '/includes/the_properties.php' ) ); ?>
<?php the_excerpt() ?>
</div>

<?php endwhile; ?>

<div class="navigation">
  <div class="next-posts"><?php next_posts_link(); ?></div>
  <div class="prev-posts"><?php previous_posts_link(); ?></div>
</div>

<?php else : ?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <p>Not Found.</p>
</div>

<?php endif; ?>
