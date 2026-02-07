<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit; } ?>
<section class="post-content">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
        <h3><?php _t('评论'); ?></h3>
        <ol>
            <?php while ($comments->next()): ?>
                <li>
                    <strong><?php $comments->author(); ?></strong>
                    <span><?php $comments->date('Y-m-d H:i'); ?></span>
                    <div><?php $comments->content(); ?></div>
                </li>
            <?php endwhile; ?>
        </ol>
    <?php endif; ?>

    <?php if ($this->allow('comment')): ?>
        <h3><?php _t('发表评论'); ?></h3>
        <form method="post" action="<?php $this->commentUrl(); ?>">
            <p>
                <input type="text" name="author" placeholder="<?php _t('称呼'); ?>" required>
            </p>
            <p>
                <input type="email" name="mail" placeholder="<?php _t('邮箱'); ?>" required>
            </p>
            <p>
                <textarea name="text" rows="5" placeholder="<?php _t('写下你的评论'); ?>" required></textarea>
            </p>
            <p>
                <button type="submit"><?php _t('提交'); ?></button>
            </p>
        </form>
    <?php endif; ?>
</section>
