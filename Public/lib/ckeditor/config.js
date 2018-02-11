/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.language = 'zh-cn';
    config.filebrowserBrowseUrl = '/lib/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/lib/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/lib/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/lib/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/lib/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/lib/kcfinder/upload.php?opener=ckeditor&type=flash';
    // 屏蔽自动拼写检查功能
    config.disableNativeSpellChecker = false;
    config.scayt_autoStartup = false;
    // 工具栏布局
    config.toolbar = [
        ['Source', 'Maximize'],
        ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord'],
        ['Find', 'Replace', '-', 'SelectAll', 'RemoveFormat'],
        ['Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar'],
        ['Link', 'Unlink'],
        ['Print'],
        '/',
        ['Format', 'FontSize', '-', 'TextColor', 'BGColor'],
        ['Bold', 'Italic', 'Strike'],
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', 'Blockquote']
    ];
    config.toolbar_Basic = [
//        ['Source', '-', 'Bold', 'Italic'],
//        
//        图片       表格       水平线          特殊字符
        ['Image', 'Flash', 'Table', 'HorizontalRule', 'SpecialChar'],
        ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript'],
//         数字列表          实体列表            减小缩进    增大缩进
        ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'],
//        左对齐             居中对齐          右对齐          两端对齐
        ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'],
//        超链接  取消超链接
        ['Link', 'Unlink'],
        '/',
//         样式       格式      字体    字体大小
        ['Styles', 'Format', 'Font', 'FontSize'],
//        文本颜色     背景颜色
        ['TextColor', 'BGColor'],
//        全屏           显示区块
        ['Maximize', 'ShowBlocks', '-']
    ];
    // 默认字号
    config.fontSize_defaultLabel = '12px';
    config.fontSize_sizes = '12/12px;14/14px;16/16px;18/18px;20/20px;22/22px;24/24px;26/26px;28/28px;30/30px;32/32px';
    // 默认格式
    config.format_tags = 'p;h1;h2;h3;pre;address;div';
};
