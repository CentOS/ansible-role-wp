<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="mb-5">
<div class="h3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
<div class="small mb-3">
  <span class="mr-2"><i class="fa-solid fa-calendar-alt"></i> <?php the_time('l, j, F Y'); ?></span>
  <span class="mr-2"><i class="fa-solid fa-pen"></i> <?php the_author_meta('display_name', $post->post_author ); ?></span>
  <span class="mr-2"><i class="fa-solid fa-folder-open"></i> <?php the_category(', ') ?></span>
  <span class="mr-2"><i class="fa-solid fa-comment"></i> <a href="<?php comments_link()?>"><?php comments_number()?></a></span>
</div>
<?php the_excerpt() ?>
</div>

<?php endwhile; ?>

<div class="navigation">
  <div class="next-posts"><?php next_posts_link(); ?></div>
  <div class="prev-posts"><?php previous_posts_link(); ?></div>
</div>

<?php else : ?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <h1>Not Found</h1>
</div>

<?php endif; ?>
