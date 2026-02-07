<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit; } ?>
<?php $this->need('header.php'); ?>

<section class="hero">
    <div class="container">
        <h1><?php _t('页面未找到'); ?></h1>
        <p><?php _t('抱歉，你访问的页面不存在。'); ?></p>
    </div>
</section>

<div class="container">
    <div class="card">
        <a href="<?php $this->options->siteUrl(); ?>"><?php _t('返回首页'); ?></a>
    </div>
</div>

<?php $this->need('footer.php'); ?>
