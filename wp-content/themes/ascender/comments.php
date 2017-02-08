				<div id="response">
					<?php if (post_password_required()) { ?>
						<h2>This post is password protected. Enter the password to view any comments.</h2>
					</div><!-- /response -->
					<?php return; } ?>
					<?php
					$comment_count = get_comments_number();
					if ($comment_count) {
					?>
					<h2><?= $comment_count; ?> response<?php if ($comment_count != 1) { echo 's'; } ?> to &ldquo;<?= the_title(); ?>&rdquo;</h2>
					<?php } else { ?>
					<h2>No responses yet, why not be the first?</h2>
					<?php } ?>
					<?php if (have_comments()) { ?>
					<ol id="comments">
					<?php wp_list_comments(array('style' => 'ol', 'callback' => 'ascender_comment', 'end-callback' => 'ascender_comment_end')); ?>
					</ol>
					<?php } /* end if comments */ ?>
					<?php if (!comments_open() && post_type_supports(get_post_type(), 'comments')) { ?>
						<h2>Comments are now closed.</h2>
					<?php } else { ?>
						<?php comment_form(array('comment_notes_before' => '<p class="comment-notes">Your email address will not be published.</p>', 'comment_notes_after' => '')); ?>
					<?php } ?>
				</div><!--/#response-->
