<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if($this->is('index')): ?> - <?php $this->options->description(); ?><?php endif; ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="https://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <link rel="icon" href="favicon.ico" />
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('player.css'); ?>">

    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<div class="covers"></div>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>
<header id="header" class="clearfix">
    <div class="container">
        <div class="row">
            <div class="site-name col-mb-12 col-5">
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <?php $this->options->title() ?>
                </a>

            </div>
            <div class="site-search col-7 kit-hidden-tb">
                <nav id="nav-menu" class="clearfix" role="navigation">
                    <a class="category-level-1 category-child category-level-odd" href="<?php $this->options->siteUrl(); ?>">主页</a>                
<a class="category-level-1 category-child category-level-odd" href="<?php $this->options->siteUrl(); ?>/links.html">友链</a> 
<a class="category-level-1 category-child category-level-odd" href="<?php $this->options->siteUrl(); ?>/about.html">关于</a>                               

                </nav>
            </div>

        </div><!-- end .row -->
    </div>
</header><!-- end #header -->
<div id="body">
<div class="container">
 <p class="description"><?php $this->options->description() ?></p>
</div>
<div class="width100">
   
    <div class="container">
        <div class="row">

    
    
