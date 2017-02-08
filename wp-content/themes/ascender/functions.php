<?php

function extra_contact_info($contactmethods) {
	unset($contactmethods['aim']);
    unset($contactmethods['yim']);
    unset($contactmethods['jabber']);

    $contactmethods['twitter'] = 'Twitter Username';
    $contactmethods['googleplus'] = 'Google+ Profile URL';
    return $contactmethods;
}
add_filter('user_contactmethods', 'extra_contact_info');


if (!function_exists('ascender_comment')) {
	function ascender_comment($comment, $args, $depth)
	{
		$GLOBALS['comment'] = $comment;
		if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback')
			return;
		?>
		<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>> 
			<h3><?= get_comment_author_link(); ?> <time datetime="<?= get_comment_date('c'); ?>">&mdash; <?= get_comment_date(); ?> at <?= get_comment_time(); ?></time></h3>
			<div class="text">
				<?php if ( $comment->comment_approved == '0' ) { ?>
				<p><strong><em>Your comment is awaiting moderation.</em></strong></p>
				<?php } ?>
				<?php comment_text(); ?>
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
		<?php
	}
}
if (!function_exists('ascender_comment_end')) {
	function ascender_comment_end($args) {
		echo '</li>';
		//var_dump($args);
	}
}
?>