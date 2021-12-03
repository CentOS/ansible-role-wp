<?php get_header(); ?>

<header class="header header__page">
	<h1 class="header__page__title"><?php the_title(); ?></h1>
	<div class="container small mb-4">
		<span class="mr-2"><i class="fas fa-calendar-alt"></i> <?php the_time('l, j, F Y'); ?></span>
		<span class="mr-2"><i class="fas fa-pen"></i> <?php the_author_meta('display_name', $post->post_author ); ?></span>
		<span class="mr-2"><i class="fas fa-folder-open"></i> <?php the_category(', '); ?></span>
		<span class="mr-2"><i class="fas fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
	</div>
</header>
<div class="hr">
  <div class="hr__centos-color-0"></div>
  <div class="hr__centos-color-1"></div>
  <div class="hr__centos-color-2"></div>
  <div class="hr__centos-color-3"></div>
</div>
<main class="aside">

	<article class="aside__content">
		<div class="aside__content__nav">
		<?php include ( 'includes/breadcrumbs.php'); ?>
		</div>

		<?php the_content(); ?>
		<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
	</article>

	<aside class="aside__nav">
		<?php get_sidebar(); ?>
	</aside>
</main>

<?php get_footer(); ?>
