jQuery.fn.animateAuto = function(prop, speed, appendTo, callback){
	var elem, height, width;
	return this.each(function(i, el){
		el = jQuery(el), elem = el.clone().css({"height":"auto","width":"auto"}).appendTo(appendTo);
		height = elem.css("height"),
		width = elem.css("width"),
		elem.remove();

		if(prop === "height")
			el.animate({"height":height}, speed, callback);
		else if(prop === "width")
			el.animate({"width":width}, speed, callback);  
		else if(prop === "both")
			el.animate({"width":width,"height":height}, speed, callback);
	});  
};

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
						contactusForm.find("input[type=text]").val("");
					} else {
						msg = '<span>There was an error sending the message. Please try again</span>'
					}
					$("#sendMsg").after(msg);
				}
			};
		}

		$.ajax(ajaxData);
	});

	$(".more-less").click(function () {
		var el = $(this),
			parentEl = el.closest(".activity-item"),
			isexpanded = false;

		el.toggleClass("less");
		parentEl.toggleClass("expanded");

		isexpanded = el.hasClass("less");

		if (isexpanded) {
			parentEl.animateAuto("height", 300, "#activities .content");
		} else {
			parentEl.animate({"height" : 150}, 300);
		}
	});

	if ($(".activity-images").length > 0) {
		$(".activity-images").each(function() {
			$(this).magnificPopup({
				delegate: 'a',
				type: 'image',
				gallery: {
					enabled:true
				}
			});
		});
	}
	
	if ($("#highlights").length > 0) {
		$("#highlights").each(function() {
			$(this).magnificPopup({
				delegate: 'a',
				type: 'image',
				gallery: {
					enabled:true
				}
			});
		});
	}
	
	$(".tabs li").click(function(evt) {
		var tgtEl = $(this),
			index = tgtEl.index();
		
		tabFun(index);
	});
	
	var tabFun = function (index) {
		$(".tab-content").hide();
		$(".tabs li").removeClass("active");
		
		$(".tabs li").eq(index).addClass("active");
		$(".tab-content").eq(index).fadeIn();
	};
	
	tabFun(0);
	
});