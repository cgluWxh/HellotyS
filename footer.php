<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
    </div>
</div><!-- end #body -->

<div class="container">
<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=30')->to($tags); ?>
<ul class="tags-list">
<?php while($tags->next()): ?>
    <li><a href="<?php $tags->permalink(); ?>" title='<?php $tags->name(); ?>'><?php $tags->name(); ?></a></li>
<?php endwhile; ?>
</ul>
</div>

<footer id="footer" role="contentinfo">
    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<br /><a href="//www.miitbeian.gov.cn">湘ICP备16019950号-1</a><br /><a href="<?php $this->options->siteUrl(); ?>">首页</a>    <a href="<?php $this->options->siteUrl(); ?>/links.html">友链</a>    <a href="<?php $this->options->siteUrl(); ?>/about.html">关于</a>
</footer><!-- end #footer -->

<script src="https://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script src="<?php $this->options->themeUrl();?>js/jquery.pjax.js"></script>
<script src="<?php $this->options->themeUrl();?>js/night-mode.js"></script>
<script>
$(document).on('pjax:send', function() {
    $(".spinner").css("display", "block");
    $(".spinner > div").css("display", "inline-block");
});
$(document).on('pjax:complete', function() {
    $(".spinner").css("display", "none");
    $(".spinner > div").css("display", "inline-block");
});
</script>
<div class="setting_tool iconfont"><a href="#top" title="回到顶部"><i class="fa fa-angle-up"></i></a><a class="set-view-mode" href="javascript:void(0)" title="夜间模式"><i class="fa fa-moon-o"></i></a><a title="回到底部"  href="#bottom"><i class="fa fa-angle-down"></i></a>
</div>
<a name="bottom"></a>
<?php $this->footer(); ?>
</body>
</html>
