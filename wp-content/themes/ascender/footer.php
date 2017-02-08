
			</div> <!--/#centre-->
			<a id="return" href="#top">Return to Top</a>
		</div> <!--/#wrap4-->
		</div> <!--/#wrap3-->
		</div> <!--/#wrap2-->
		</div> <!--/#wrap1-->
		<?php if (is_single()) { ?>
		<div id="wrap5">
			<div class="centre clearfix">
				<?php comments_template('', true); ?>
			</div>
		</div><!--/#wrap5-->
		<?php } /* end if single */ ?>
		<footer id="footer" role="contentinfo">
			<div class="centre">
				<div class="notice">
					<p><span>&copy; 2001&ndash;<?= date('Y'); ?> <strong><a href="http://dbushell.com" title="David Bushell &ndash; Graphic &amp; Web Design">David Bushell</a></strong></span></p>
				</div>
			</div>
		</footer>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery-1.6.2.min.js"><\/script>')</script>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/js/xheight.js"></script>
		<script>
		<?php
			$home = get_option('home');
			$ppp = get_option('posts_per_page');
			$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$total = wp_count_posts('post')->publish;
			$template = 'articles';
		?>
			xheight.init( { home: '<?= $home; ?>', template: '<?= $template; ?>', page: <?= $page; ?>, ppp: <?= $ppp; ?>, total: <?= $total; ?> } );

			Socialite.load();
		</script>
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-9497100-8']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</body>
</html>