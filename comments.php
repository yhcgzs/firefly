<?php
if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');
?>
<!– Comment’s List –>
<h3>精彩留言</h3>

<ol class="commentlist">
	<?php
	if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
		// if there's a password
		// and it doesn't match the cookie
		?>
        <li class="decmt-box">
            <p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
        </li>
		<?php
	} else if ( !comments_open() ) {
		?>
        <li class="decmt-box">
            <p><a href="#addcomment">评论功能已经关闭!</a></p>
        </li>
		<?php
	} else if ( !have_comments() ) {
		?>
        <li class="decmt-box">
            <p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
        </li>
		<?php
	} else {
		wp_list_comments('type=comment&callback=aurelius_comment');
	}
	?>
</ol>

<!– Comment Form –>
<div id="respond_box">
    <div id="respond">
        <h3>发表评论</h3>
        <div class="cancel-comment-reply">
            <div id="real-avatar">
				<?php if(isset($_COOKIE['comment_author_email_'.COOKIEHASH])) : ?>
					<?php echo get_avatar($comment_author_email, 40);?>
				<?php else :?>
					<?php global $user_email;?><?php echo get_avatar($user_email, 40); ?>
				<?php endif;?>
            </div>
            <small><?php cancel_comment_reply_link(); ?></small>
        </div>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
            <p><?php print '您必须'; ?><a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>"> [ 登录 ] </a>才能发表留言！</p>
		<?php else : ?>
            <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				<?php if ( $user_ID ) : ?>
                    <p><?php print '登录者：'; ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>&nbsp;&nbsp;<a href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出"><?php print '[ 退出 ]'; ?></a></p>
				<?php elseif ( '' != $comment_author ): ?>
                    <div class="author"><?php printf(__('欢迎回来 <strong>%s</strong>'), $comment_author); ?>
                        <a href="javascript:toggleCommentAuthorInfo();" id="toggle-comment-author-info">[ 更改 ]</a></div>
                    <script type="text/javascript" charset="utf-8">
                        //<![CDATA[
                        var changeMsg = "[ 更改 ]";
                        var closeMsg = "[ 隐藏 ]";
                        function toggleCommentAuthorInfo() {
                            jQuery('#comment-author-info').slideToggle('slow', function(){
                                if ( jQuery('#comment-author-info').css('display') == 'none' ) {
                                    jQuery('#toggle-comment-author-info').text(changeMsg);
                                } else {
                                    jQuery('#toggle-comment-author-info').text(closeMsg);
                                }
                            });
                        }
                        jQuery(document).ready(function(){
                            jQuery('#comment-author-info').hide();
                        });
                        //]]>
                    </script>
				<?php endif; ?>
				<?php if ( ! $user_ID ): ?>
                    <div id="comment-author-info">
                        <p>
                            <input type="text" name="author" id="author" class="commenttext" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
                            <label for="author">昵称<?php if ($req) echo " *"; ?></label>
                        </p>
                        <p>
                            <input type="text" name="email" id="email" class="commenttext" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
                            <label for="email">邮箱<?php if ($req) echo " *"; ?> </label>
                        </p>
                        <p>
                            <input type="text" name="url" id="url" class="commenttext" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
                            <label for="url">网址(选填)</label>
                        </p>
                    </div>
				<?php endif; ?>
                <div class="clear"></div>

                <p><textarea name="comment" id="comment" tabindex="4" cols="50" rows="5"></textarea></p>
                <p class="comment-form-smilies"><?php echo alu_get_wpsmiliestrans();?></p>
                <p>
                    <input class="submit" name="submit" type="submit" id="submit" tabindex="5" value="提交留言" />
                    <input class="reset" name="reset" type="reset" id="reset" tabindex="6" value="<?php esc_attr_e( '重写' ); ?>" />
					<?php comment_id_fields(); ?>
                </p>
				<?php do_action('comment_form', $post->ID); ?>

            </form>
            <div class="clear"></div>
		<?php endif; // If registration required and not logged in ?>
    </div>
</div>