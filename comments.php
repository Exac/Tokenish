<?php
// Comments
	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])){
		die("Please don't load this page directly!");
	}

	if(post_password_required()){ ?>
		<p class="nocomments">This post is password protected!</p>
	<?php 
		return;
	}

	<div id="comments">
		<h3><?php comments_number('No Comments','1 Comment','% Comments');?></h3>

		<?php if(have_comments() ) : ?>

			<ol class="commentlist">
				<?php wp_list_comments('avatar_size=64&type=comment'); ?>
			</ol>

			<?php if($wp_query->max_num_pages > 1) : ?>
				<div class="pagnation">
					<ul>
						<li class="older"><?php next_comments_link('Older') ?></li>
						<li class="older"><?php previous_comments_link('Newer') ?></li>
					</ul>
				</div>
			<?php endif; ?>
		<?php endif; ?>

		<!--respond to comments with form here -->
		<?php if(comments_open() ) : ?>
			<div id="respond">
				<h3>Leave a response</h3>

				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<fieldset>
						<label for="author">Name:</label><input id="author" type="text" name="author" value="<?php echo $comment_author ?>" />

						<label for="email">Email:</label><input id="email" type="text" name="email" value="<?php echo $comment_author_email ?>" />

						<label for="url">Website:</label><input id="url" type="text" name="url" value="<?php echo $comment_author_url ?>" />

						<label for="comment">Comment:</label><textarea id="comment" type="text" rows="" cols=""></textarea>

						<input type="submit" class="commentsubmit" value="Submit Comment" />

						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>
					</fieldset>
				</form>

				<p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?> </p>
			</div>
		<?php else : ?>
			<h3>Comments are closed.</h3>
			<p>Hindsight is a wonderful thing.</p>
		<?php endif; ?>
	</div><!--Comments-->