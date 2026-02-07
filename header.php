<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit; } ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
        'category'  => _t('分类 %s 下的文章'),
        'search'    => _t('包含关键字 %s 的文章'),
        'tag'       => _t('标签 %s 下的文章'),
        'author'    => _t('%s 发布的文章')
    ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <?php $this->header(); ?>
</head>
<body>
<header class="site-header">
    <div class="container navbar">
        <a class="logo" href="<?php $this->options->siteUrl(); ?>">
            <?php if ($this->options->logo): ?>
                <img src="<?php $this->options->logo(); ?>" alt="<?php $this->options->title(); ?>" style="height: 32px;">
            <?php else: ?>
                <?php $this->options->title(); ?>
            <?php endif; ?>
        </a>
        <nav class="nav-links">
            <a href="<?php $this->options->siteUrl(); ?>"><?php _t('首页'); ?></a>
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while ($pages->next()): ?>
                <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
        </nav>
    </div>
</header>
