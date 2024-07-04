<?php get_header();?>

<main class="container bg-body py-3">

  <?php include( get_theme_file_path( '/includes/breadcrumbs.php' ) ); ?>

  <div class="row justify-content-center mb-5">
    <div class="text-bg-dark bg-image p-5">
      <div class="h1">Categories</div>
      <div class="lead"><?php single_cat_title(); ?></div>
    </div>
  </div>

  <div class="row justify-content-center mb-4">
    <div class="col-sm-12 col-lg-8 border-1 border-end px-5">
      <?php include( get_theme_file_path( '/includes/the_loop.php' ) ); ?>
    </div>
    <div class="col-sm-12 col-lg-4 ps-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer();?>
