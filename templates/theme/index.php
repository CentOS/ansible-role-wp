<?php get_header();?>

<main class="container bg-body py-3">

  <?php include( get_theme_file_path( '/includes/breadcrumbs.php' ) ); ?>

    <div class="row justify-content-center mb-5">
    <div class="text-bg-dark bg-image p-5 shadow">
      <?php if ( is_search() ) : ?>
      <div class="h1">Search results for "<?php echo get_search_query(); ?>"</div>
      <?php elseif ( is_category() ) : ?>
      <div class="h1">Categories "<?php single_cat_title(); ?>"</div>
      <?php elseif ( is_archive() ) : ?>
      <div class="h1">Archives "<?php the_archive_title(); ?>"</div>
      <?php elseif ( is_single() ) : ?>
      <div class="h1"><?php the_title(); ?></div>
      <?php else : ?>
      <div class="h1"><?php bloginfo( 'name' ); ?></div>
      <div class="lead"><?php bloginfo( 'description' ); ?></div>
      <?php endif ?>
    </div>
  </div>
    <div class="row justify-content-center mb-4">
    <div class="col-sm-12 col-lg-8 border-1 border-end px-5">
      <?php include( get_theme_file_path( '/includes/loop.php' ) ); ?>
    </div>
    <div class="col-sm-12 col-lg-4 ps-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>

<?php get_footer();?>
