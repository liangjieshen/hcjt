$(".youshi-box ul li").hover(function(){
	$(".youshi-box ul li").children('img').attr('src', "/homes/mobile/image/agent/img_10.png");
	$(".youshi-box ul li").children('div').removeClass('youshi-active');
	$(".youshi-box ul li").eq(0).children('div').children('div').children('img').attr('src', "/homes/mobile/image/agent/icon_1.png");

	$(this).children('img').attr('src', "/homes/mobile/image/agent/img_11.png");
	$(this).children('div').addClass('youshi-active');
	for (var i = 0; i<=4; i++) {
        if ($(this).index() == i) { 
            var num = i+1;
            $(this).children('div').children('div').children('img').attr('src', "/homes/mobile/image/agent/icon-"+num+".png");
        }
    }
}, function(){
	$(this).children('img').attr('src', "/homes/mobile/image/agent/img_10.png");
	$(this).children('div').removeClass('youshi-active');
	for (var i = 0; i<=4; i++) {
        if ($(this).index() == i) { 
            var num = i+1;
            $(this).children('div').children('div').children('img').attr('src', "/homes/mobile/image/agent/icon_"+num+".png");
        }
    }
})