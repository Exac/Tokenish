</div>
<!-- #main -->
</div>
<!-- #main-container -->

<div class="footer-container">
	<footer class="wrapper">
		<div class="social">
			<h2>Social</h2>
			<ul>
				<li><a class="genericon genericon-facebook" href="https://www.facebook.com/courtney.shmyr"></a></li>
				<li><a class="genericon genericon-twitter" href="https://twitter.com/CShmyr"></a></li>
			</ul>
		</div>
		<div class="navigation">
			<h2>Navigation</h2>
			<?php wp_nav_menu( array('container' => '', 'menu' => '', 'menu_class' => 'links') ); ?>
		</div>
		<div class="recentposts">
			<h2>Recent Posts</h2>
			<ul>
			<?php
				$args = array( 'numberposts' => '3' );
				$recent_posts = wp_get_recent_posts( $args );
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
				}
			?>
			</ul>
		</div>
		<div class="copyright">
			<p>&copy; 2013-<?php echo Date("Y"); ?> Courtney Shmyr. All Rights Reserved. Site designed by <a href="http://thomasmclennan.ca">Thomas Mclennan</a>.</p>
		</div>
	</footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="/cdn/js/vendor/jquery-1.10.1.min.js"><\/script>')</script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.3/jquery.backstretch.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script> 
<script>
            var _gaq=[['_setAccount','UA-43870674-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
<?php wp_footer(); ?>
</body></html>