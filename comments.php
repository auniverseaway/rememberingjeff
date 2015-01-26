<?php
$comment_args = array(
	'fields' => apply_filters(
		'comment_form_default_fields', array(
			'author' => 
				'<div class="row">' . 
					'<label class="col-xs-6" for="author">' . __( 'Your Name' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
					'<label class="col-xs-6" for="email">' . __( 'Your Email' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
				'</div>' . 

				'<div class="row name-email">' . 
					'<div class="col-xs-6"><input id="author" name="author" type="text" placeholder="Full Name" value="' . esc_attr( $commenter['comment_author'] ) . '"' . $aria_req . ' /></div>',
			'email'  =>
				'<div class="col-xs-6"><input id="email" name="email" type="text" placeholder="Email Address" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"' . $aria_req . ' /></div>' .
				'</div>',
			'url'    => ''
		)
	),
	'comment_field' => 
		'<div class="row">' . 
			'<div class="col-xs-12">' .
				'<textarea id="comment" name="comment" rows="8" aria-required="true"></textarea>' . 
			'</div>' .
		'</div>',
    'comment_notes_after' => '',
    'title_reply' => 'Please share a favorite memory of Jeff:'
);
comment_form( $comment_args ); ?>
<h3>Share Photos:</h3>
<p>Please email any photo memories to <a href="mailto:photos@rememberingjeff.com">photos@rememberingjeff.com</a>.</p>

<hr/>
<h3>Memories of Jeff:</h3>
<?php wp_list_comments( array( 'callback' => 'tbtg_comment' ) );  ?>