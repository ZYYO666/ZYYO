
<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>
 <?php if ($this->is('index')){ 
 $this->options->title(); 
 }else{
  $this->archiveTitle([
     'category' => _t('分类 %s 下的文章'),
     'search'   => _t('包含关键字 %s 的文章'),
      'tag'      => _t('标签 %s 下的文章'),
     'author'   => _t('%s 发布的文章')
        ], '', '  '); 
         }  ?></title>
           <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.4.0/css/all.css"> 
                 <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.9.0/css/all.css"> 
           <link rel="stylesheet" href="<?= $this->options->themeUrl . '/static/main.css'; ?>">
         <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- pjax引入 -->
<script src="https://cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js">
</script>
  
     <?php $this->header(); ?>
     <style>
  @font-face {
  font-family: 'family-name';
  src: url('<?php $this->options->font(); ?>');
  font-display: swap;
}
*{font-family: "family-name"}
     </style>

</head>
<body>

<!--以上为header的内容-->



<div onclick="leftclose()" class="left">
 <div class="left-main">

        <div class="menu">

       

<a href="/"><div id="zy" class="menu-option">🍑主页</div></a>
    <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<a href="{permalink}"><div id="{slug}" class="menu-option">{title}</div></a>'); ?>
    </div>
    </div>
    </div>