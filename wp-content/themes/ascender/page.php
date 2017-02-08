<?php

get_header();

?>

				<div id="content">
<?php
while(have_posts()) {
	the_post();
?>
					<article id="main" role="main">
						<header id="page-header">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						</header>
						<div class="text">
							<?php the_content(); ?>
						</div>
					</article>
<?php } ?>
					
				</div> <!--/#content-->

<?php
get_footer();

?>