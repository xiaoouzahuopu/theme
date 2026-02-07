<?php
if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

function themeConfig($form)
{
    $logo = new Typecho_Widget_Helper_Form_Element_Text(
        'logo',
        null,
        null,
        _t('站点 Logo'),
        _t('填写图片链接，不填写则显示文字标题。')
    );

    $description = new Typecho_Widget_Helper_Form_Element_Textarea(
        'heroDescription',
        null,
        null,
        _t('首页描述'),
        _t('显示在首页顶部的简短描述。')
    );

    $form->addInput($logo);
    $form->addInput($description);
}

function themeFields($layout)
{
    $cover = new Typecho_Widget_Helper_Form_Element_Text(
        'cover',
        null,
        null,
        _t('封面图'),
        _t('文章列表封面图链接。')
    );

    $layout->addItem($cover);
}
