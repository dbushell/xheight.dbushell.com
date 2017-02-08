<?php /* Template Name: Home */ ?>
<?php

get_header();

?>

				<div id="content">
<?php
query_posts(array('category_name' => 'Featured', 'showposts' => 1));
if (have_posts()) {
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
							<p><?= get_the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Continue reading &ldquo;<?php the_title(); ?>&rdquo;</a>
						</div>
					</article>
<?php
	}
}
?>
<?php
query_posts(array('post__not_in' => array($featured_id), 'showposts' => 3));
if (have_posts()) {
?>
						<aside id="articles" role="complementary">
							<h2>Latest Articles</h2>
<?php
	while(have_posts()) {
		the_post();
?>
							<article class="box">
								<div class="inside">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p><?= get_the_excerpt(); ?></p>
									<?php /* <a href="<?php the_permalink(); ?>">Continue Reading</a> */ ?>
								</div>
							</article>
<?php
	}
?>
							<a href="<?= get_bloginfo('url'); ?>/articles">All Articles</a>
						</aside>
<?php
}
?>
				</div> <!--/#content-->

<?php

get_footer();

?>