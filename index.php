<?php get_header() ?>
<!--index.php-->
<article>
	
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

			<?php if( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				</div>
			<?php endif; ?><strong></strong>

			<?php the_content(''); ?>
			<ul class="meta">
				<li><?php the_time('F jS, Y') ?></li>
				<li>Posted in <?php the_category(', ') ?></li>
				<li><?php comments_number('No comments', '1 Comment', '% Comments'); ?></li>
			</ul>
		</div>

	<?php endwhile; ?>

	<div class="pagnation">
		<?php
			$prev_link = get_previous_posts_link(__('&laquo; Older Entries'));
			$next_link = get_next_posts_link(__('Newer Entries &raquo;'));
			// as suggested in comments
			if ($prev_link || $next_link) {
				echo '<ul class="pagenation">';
				if ($prev_link){
					echo '<li>'.previous_posts_link('Newer').'</li>';
				}
				if ($next_link){
					echo '<li>'.next_posts_link('Older').'</li>';
				}
			}
		?>
	</div>

	<?php else : ?>
		<h2>Nothing Found</h2>
		<p>Sorry, the document could not be found <strong>:(</strong><br/><a href="<?php get_option('home'); ?>">Return</a></p>
	<?php endif; ?>

</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>