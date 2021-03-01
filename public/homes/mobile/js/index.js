// 图片放大
// $(function () {
//     $('.enter-hc-img img').bootstrapViewer(); //The default image source file path is the src attribute of the img tag.
//     $(".case-left-box ul li img").bootstrapViewer();
//     $(".certificate li img").bootstrapViewer();
//     $(".cooperate-conent ul li img").bootstrapViewer();
//     $(".news-box-left img").bootstrapViewer();
// })



/*行业案例*/
function setCase(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        menu.className=i==cursel?"case-active":"";
        i == cursel ? $("#con_case_"+i).fadeIn('slow') : $("#con_case_"+i).hide()
    }
}



/*证书轮播*/
//定时器返回值
var time=null;
//记录当前位子
var nexImg = 0;
//用于获取轮播图图片个数
var imgLength = $(".c-banner .banner ul").length;
//当时动态数据的时候使用,上面那个删除
// var imgLength =0;
//设置底部第一个按钮样式
$(".c-banner .jumpBtn ul li[jumpImg="+nexImg+"]").css("background-color","#f26d00");

//页面加载
$(document).ready(function(){
    // dynamicData();
    //启动定时器,设置时间为3秒一次
    time =setInterval(intervalImg,5000);
});

//轮播图
function intervalImg(){
    if(nexImg<imgLength-1){
        nexImg++;
    }else{
        nexImg=0;
    }
    
    $(".c-banner .banner ul").eq(nexImg).css("display","block");
    $(".c-banner .banner ul").eq(nexImg-1).css("display","none");
    $(".c-banner .jumpBtn ul li").css("background-color","#b5b5b5");
    $(".c-banner .jumpBtn ul li[jumpImg="+nexImg+"]").css("background-color","#f26d00");
}

//轮播图底下按钮
//动态数据加载的试用应放在请求成功后执行该代码,否则按钮无法使用
$(".c-banner .jumpBtn ul li").each(function(){
    //为每个按钮定义点击事件
    $(this).click(function(){
        clearInterval(time);
        $(".c-banner .jumpBtn ul li").css("background-color","#b5b5b5");
        jumpImg = $(this).attr("jumpImg");
        if(jumpImg!=nexImg){
            var after =$(".c-banner .banner ul").eq(jumpImg);
            var befor =$(".c-banner .banner ul").eq(nexImg);
            
            after.css("display","block");
            befor.css("display","none");
            nexImg=jumpImg;
        }
        $(this).css("background-color","#f26d00");
        time =setInterval(intervalImg,6000);
    });
});



// 企业合作
function setTab(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        menu.className=i==cursel?"hover":"";
        i == cursel ? $("#con_menu_"+i).fadeIn('slow') : $("#con_menu_"+i).hide()
    }
}



// 新闻政策
function setNews(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        menu.className=i==cursel?"news-active":"";
        i == cursel ? $("#con_cateNews_"+i).fadeIn('slow') : $("#con_cateNews_"+i).hide()
    }
}