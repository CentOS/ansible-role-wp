<nav aria-label="breadcrumbs" class="small">
<ol class="breadcrumb">
	<li class="breadcrumb-item"><a class="link-primary link-offset-3 link-offset-3-hover link-underline-primary link-underline-opacity-25 link-underline-opacity-75-hover" href="https://www.centos.org/">Home</a></li>
	<?php if ( is_home() ) : ?>
	<li class="breadcrumb-item">Blog</li>
	<?php else : ?>
	<li class="breadcrumb-item"><a class="link-primary link-offset-3 link-offset-3-hover link-underline-primary link-underline-opacity-25 link-underline-opacity-75-hover" href="<?php bloginfo('url') ?>">Blog</a></li>
  <?php endif ?>
	<?php if ( is_404() ) : ?>
	<li class="breadcrumb-item">404</li>
	<?php elseif ( is_search() ) : ?>
	<li class="breadcrumb-item">Search results for "<?php echo get_search_query(); ?>"</li>
	<?php elseif ( is_category() ) : ?>
	<li class="breadcrumb-item">Categories "<?php single_cat_title(); ?>"</li>
	<?php elseif ( is_archive() ) : ?>
	<li class="breadcrumb-item">Archives "<?php the_archive_title(); ?>"</li>
	<?php elseif ( is_single() ) : ?>
	<li class="breadcrumb-item"><?php the_title(); ?></li>
	<?php endif ?>
</ol>
</nav>
