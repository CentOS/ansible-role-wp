<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="{{ httpd_assets_url }}/">Home</a></li>
	<?php if ( is_home() ) : ?>
	<li class="breadcrumb-item active">Blog</li>
	<?php elseif ( is_search() ) : ?>
	<li class="breadcrumb-item"><a href="/">Blog</a></li>
	<li class="breadcrumb-item active">Search results for "<?php echo get_search_query(); ?>"</li>
	<?php elseif ( is_category() ) : ?>
	<li class="breadcrumb-item"><a href="/">Blog</a></li>
	<li class="breadcrumb-item active">Categories "<?php single_cat_title(); ?>"</li>
	<?php elseif ( is_archive() ) : ?>
	<li class="breadcrumb-item"><a href="/">Blog</a></li>
	<li class="breadcrumb-item active">Archives "<?php the_archive_title(); ?>"</li>
	<?php elseif ( is_single() ) : ?>
	<li class="breadcrumb-item"><a href="/">Blog</a></li>
	<li class="breadcrumb-item active"><?php the_title(); ?></li>
	<?php endif ?>
</ol>
