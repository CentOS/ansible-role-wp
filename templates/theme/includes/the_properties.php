<div class="mb-3">
  <span class="pe-2"><i class="fa-solid fa-calendar-alt"></i> <?php the_time('l, j, F Y'); ?></span>
  <span class="pe-2"><i class="fa-solid fa-user-pen"></i> <?php the_author_meta('display_name', $post->post_author ); ?></span>
  <span class="pe-2"><i class="fa-solid fa-folder-open"></i> <?php the_category(', '); ?></span>
  <span class="pe-2"><i class="fa-solid fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></span>
</div>
