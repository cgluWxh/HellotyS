<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3><?php $this->commentsNum(_t('木有评论呢！客官要沙发吗？'), _t('只有一条评论，板凳十秒后就没啦！'), _t('已有 %d 条评论了呢！')); ?></h3>
    
    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    
    	<h3 id="response"><?php _e('Fire新评论'); ?></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
    		<p><?php _e('您是登录用户: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('登出'); ?> &raquo;</a></p>
            <?php else: ?>
    		<p class="fl33">
    			<input type="text" name="author" id="author" class="text" placeholder="<?php _e('小明 or 小红'); ?>" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p class="fl33">
    			<input type="email" name="mail" id="mail" class="text" placeholder="<?php _e('@gmail.com'); ?>" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p class="fl33">
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http:// or https://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <?php endif; ?>
    		<p>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" placeholder="<?php _e('你的评论可以一针见血！'); ?>" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <button type="submit" class="submit"><?php _e('Fire'); ?></button>
            </p>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论关闭了呢！请联系wzb@sa.bi'); ?></h3>
    <?php endif; ?>
</div>
