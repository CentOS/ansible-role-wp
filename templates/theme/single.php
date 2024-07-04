<?php get_header();?>

<main class="container bg-body py-3">

  <?php include( get_theme_file_path( '/includes/breadcrumbs.php' ) ); ?>


  <div class="row justify-content-center my-5">
    <div class="col-sm-12 col-lg-8">

      <div class="h1"><?php the_title(); ?></div>
      <div class="small mb-5">
        <span class="pe-2"><i class="fas fa-calendar-alt"></i> <?php the_time('l, j, F Y'); ?></span>
        <span class="pe-2"><i class="fas fa-pen"></i> <?php the_author_meta('display_name', $post->post_author ); ?></span>
        <span class="pe-2"><i class="fas fa-folder-open"></i> <?php the_category(', '); ?></span>
        <span class="pe-2"><i class="fas fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
      </div>

      <div class="content mb-5">
        <?php the_content(); ?>
      </div>

      <?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>

    </div>
  </div>

</main>

<?php get_footer();?>
