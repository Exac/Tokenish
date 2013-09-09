<article>
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<div class="post">
				<h2 class="title"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
			<div class="comments">
				<?php comments_template(); ?>
			</div>
		<?php endwhile; ?>
	<?php endif ?>

</article>

<?php get_sidebar(); ?>
<?php get_footer(); ?>