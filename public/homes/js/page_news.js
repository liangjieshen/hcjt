$(".policy-left ul li").on('click', function(){

	$(".policy-left ul li a").removeClass('policy-active');
	$(this).children('a').addClass('policy-active');

	$(".newsContent .policy-right").css('display', 'none');
	$(".newsContent .policy-right").eq($(this).index()).fadeToggle();

});