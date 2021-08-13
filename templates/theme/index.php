<?php get_header(); ?>

<header class="header header__page">
	<h1 class="header__page__title"><?php bloginfo( 'name' ); ?></h1>
	<p class="header__page__description"><?php bloginfo( 'description' ); ?></p>
</header>
<div class="hr">
  <div class="hr__centos-color-0"></div>
  <div class="hr__centos-color-1"></div>
  <div class="hr__centos-color-2"></div>
  <div class="hr__centos-color-3"></div>
</div>
<main class="aside">
	<section class="aside__content">
		<?php include( get_theme_file_path( '/includes/the_loop.php' ) ); ?>
	</section>

	<aside class="aside__nav">
		<?php get_sidebar(); ?>
	</aside>
</main>

<?php get_footer(); ?>
