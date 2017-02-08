<?php

get_header();

?>
				<div id="content">
					<section id="archives" role="main">
					<?php if (is_author()) { the_post(); ?>
						<header id="page-header">
							<h1><?php the_author(); ?></h1>
						</header>
							<div id="main" class="author">
								<div class="text">
									<?php if (!get_the_author_meta('avatar')) { ?>
									<?php echo get_avatar(get_the_author_meta('user_email'), '48', 'identicon'); ?>
									<?php } else { ?>
									<img class="avatar" src="<?= get_the_author_meta('avatar'); ?>" width="48" height="48" alt="<?= get_the_author_meta('display_name'); ?>">
									<?php } ?>
									<p class="biography"><?= get_the_author_meta('description'); ?></p>
									<?php
									$twitter_name = get_the_author_meta('twitter');
									if (substr($twitter_name, 0, 1) == '@') {
										$twitter_name = substr($twitter_name, 1);
									}
									if ($twitter_name) {
									?>
									<div class="twitter">
										<a href="https://twitter.com/<?= strip_tags($twitter_name); ?>" data-show-count="true" class="twitter-follow-button">Follow @<?= strip_tags($twitter_name); ?></a>
									</div>
									<?php } ?>
									<?php if (get_the_author_meta('googleplus')) { ?>

										<a rel="me" class="google" target="_blank" href="<?= strip_tags(get_the_author_meta('googleplus')); ?>" title="<?= get_the_author_meta('display_name'); ?> on Google+">
										<img src="<?= get_bloginfo('template_directory'); ?>/image/gprofile_button-16.png" width="16" height="16"><?= get_the_author_meta('display_name'); ?> on Google+</a>

									<?php } ?>
								</div>
							</div>
					<?php } else if (is_search()) { ?>
						<header id="page-header">
							<h1>Search</h1>
						</header>
					<?php } else { ?>
						<header id="page-header">
							<h1>Articles</h1>
						</header>
					<?php } ?>
<?php
rewind_posts();
while(have_posts()) {
	the_post();
?>
							<article id="post-<?php the_ID(); ?>" class="box">
								<div class="article inside">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?= get_the_excerpt(); ?></p>
									<?php /* <a href="<?php the_permalink(); ?>">Continue Reading</a> */ ?>
								</div>
							</article>
<?php
}
?>
					
							<div class="more" id="articles-older"><?php next_posts_link('Older Articles'); ?></div>
							<div class="more" id="articles-newer"><?php previous_posts_link('Newer Articles'); ?></div>

						</div>
					</section>
				</div> <!--/#content-->

<?php

get_footer();

?>