<?php get_header(); ?>

<article>
	
	<?php if(have_posts()) : ?>
		<?php if(is_category()) { ?>
			<h2 class="title"><?php single_cat_title(); ?></h2>
		<?php elseif (is_month()) { ?>
			<h2 class="title"><?php the_time('F, Y'); ?></h2>
		<?php } ?>
	<?php endif; ?>
</article>
<?php get_footer(); ?>