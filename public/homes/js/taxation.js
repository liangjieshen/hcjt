// 方案
function setPlan(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        menu.className=i==cursel?"type-active":"";
        i == cursel ? $("#plan_ul_"+i).fadeIn('slow') : $("#plan_ul_"+i).hide()
    }
}

//定制方案
$("#plan_ul_1 li").hover(function(){
    $(this).css('background-color', '#f26d00');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+9;
            $(this).children('img').attr('src', "/homes/image/shuiwu/icon-"+num+".png");
        }
    }
    $(this).children('p').css('color', '#fff');
},function(){

    $(this).css('background-color', '#f6f7fa');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('img').attr('src', "/homes/image/shuiwu/icon-"+num+".png");
        }
    }
    $(this).children('p').css('color', '#333333');
});
$("#plan_ul_2 li").hover(function(){
    $(this).css('background-color', '#f26d00');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('img').attr('src', "/homes/image/shuiwu/qiye/icon-0"+num+".png");
        }
    }
    $(this).children('p').css('color', '#fff');
},function(){

    $(this).css('background-color', '#f6f7fa');
    for (var i = 0; i<=8; i++) {
        if ($(this).index() == i) {
            var num = i+1;
            $(this).children('img').attr('src', "/homes/image/shuiwu/qiye/icon-"+num+".png");
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


// 固定
$(document).click(function(e){
    var target = $(e.target);
    if(target.closest(".phone-fixed").length != 0) return;
    if(target.closest(".setPhone").length != 0) return;
    if(target.closest(".setOnline").length != 0) return;
    $(".phone-fixed").hide();
})




