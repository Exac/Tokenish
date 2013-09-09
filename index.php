<?php get_header() ?>
	
<article>
	
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php if( has_post_thumbnail() ) : ?>
				<div class="post-thumb">
					<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				</div>
			<?php endif; ?>

			<?php the_content(''); ?>
			<ul class="meta">
				<li><?php the_time('F jS, Y') ?></li>
				<li>Posted in <?php the_category(', ') ?></li>
				<li><?php comments_number('No comments', '1 Comment', '% Comments'); ?></li>
			</ul>
		</div>

	<?php endwhile; ?>

	<div class="pagnation">
		<ul>
			<li class="older"><?php next_posts_link('Older') ?></li>
			<li class="older"><?php previous_posts_link('Newer') ?></li>
		</ul>
	</div>

	<?php else : ?>
		<h2>Nothing Found</h2>
		<p>Sorry, the document could not be found <strong>:(</strong><br/><a href="<?php get_option('home'); ?>">Return</a></p>
	<?php endif; ?>

</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>