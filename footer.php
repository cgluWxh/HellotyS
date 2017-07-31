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
<div id="QPlayer">
<div id="pContent">
	<div id="player">
		<span class="cover"></span>
		<div class="ctrl">
			<div class="musicTag marquee">
				<strong>Title</strong>
				 <span> - </span>
				<span class="artist">Artist</span>
			</div>
			<div class="progress">
				<div class="timer left">0:00</div>
				<div class="contr">
					<div class="rewind icon"></div>
					<div class="playback icon"></div>
					<div class="fastforward icon"></div>
				</div>
				<div class="right">
					<div class="liebiao icon"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="ssBtn">
	        <div class="adf"></div>
    </div>
</div>
<ol id="playlist"></ol>
</div>

<script src="<?php $this->options->themeUrl();?>js/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl();?>js/jquery.marquee.min.js"></script>

<script>
	var	playlist = [
{title:"At The Edge",artist:"千坂",mp3:"https://www.zhsrc.cn/wp-content/uploads/2017/07/201707280128484.mp3",cover:"https://p4.music.126.net/JGcyWxeFzA6Y59YD9_fBkQ==/109951162827912088.jpg?param=106y106",}
];
  var isRotate = false;
  var autoplay = false;
</script>
<script src="<?php $this->options->themeUrl();?>js/player.js"></script>
<script src="<?php $this->options->themeUrl();?>js/prism.js"></script>
<script>

function bgChange(){
	var lis= $('.lib');
	for(var i=0; i<lis.length; i+=2)
	lis[i].style.background = 'rgba(246, 246, 246, 0.5)';
}
window.onload = bgChange;
</script>
<footer id="footer" role="contentinfo">
    Copyright &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.<br /><a href="<?php $this->options->siteUrl(); ?>">首页</a>    <a href="<?php $this->options->siteUrl(); ?>/links.html">友链</a>    <a href="<?php $this->options->siteUrl(); ?>/about.html">关于</a>
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
    if (typeof Prism !== 'undefined') 
    {
        Prism.highlightAll(true,null);
    }

});
</script>
<div class="setting_tool iconfont"><a href="#top" title="回到顶部"><i class="fa fa-angle-up"></i></a><a class="set-view-mode" href="javascript:void(0)" title="夜间模式"><i class="fa fa-moon-o"></i></a><a title="回到底部"  href="#bottom"><i class="fa fa-angle-down"></i></a>
</div>
<a name="bottom"></a>
<?php $this->footer(); ?>
</body>
</html>
