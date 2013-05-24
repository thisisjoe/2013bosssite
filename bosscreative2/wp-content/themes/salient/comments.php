<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number('No Comments', 'One Comment', '% Comments' );?></h3>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>

	<ul class="comment-list">
		<?php wp_list_comments(array('avatar_size' => 60)); ?>
	</ul>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<!--<p class="nocomments">Comments are closed.</p>-->

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

<h3><?php comment_form_title( __('Leave a comment',NECTAR_THEME_NAME), __('Leave a comment to',NECTAR_THEME_NAME) . '%s' ); ?><span class="cancel-comment-reply"><small><?php cancel_comment_reply_link(__('Cancel reply',NECTAR_THEME_NAME)); ?></small></span>
</h3>

<p><?php echo __('Your email address will not be published. Required fields are marked.',NECTAR_THEME_NAME); ?> </p>


<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php echo __('Logged in as',NECTAR_THEME_NAME); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account"><?php echo __('Log out',NECTAR_THEME_NAME); ?> &raquo;</a></p>

<?php else : ?>

<div class="row">
	
	<div class="col span_4">
		<label for="author"><small><?php echo __('Name',NECTAR_THEME_NAME) ?> <?php if ($req) echo "<span>*</span>"; ?></small></label><input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>
	
	<div class="col span_4">
		<label for="email"><small><?php echo __('Mail',NECTAR_THEME_NAME); ?> <?php if ($req) echo "<span>*</span>"; ?></small></label><input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
	</div>
	
	<div class="col span_4 col_last">
		<label for="url"><small><?php echo __('Website', NECTAR_THEME_NAME); ?> </small></label><input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" size="22" tabindex="3" />
	</div>
</div><!--/row-->

<?php endif; ?>

<div class="row">
	<div class="col span_12"><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></div>
</div>

<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>