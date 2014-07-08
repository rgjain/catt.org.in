$(function(){
	if ($('#banner').length > 0) {
		window.f = new flux.slider('#banner', {
			transitions : ["concentric", "slide", "blocks", "blocks2", "warp", "swipe"],
			delay : 6000
		});
	}

	$("#sendMsg").click(function () {
		var ajaxData = {
			url : "php/sendcontactusemail.php",
			type : "POST",
			data : $("#contactus-form").serialize(),
			success : function (resp) {
				alert(resp);
			}
		};

		$.ajax(ajaxData);
	});
});