// 欢创1V1专属定制税筹方案
// 方案
function setPlan(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        menu.className=i==cursel?"plan-active":"";
        i == cursel ? $("#plan_ul_"+i).fadeIn('slow') : $("#plan_ul_"+i).hide()
    }
}



//定制方案
$("#plan_ul_1 li").hover(function(){
	$("#plan_ul_1 li").removeClass('plan-li-active');
	$("#plan_ul_1 li").eq(0).children('div').children('img').attr('src', "/homes/mobile/image/taxation/icon_1.png");
    $(this).css('background-color', '#f26d00');

    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) { 
            var num = i+1;
            $(this).children('div').children('img').attr('src', "/homes/mobile/image/taxation/icon-"+num+".png");
        }
    }
    $(this).children('p').css('color', '#fff');
},function(){

    $(this).css('background-color', '#fff');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('div').children('img').attr('src', "/homes/mobile/image/taxation/icon_"+num+".png");
        }
    }
    $(this).children('p').css('color', '#333333');
});

$("#plan_ul_2 li").hover(function(){
	$("#plan_ul_2 li").removeClass('plan-li-active');
	$("#plan_ul_2 li").eq(0).children('div').children('img').attr('src', "/homes/image/shuiwu/qiye/icon-1.png");
    $(this).css('background-color', '#f26d00');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('div').children('img').attr('src', "/homes/image/shuiwu/qiye/icon-0"+num+".png");
        }
    }
    $(this).children('p').css('color', '#fff');
},function(){

    $(this).css('background-color', '#fff');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('div').children('img').attr('src', "/homes/image/shuiwu/qiye/icon-"+num+".png");
        }
    }
    $(this).children('p').css('color', '#333333');
});



// 案例
function setCase(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        menu.className=i==cursel?"case-active":"";
        i == cursel ? $("#tab_case_"+i).fadeIn('slow') : $("#tab_case_"+i).hide()
    }
}