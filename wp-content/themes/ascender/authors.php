<?php /* Template Name: Authors */ ?>
<?php

get_header();

?>

				<div id="content">
					<section id="authors" role="main">
						<header id="page-header">
							<h1>Authors</h1>
						</header>
<?php

global $wpdb;
$query = "SELECT ID, user_nicename from $wpdb->users ORDER BY ID";
$author_ids = $wpdb->get_results($query);

foreach($author_ids as $author)
{
	if (!count_user_posts($author->ID)) continue;
	
	$curauth = get_userdata($author->ID);
	if($curauth->user_level > 0 || $curauth->user_login == 'admin') {
		$user_link = get_author_posts_url($curauth->ID);
		
		$twitter_name = $curauth->twitter;
		if (substr($twitter_name, 0, 1) == '@') {
			$twitter_name = substr($twitter_name, 1);
		}
		
?>
							<article class="box">
								<div class="author inside clearfix">
									<h2 class="name"><a rel="author" href="<?= get_author_posts_url($author->ID); ?>" title="Articles by <?= $curauth->display_name; ?>"><?= $curauth->display_name; ?></a></h2>
									<?php if (!$curauth->avatar) { ?>
									<?php echo get_avatar($curauth->user_email, '68', 'identicon'); ?>
									<?php } else { ?>
									<img src="<?= $curauth->avatar; ?>" width="68" height="68" alt="<?= $curauth->display_name; ?>">
									<?php } ?>
									<p class="biography"><?= $curauth->description; ?></p>
									<?php if (isset($curauth->twitter) && $curauth->twitter) { ?>
									<div class="twitter">
										<a href="https://twitter.com/<?= $twitter_name; ?>" data-show-count="true" class="twitter-follow-button">Follow @<?= $twitter_name; ?></a>
									</div>
									<?php } ?>
								</div>
							</article>
<?php
	}
}
?>
						</div>
					</section>
				</div> <!--/#content-->

<?php

get_footer();

?>