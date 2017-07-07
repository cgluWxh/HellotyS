<?php 
/**
 * links
 * 
 * @package custom 
 * 
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-mb-12 col-9" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
<div class="content">
  <?php
$str = preg_replace('#<li><img src="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)><a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#','<a href="$6$7" target="_blank" >
        <div class="jrotty-links waves-effect waves-button waves-float">
            <img
	 src="$1$2"$4>
            <p>$10</p>
        </div>
    </a>',$this->content);

$str = preg_replace('#<li>([1-9][0-9]{4,})<a(.*?) href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#','<a href="$3$4" target="_blank">
        <div class="jrotty-links waves-effect waves-button waves-float"><img
	 src="//q.qlogo.cn/g?b=qq&nk=$1&s=100">
            <p>$7</p>
        </div>
    </a>',$str);

$str = preg_replace('#<li><a href="([^"]*/)?(([^"/]*)\.[^"]*)"(.*?)>(.*?)</a></li>#','<a href="$1$2" target="_blank">
        <div class="jrotty-links waves-effect waves-button waves-float">  
            <p>$5</p>
        </div>
    </a>',$str);
 echo $str;
?>


</div>
    </article>
    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
