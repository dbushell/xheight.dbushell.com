<?php

get_header();

?>

				<div id="content">
<?php
while(have_posts()) {
	the_post();
	$featured_id = get_the_ID();
	$quote = get_post_meta($featured_id, 'quote', true);
?>
					<article id="main" role="main">
						<header id="page-header">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<time class="secondary" pubdate datetime="<?= get_the_date('c'); ?>"><?php the_date(); ?></time>
						</header>
						<?php if ($quote) { ?>
						<blockquote>
							&ldquo;<?= $quote; ?>&rdquo;
						</blockquote>
						<?php } ?>
						<div class="text">
							<?php the_content(); ?>
						</div>
						<footer class="box">
							<div class="author inside clearfix">
								<h2 class="name"><a rel="author" href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" title="More articles from <?= get_the_author_meta('display_name'); ?>"><span>Written by </span><?= get_the_author_meta('display_name'); ?></a></h2>
								<?php echo get_avatar(get_the_author_meta('ID'), '68', 'identicon'); ?>
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
							</div>
<?php /* REMOVED FOR ARCHIVE
							<div class="social">
	                        	<div class="btn">
	                        		<a href="http://twitter.com/share" class="socialite twitter" data-count="vertical" dat-url="<?php the_permalink(); ?>" data-via="xheightblog"<?php if ($twitter_name) { ?> data-text="xheight &mdash; &ldquo;<?php the_title(); ?>&rdquo; by @<?= $twitter_name; ?>" data-via="<?= strip_tags($twitter_name); ?>"<?php } ?>>Tweet</a>
	                        	</div>
	                        	<div class="btn">
	                        		<a href="https://plusone.google.com/_/+1/confirm?hl=en&amp;url=<?php the_permalink(); ?>" class="socialite googleplus" data-size="tall" data-href="<?php the_permalink() ?>">+1</a>
	                        	</div>
	                        	<div class="btn">
	                        		<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ?>&amp;title=<?= the_title(); ?>" class="socialite linkedin" data-url="<?php the_permalink() ?>" data-counter="top" rel="nofollow" target="_blank">LinkedIn</a>
	                        	</div>
	                        	<div class="btn">
		                        	<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>" class="socialite facebook" data-href="<?php the_permalink(); ?>" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false">Like</a>
								</div>
							</div>
*/ ?>
						</footer>
					</article>
<?php } ?>
					
				</div> <!--/#content-->

<?php
get_footer();

?>