

function sideopenbutton(){
open(); 
}
function leftclose(){
close(); 
}

function open() {
    $(".left-main").toggleClass("left-main-open"); 
    $(".left").toggleClass("left-open");
    $(".left").css("pointer-events", "auto"); 
}
function close() {
    $(".left-main").toggleClass("left-main-open");
    $(".left").toggleClass("left-open");
    $(".left").css("pointer-events", "none");
}




function sideopenbutton1(){
open1(); 
}
function rightclose(){
close1(); 
}

function open1() {
    $(".right-main").toggleClass("right-main-open"); 
    $(".right").toggleClass("right-open");
    $(".right").css("pointer-events", "auto"); 
}
function close1() {
    $(".right-main").toggleClass("right-main-open");
    $(".right").toggleClass("right-open");
    $(".right").css("pointer-events", "none");
}


//点击加载更多
//点击加载更多



    //点击下一页的链接(即那个a标签)
      //点击加载更多
jQuery(document).ready(function($) {








function jiazai()

{
    //点击下一页的链接(即那个a标签)
    $('.next').click(function() {
    
        $this = $(this);
        $('.page-link-1').text('正在努力加载'); 
        var href = $this.attr('href');  
        if (href != undefined) { 
            $.ajax({ 
                url: href,
                type: 'get',
                error: function(request) {
                },
                success: function(data) {
                      $('.page-link-1').text('点击查看更多'); 
                    var $res = $(data).find('.article-list-1'); 
                    $('.article-list').append($res.fadeIn(500)); 
                    var target = $this;
                    var position = target.offset().top - 100;
                    $('html, body').animate({
                    scrollTop: position
                    }, 1100, function() {
                     });
                    var newhref = $(data).find('.next').attr('href'); 
                    if (newhref != undefined) {
                        $('.next').attr('href', newhref);
                    } else {
                        $('.next').remove(); 
                    }
                }
            });
            
        }
     return false;
        });
        
}
        
        jiazai();
        
        
        
   // 获取所有具有类名为 "option" 的 div 元素
const divs = document.querySelectorAll(".option");

// 为每个 div 元素添加点击事件监听器
divs.forEach((div) => {
  div.addEventListener("click", function() {
    // 移除所有 div 元素的 option 和 option1 类名

    // 检查当前点击的 div 元素的类名
  
    divs.forEach((d) => {
      d.classList.remove("option1");
    });

      div.classList.add("option1");
       $('.article-list-1').remove();
       var id = div.id;
                 $.ajax({ 
                url: id,
                type: 'get',
                error: function(request) {
                },
                success: function(data) {
                    var $res1 = $(data).find('.article-list-1'); 
                    $('.article-list').append($res1.fadeIn(500)); 
                jiazai();
                     
                    
                }
            });
  });
});     
        
        
        
        
        
        
});
    
        
        
        
        
        
        
   
    
    
    
    
    
    
    
    