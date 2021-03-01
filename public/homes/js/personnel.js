// 业务外包内容
$(".medio-ul li").hover(function(){
    
    $(this).children('.medio-li-box').css('background-color', '#f26d00');
    for (var i = 0; i<=6; i++) {
        if ($(this).index() == i) {
            var num = i+7;
            $(this).children('.medio-li-box').children('.medio-li-img').children('img').attr('src', "/homes/image/renshi/icon-"+num+".png");
        }
    }
    $(this).children('.medio-li-box').children('.medio-li-con').children('p').css('color', '#fff');
    $(this).children('.medio-li-box').children('.medio-li-con').children('span').css('color', '#fff');
},function(){

    $(this).children('.medio-li-box').css('background-color', '#fff');
    for (var i = 0; i<=6; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('.medio-li-box').children('.medio-li-img').children('img').attr('src', "/homes/image/renshi/icon-"+num+".png");
        }
    }
    $(this).children('.medio-li-box').children('.medio-li-con').children('p').css('color', '#333');
    $(this).children('.medio-li-box').children('.medio-li-con').children('span').css('color', '#666666');
});