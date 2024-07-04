<?php get_header();?>

<main class="container bg-body py-3">
  <?php include( get_theme_file_path( '/includes/breadcrumbs.php' ) ); ?>
  <div class="row justify-content-center my-5">
    <div class="col-sm-12 col-lg-8">
      <div class="h1">404</div>
      <div class="lead">Page not found :(</div>
      <div class="content">
			<p>The requested page could not be found.</p>
			<p>This happens when the page has been moved, removed, or had its name and address changed. It might otherwise be temporarily unavailable for technical reasons.</p>
      </div>
    </div>
  </div>
</main>

<?php get_footer();?>
