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
    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<br /><a href="//www.miitbeian.gov.cn">湘ICP备16019950号-1</a><br /><a href="//zhenbang.pw">首页</a>    <a href="//zhenbang.pw/links.html">友链</a>    <a href="//zhenbang.pw/about.html">关于</a><br /><a href=http://www.h3721.cn target=_blank>百度SEO</a><a href="/zhenbang-admin">~</a>
</footer><!-- end #footer -->

<script src="http://apps.bdimg.com/libs/jquery/2.1.1/jquery.js"></script>
<script src="<?php $this->options->themeUrl();?>js/jquery.pjax.js"></script>
<div style="display:none;"><iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=330 height=450 src="//music.163.com/outchain/player?type=0&id=750838476&auto=1&height=430"></iframe></div>
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

<?php $this->footer(); ?>
</body>
</html>
