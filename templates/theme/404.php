<?php get_header(); ?>

<header class="header header__page">
	<h1 class="header__page__title">404</h1>
	<p class="header__page__description">Page not found :(</p>
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
		<?php include ( 'includes/breadcrumbs.php' ); ?>
		</div>
		<div class="container">
			<p>The requested page could not be found.</p>
			<p>This happens when the page has been moved, removed, or had its name and address changed. It might otherwise be temporarily unavailable for technical reasons.</p>
		</div>
		<div class="aside__content__nav">
			<div class="aside__nav__explorer">
				<div class="top">
					<a href="#top"><button title="Page top" type="button" data-toggle="tooltip" class="btn btn-primary"><i class="fas fa-arrow-circle-up"></i></button></a>
				</div>
			</div>
		</div>
	</article>

	<aside class="aside__nav">
		<?php get_sidebar(); ?>
	</aside>
</main>

<?php get_footer(); ?>
