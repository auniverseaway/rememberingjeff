<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

function tbtg_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    ?>
    <div <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <div id="comment-<?php comment_ID(); ?>" class="posted-comment">

            <div class="comment-author vcard">
                <?php echo get_avatar( $comment, 40 ); ?>
                <?php printf( __( '%s', 'toolbox' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
            </div>

            <?php if ( $comment->comment_approved == '0' ) : ?>
                <em><strong><?php _e( 'Your comment is awaiting moderation.', 'toolbox' ); ?></strong></em>
            <?php endif; ?>

            <div class="comment-content">
                <?php comment_text(); ?>
            </div>
            <!-- <div class="comment-meta">
                <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                    <time pubdate datetime="<?php comment_time( 'c' ); ?>">
                        <?php printf( __( '%1$s at %2$s', 'toolbox' ), get_comment_date(), get_comment_time() ); ?>
                    </time>
                </a>
                <?php edit_comment_link( __( '(Edit)', 'toolbox' ), ' ' ); ?>
            </div> -->
        </div><!-- #comment-## -->
    </div>

    <?php } ?>