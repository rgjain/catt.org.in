$(function(){
	if ($('#banner').length > 0) {
		window.f = new flux.slider('#banner', {
			transitions : ["concentric", "slide", "blocks", "blocks2", "warp", "swipe"],
			delay : 6000
		});
	}

	$("#sendMsg").click(function () {
		var contactusForm = $("#contactus-form");

		if (contactusForm.find("#name").val() == "" || contactusForm.find("#emailid").val() == "" || contactusForm.find("#message").val() == "") {
			alert("All fields are required. Kindly re-check your entries");
		} else {
			var ajaxData = {
				url : "php/sendcontactusemail.php",
				type : "POST",
				data : contactusForm.serialize(),
				success : function (resp) {
					alert(resp);
				}
			};
		}

		$.ajax(ajaxData);
	});
});