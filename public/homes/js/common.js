/**
 * 数字滚动特效
 * @param  id       要滚动的id
 * @param  maxNum   最后的数字
 * @param  time     滚动秒数
 * @return {[type]}        [description]
 */
function numScroll(id, maxNum, time) {
    var numDom = document.getElementById(id)
    var numInit = 0
    var addNum = maxNum / (time / 10)
    var minTime = time / maxNum
    var t = setInterval(function() {
        if (numInit >= maxNum) {
            clearInterval(t)
            numDom.innerText = maxNum
        } else {
            numInit += addNum
            numDom.innerText = Math.round(numInit)
        }
    }, 10)
}


// 在线留言
$(".online_service").click(function(){
    window.open('http://p.qiao.baidu.com/cps/chat?siteId=14116522&userId=29330970&siteToken=98672689a9d3c14c28e97f800dec230d', 'newwindow', 'height=680, width=800, top=100,left=300, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no')
})



/**
 * 导航固定
 */
/**
 * 左侧预约方案页面延迟滑动
 * @type {[type]}
 */
var topBegin=$("#header").offset().top;  //获取导航栏（class='positionMiddleNav'）离视口的高度 
$(window).scroll(function(){  //scroll事件
    
    var win_top=$(this).scrollTop(); //获取滚动条位置
    var _top=$(".order-box").offset().top; //获取当前导航栏距视口高度
    var _nav=$("#nav").offset().top;
    if (win_top >= 130) {
        $("#nav").css({'position':'fixed', 'top':'0', 'left':'0'});
    } else {
        $("#nav").css('position', 'static');
    }
    if(win_top>=_top){
        var orderPx = win_top+280;
        $('body').stop().animate({scrollTop:$(".order-box")},1);
        setTimeout(function(){
            $(".order-box").animate({top:orderPx+"px"},1);
            // $(".order-box").removeClass('sidebar-hide').addClss('sidebar-show');
        }, 500)
        
    } else {
        var orderPx = win_top+280;
        $('body').stop().animate({scrollTop:$(".order-box")},1);
        setTimeout(function(){
            $(".order-box").animate({top:orderPx+"px"},1);
            // $(".order-box").removeClass('sidebar-show').addClss('sidebar-hide');
        }, 500)
    }
})





/**
 * 点击加入收藏
 * @return {[type]} [description]
 */
function shoucang() {
    var url = window.location;
    var title = document.title;
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf("360se") > -1) {
        swal("提示", "由于360浏览器功能限制，请按 Ctrl+D 手动收藏！", "warning");
    }
    else if (ua.indexOf("msie 8") > -1) {
        window.external.AddToFavoritesBar(url, title); //IE8
    }
    else if (document.all) {
    try{
        window.external.addFavorite(url, title);
    }catch(e){
        swal("提示", "您的浏览器不支持,请按 Ctrl+D 手动收藏!", "warning");
    }
    }
    else if (window.sidebar) {
        window.sidebar.addPanel(title, url, "");
    }
    else {
        swal("提示", "您的浏览器不支持,请按 Ctrl+D 手动收藏!", "warning");
    }
}



// 领取方案
$(".receive-box").click(function(){
    $(".receive-box-son").animate({left:'0%'},200);
    $(this).hide();
});
$(".receive-box-son-next").click(function(){
    $(".receive-box-son").animate({left:'-100%'}, 200);
    setTimeout(function(){
        $('.receive-box').show();
    },200)
});

// 获取方案
$(".setOnline").click(function(){
    $(".setOnlineContent").show();
});
$(".setOnlineOut").click(function(){
    $(".setOnlineContent").hide();
})

// 电话咨询
$(".setPhone").hover(function(){
    event.stopPropagation();
    $(".phone-fixed").css('display', 'block');
},function(){
    $(".phone-fixed").css('display', 'none');
});





/******************************************** 验证 ********************************************************/

// 手机和电话验证
function checkPhone(phone){
    if( !(/^1[3456789]\d{9}$/.test(phone)) ){ 
        return false; 
    }
}