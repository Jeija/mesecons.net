function onResize() {
	var width = $(window).width();
	if (width < 530) {
		$("#header_logotext").hide();
		$("#intro .extrainfo").hide();
		$("#header").css("text-align", "center");
		$("#header_logo").css("margin-left", "10px");
	} else {
		$("#header_logotext").show();
		$("#intro .extrainfo").show();
		$("#header").css("text-align", "left");
		$("#header_logo").css("margin-left", "20vw");
	}
}

$(function () {
	onResize();
	$("#footer-year").text((new Date()).getFullYear());
	$(window).resize(onResize);
});
