<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit; } ?>
<?php $this->need('header.php'); ?>

<section class="hero">
    <div class="container">
        <h1><?php $this->options->title(); ?></h1>
        <p><?php echo $this->options->heroDescription ? $this->options->heroDescription : $this->options->description(); ?></p>
    </div>
</section>

<div class="container layout">
    <main class="post-list">
        <?php if ($this->have()): ?>
            <?php while ($this->next()): ?>
                <article class="card post-item">
                    <h2><a href="<?php $this->permalink(); ?>"><?php $this->title(); ?></a></h2>
                    <div class="post-meta">
                        <span><?php $this->date('Y-m-d'); ?></span>
                        <span><?php $this->category(', '); ?></span>
                        <span><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t('%d 条评论')); ?></span>
                    </div>
                    <div class="post-content">
                        <?php $this->excerpt(180, '...'); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <article class="card">
                <h2><?php _t('暂无文章'); ?></h2>
            </article>
        <?php endif; ?>

        <div class="pagination">
            <div><?php $this->pageLink('← ' . _t('上一页')); ?></div>
            <div><?php $this->pageLink(_t('下一页') . ' →', 'next'); ?></div>
        </div>
    </main>

    <?php $this->need('sidebar.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
