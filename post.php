<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit; } ?>
<?php $this->need('header.php'); ?>

<div class="container layout">
    <main class="card">
        <article>
            <h1><?php $this->title(); ?></h1>
            <div class="post-meta">
                <span><?php $this->date('Y-m-d'); ?></span>
                <span><?php $this->category(', '); ?></span>
                <span><?php $this->commentsNum(_t('暂无评论'), _t('1 条评论'), _t('%d 条评论')); ?></span>
            </div>
            <div class="post-content">
                <?php $this->content(); ?>
            </div>
        </article>
        <?php $this->need('comments.php'); ?>
    </main>

    <?php $this->need('sidebar.php'); ?>
</div>

<?php $this->need('footer.php'); ?>
