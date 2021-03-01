$(document).ready(function() {
	$(".con>a").each(function(i) {
		$(this).click(function() {
			$(this).addClass("active").siblings().removeClass("active");
			$(".news-list").css('display', 'none');
			$(".news-list").eq(i).fadeToggle()
		});
	});
});