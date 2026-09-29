<?php
/**
 * The template for displaying comments
 *
 * @package GP_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area gp-comments-area">

    <?php if ( have_comments() ) : ?>
        <h3 class="comments-title">
            <?php
            $gp_comment_count = get_comments_number();
            if ( '1' === $gp_comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'One Comment on &ldquo;%1$s&rdquo;', 'gp-theme' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf( 
                    /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s Comment on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', $gp_comment_count, 'comments title', 'gp-theme' ) ),
                    number_format_i18n( $gp_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h3>

        <ol class="comment-list gp-comment-list">
            <?php
            wp_list_comments( array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size'=> 48,
            ) );
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

        <?php if ( ! comments_open() ) : ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'gp-theme' ); ?></p>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    comment_form( array(
        'class_form'           => 'gp-comment-form',
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h3>',
        'class_submit'         => 'gp-btn gp-btn-primary',
    ) );
    ?>

</div><!-- #comments -->
