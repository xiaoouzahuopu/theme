<?php if (!defined('__TYPECHO_ROOT_DIR__')) { exit; } ?>
<aside class="card">
    <div class="sidebar-section">
        <h3><?php _t('关于'); ?></h3>
        <p><?php echo $this->options->heroDescription ? $this->options->heroDescription : _t('在这里写下你的签名。'); ?></p>
    </div>
    <div class="sidebar-section">
        <h3><?php _t('分类'); ?></h3>
        <div class="category-list">
            <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
            <?php while ($categories->next()): ?>
                <a class="category" href="<?php $categories->permalink(); ?>"><?php $categories->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>
    <div class="sidebar-section">
        <h3><?php _t('标签'); ?></h3>
        <div class="tag-list">
            <?php $this->widget('Widget_Metas_Tag_Cloud', 'limit=20')->to($tags); ?>
            <?php while ($tags->next()): ?>
                <a class="tag" href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a>
            <?php endwhile; ?>
        </div>
    </div>
</aside>
