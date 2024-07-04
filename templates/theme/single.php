<?php get_header();?>

<main class="container bg-body py-3">

  <?php include( get_theme_file_path( '/includes/breadcrumbs.php' ) ); ?>

  <div class="row justify-content-center my-5">
    <div class="col-sm-12 col-lg-8">

      <div class="h1"><?php the_title(); ?></div>
      <?php include( get_theme_file_path( '/includes/the_properties.php' ) ); ?>

      <div class="content mb-5">
        <?php the_content(); ?>
      </div>
      <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>
