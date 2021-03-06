<?php 

	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']) )
		die ("Please do not call this file directly");
		
	if ( post_password_required() ) { ?>
	<p class="nocomments">This post is password protected. Enter password to view comments.</p>
	
	<?php 
		return;
		}
		?>
		
		<div id="comments">
			<h3><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></h3>
			<?php if( have_comments() ) : ?>
				<ul class="commentslist">
					<?php wp_list_comments('avatar_size=64&type=comment'); ?>
				</ul>
				<?php if ($wp_query->max_num_pages > 1) : ?>
					<div class="pagination">
						<ul>
							<li class="older"><?php previous_comments_link('Older Comments'); ?></li>
							<li class="newer"><?php previous_comments_link('Newer Comments'); ?></li>
						</ul>
					</div>
				<?php endif; ?>
			<?php endif; ?>
			
			<?php if (comments_open() ) : ?>
			<div id="respond">
				<h3>Leave respond</h3>
				<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
					<fieldset>
                        <div class="comment_label">
						    <span><label for="author">Name:</label></span>
						    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />
                        </div>
                        <div class="comment_label">
						    <span><label for="email">eMail:</label></span>
						    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />
                        </div>
                        <div class="comment_label">
						    <span><label for="url">Website:</label></span>
						    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />
                        </div>
                        <div class="comment_label">
						    <span><label for="comment">Comment:</label></span>
						    <textarea name="comment" id="comment" rows="5" cols="70" >
						    </textarea>
                        </div>
						<input type="submit" class="commentsubmit" value="Submit comment" />
					</fieldset>
						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>
				</form>
				<p class="cancel"><?php cancel_comment_reply_link('Cancel Reply'); ?></p>
			</div>
			<?php else: ?>
				<h3>Comments are now closed.</h3>
			<?php endif; ?>
		</div>
