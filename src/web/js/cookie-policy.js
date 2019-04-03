$(function () {
	if (!$.cookie("cookie-policy")) {
		$('.cookie-policy').show();
	}
	$('.cookie-policy .close-button').click(function () {
		$.cookie("cookie-policy", 1);
		$('.cookie-policy').hide();
	});
});