$(function(){
	if ($('#banner').length > 0) {
		window.f = new flux.slider('#banner', {
			transitions : ["concentric", "slide", "blocks", "blocks2", "warp", "swipe"],
			delay : 6000
		});
	}

	$("#sendMsg").click(function () {
		var contactusForm = $("#contactus-form"),
			msg = "";

		if (contactusForm.find("#name").val() == "" || contactusForm.find("#emailid").val() == "" || contactusForm.find("#message").val() == "") {
			alert("All fields are required. Kindly re-check your entries");
		} else {
			var ajaxData = {
				url : "php/sendcontactusemail.php",
				type : "POST",
				dataType : "text",
				data : contactusForm.serialize(),
				success : function (resp) {
					console.log(resp);
					if (resp == "true") {
						msg = '<span>Thank you for contacting CATT. We will get back to you soon</span>'
					} else {
						msg = '<span>There was an error sending the message. Please try again</span>'
					}
					$("#sendMsg").after(msg);
				}
			};
		}

		$.ajax(ajaxData);
	});
});