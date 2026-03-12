
<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<!--Right-->
<div onclick="rightclose()" class="right">
 <div class="right-main">

        <div class="right-content">

    </div>
    </div>
    </div>
    
    
    
    
        <!-- 以下为footer内容 -->

<script>
$(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
    container: 'body',
    fragment: 'body',
    timeout: 8000,
})
</script>
        <?php if($this->is('page', 'about')){  ?>
         <script>
    var divElement = document.getElementById("about");
     divElement.classList.add("menu-option1");
    </script>  
 <?php   }elseif($this->is('page', 'friends')){ ?>           
         <script>
    var divElement = document.getElementById("friends");
     divElement.classList.add("menu-option1");
    </script>
  <?php   }elseif($this->is('page', 'ly')){ ?>          
         <script>
    var divElement = document.getElementById("ly");
     divElement.classList.add("menu-option1");
    </script>
 <?php    }else{ ?>           
         <script>
    var divElement = document.getElementById("zy");
     divElement.classList.add("menu-option1");
    </script>  
 <?php   }   ?>
       
       
      <script src="<?= $this->options->themeUrl . '/static/main.js'; ?>">
</script>
</body>
</html>