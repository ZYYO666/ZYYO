<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, 'https://zyyo.net/a.jpg', _t('头像'), _t('在这里填入一个头像 URL 地址'));
    $form->addInput($logoUrl);
        $banner = new Typecho_Widget_Helper_Form_Element_Text('banner', NULL, 'http://p6.qhimg.com/bdm/1024_768_85/t011d2c65aa971f7ba2.jpg', _t('banner图'), _t('在这里填入URL 地址'));
    $form->addInput($banner);
        $font= new Typecho_Widget_Helper_Form_Element_Text('font', NULL, 'https://zyyo.net/usr/themes/Ying/1.woff', _t('字体'), _t('在这里填入一个 URL 地址'));
    $form->addInput($font);
    $authortitle = new Typecho_Widget_Helper_Form_Element_Text('authortitle', NULL, 'ZYYO', _t('标题'), _t('在这里写标题'));
    $form->addInput($authortitle);
    $yiyan = new Typecho_Widget_Helper_Form_Element_Textarea('yiyan', NULL, '为了热爱奋斗', _t('一言'), _t('在这里填入一段话，将会显示在头像底部'));
    $form->addInput($yiyan);
    
    $footerbeian = new Typecho_Widget_Helper_Form_Element_Text('footerbeian', NULL, NULL, _t('备案号'), _t('如果你的网站备案，请在这里填写备案号，否则请空着它。'));
    $form->addInput($footerbeian);
}
function mou($cid=NULL){
    if(empty($cid)){
        $cid = 1;
    }
    $db = Typecho_Db::get();
    $query = $db->select()
->from('table.contents')
->join('table.relationships', 'table.contents.cid = table.relationships.cid',Typecho_Db::INNER_JOIN)
->where('table.contents.type = ?', 'post')->where('table.relationships.mid = ?', $cid);
    
    $arr =  $db->fetchAll($query);
    return $arr;
    // print_r($arr) ;
}