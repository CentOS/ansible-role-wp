<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<section class="entry">
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	<div class="small">
	<span class="mr-2"><i class="fas fa-calendar-alt"></i> <?php the_time('l, j, F Y'); ?></span>
	<span class="mr-2"><i class="fas fa-pen"></i> <?php the_author_meta('display_name', $post->post_author ); ?></span>
	<span class="mr-2"><i class="fas fa-folder-open"></i> <?php the_category(', ') ?></span>
	<span class="mr-2"><i class="fas fa-comment"></i> <a href="<?php comments_link()?>"><?php comments_number()?></a></span>
	</div>
	<?php the_excerpt() ?>
	</section>

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
