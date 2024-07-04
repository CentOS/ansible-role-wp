<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password, return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>

<div id="comments" class="border-primary border-top border-5 mt-5">

<?php if ( have_comments() ) : ?>
    <div class="mt-3"><?php printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'wordpress-theme-centos' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' ); ?></div>

    <ul class="list-unstyled">
        <?php
            wp_list_comments( array(
                'style'       => 'ul',
                'short_ping'  => true,
                'avatar_size' => 32,
            ) );
        ?>
    </ul><!-- .comment-list -->

    <?php
        // Are there comments to navigate through?
        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'wordpress-theme-centos' ); ?></h1>
        <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'wordpress-theme-centos' ) ); ?></div>
        <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'wordpress-theme-centos' ) ); ?></div>
    </nav><!-- .comment-navigation -->
    <?php endif; // Check for comment navigation ?>

    <?php if ( ! comments_open() && get_comments_number() ) : ?>
    <p class="no-comments"><?php _e( 'Comments are closed.' , 'wordpress-theme-centos' ); ?></p>
    <?php endif; ?>

<?php endif; // have_comments() ?>
</div>

<?php comment_form( array(
  'class_container' => "comment-respond pb-1"
) ); ?>
