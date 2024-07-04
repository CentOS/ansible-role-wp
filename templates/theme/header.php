<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>

  <body id="top" <?php body_class(); ?>>

	<?php wp_admin_bar_render(); ?>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark bg-image shadow<?php if (is_admin_bar_showing()) { ?> mt-4<?php } ?>" aria-label="navbar">
    <div class="container">
    <a class="navbar-brand" href="/"><img src="<?php echo esc_url(get_parent_theme_file_uri('assets/img/centos-whitelogo.svg'));?>" height="32" alt="<?php wp_title();?>" /><span class="manifestation border-start border-light ps-3 ms-3 py-2 fs-6">Blog</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto">
        <?php
          $pages = get_pages( array(
            'number' => 4,
          ) );
          foreach ( $pages as $page ) { ?>
          <li class="nav-item">
            <a href="<?php echo get_page_link( $page->ID )?>" class="nav-link" role="presentation"><?php echo $page->post_title ?></a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
