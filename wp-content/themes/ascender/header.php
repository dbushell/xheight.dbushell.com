<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php

global $page, $paged;
wp_title( '|', true, 'right' );
bloginfo( 'name' );
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}
if ( $paged >= 2 || $page >= 2 ) {
	echo ' | ' . sprintf('Page %s', max( $paged, $page ) );
}
	?></title>
<?php if (have_posts() && is_single()) { while (have_posts()) { the_post(); ?>
		<meta name="description" content="<?= get_the_title(); ?> &mdash; <?= strip_tags(get_the_excerpt()); ?>">
<?php }} ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link href="https://fonts.googleapis.com/css?family=Tinos:400,700,400italic,700italic" rel="stylesheet" type="text/css">

		<!--<script src="js/respond.min.js"></script>-->
<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrap1">
		<div id="wrap2">
		<div id="wrap3">
		<div id="wrap4">
			<div id="top" class="centre clearfix">
				<a id="jump" href="#content">Jump to Content</a>
				<header id="header" role="banner">
					<h1><a id="logo" href="<?= esc_url( home_url( '/' ) ); ?>" title="<?= esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<nav id="nav" role="navigation">
						<h2>Navigation</h2>
						<ul>
							<li<?= (is_home()) ? ' class="selected"': ''; ?>><a href="/articles">Articles</a></li>
							<li<?= (is_page('authors')) ? ' class="selected"': ''; ?>><a href="/authors">Authors</a></li>
							<li<?= (is_page('about')) ? ' class="selected"': ''; ?>><a href="/about">About xheight</a></li>
<?php /* REMOVED FOR ARCHIVE
							<li<?= (is_page('write-for-us')) ? ' class="selected"': ''; ?>><a href="/write-for-us">Write for us</a></li>
*/ ?>
						</ul>
<?php /* REMOVED FOR ARCHIVE
						<form id="search" role="search" method="get" action="/">
							<label id="search-label" for="search-criteria">Search Keywords</label>
							<input type="text" id="search-keywords" name="s" placeholder="Search&hellip;" aria-labelledby="search-label">
							<input type="submit" id="search-submit" value="Search">
						</form>
*/ ?>
						<?php /* <div id="carbonads-container"><div class="carbonad"><div id="azcarbon"></div><script type="text/javascript">var z = document.createElement("script"); z.type = "text/javascript"; z.async = true; z.src = "http://engine.carbonads.com/z/12234/azcarbon_2_1_0_VERT"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script></div></div>*/ ?>
						<div id="ads-container">
							<a class="heart-internet-ad" href="http://www.heartinternet.co.uk/reseller-hosting/" target="_blank" title="Heart Internet — The UKs best spec reseller hosting.">
								<p>Heart Internet — The UKs best spec reseller hosting. Limited time offer, your first month only £1. Find out more.</p>
							</a>
						</div>
					</nav>
				</header>
				<div id="bar">
					<div class="centre">
						<a id="logo2" href="<?= esc_url( home_url( '/' ) ); ?>" title="<?= esc_attr(get_bloginfo('name', 'display')); ?>">Return Home</a>
<?php /* REMOVED FOR ARCHIVE
						<a class="rss" href="/feed/atom/">RSS Feed</a>
*/ ?>
						<a href="https://twitter.com/xheightblog" class="socialite twitter follow" data-show-count="true" data-lang="en" target="_blank">Follow @xheightblog</a>
					</div>
				</div>
