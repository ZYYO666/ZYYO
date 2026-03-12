
<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<div class="index">
        <div class="index-head">
            <div style="background-image: url(<?php $this->options->banner(); ?>);" class="banner">
            
                <div class="banner-icon">
                    <div onclick="sideopenbutton1()" class="icon1"><i style="font-size:20px;color: #ffffff;" class=" fas fa-user-circle"></i></div>
                    <div onclick="sideopenbutton()" class="icon2"> <i style="font-size:20px;color: #ffffff;" class="fas fa-sliders-h"></i></i>
                    </div>
                </div>
                
                

            </div>
                            <div class="author-bar">
              <div style="background-image: url(<?php $this->options->logoUrl() ?>);" class="author-logo"></div>
                    <div class="author-title"><?php $this->options->authortitle(); ?></div>
                    <div class="author-yiyan"><?php $this->options->yiyan(); ?></div>
              
            </div>
                
        </div>
<div class="tab">
            <div class="tab1">
<div id="" class="option option1"> 全部</div>
            <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<div  id="{permalink}" class="option">{name}</div>'); ?>
        
    </div>
        </div>
 

<div class="article-list">
<div class="article-list-1">
           <?php while ($this->next()): ?>           
     <article>
 <div class="article-left">
 <div style="background-image: url(<?php $this->options->logoUrl() ?>);" class="author-logo-small"></div>
 </div>
     <div class="article-right"> <div class="article-top"><div class="article-author-title">夏天</div><div class="article-date"><?php $this->date('Y-m-d'); ?></div></div><div class="article-center"><div class="article-card"><a href="<?php $this->permalink() ?>"> <div class="article-title"><?php $this->title() ?></div></a><div class="article-des">  <?php $this->excerpt(40,'...');?></div> </div>  </div>  <div class="article-bottom">
                  <div class="article-bottom-card">  <i style="font-size:12px;color: ##45507d;" class="far fa-comment"></i><?php $this->commentsNum('%d '); ?> <i style="margin-left:18px;font-size:12px;color: ##45507d;" class="far fa-thumbs-up"></i>12        <i style="margin-left:18px;font-size:12px;color: ##45507d;" class="fas fa-fire-alt"></i>162</div></div>
    </div>
    
       

</article>
     
        
    <?php endwhile; ?>
    
<?php $this->pageLink('<div onclick="jiazai()" class="pagelink"><span class="page-link-1">点击加载下一页</span></div>','next'); ?>
        
    </div>
</div>


       
        <div class="footer">
        
        
   

       
        </div>
    </div>