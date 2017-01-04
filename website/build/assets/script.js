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

	$("#contributionsForm").validate({
		rules : {
			name : {
				required : true
			},
			emailid : {
				required : true,
				email : true
			},
			address : {
				required : true
			},
			amount : {
				required : true,
				digits : true
			},
			cause : {
				required : true
			},
			date : {
				required : true,
				date : true
			},
			transref : {
				required : true
			}
		},
		messages : {
			name : {
				required : "Name is a required field"
			},
			emailid : {
				required : "Email is a required field",
				email : "Invalid email format"
			},
			address : {
				required : "Address is a required field"
			},
			amount : {
				required : "Please enter the contribution amount",
				digits : "Only numbers are accepted in this field"
			},
			cause : {
				required : "Select the cause for which you have contributed"
			},
			date : {
				required : "Date is a required field",
				date : "Invalid date format"
			},
			transref : {
				required : "Transaction/Reference number is a required field",
			}
		},
		submitHandler : function (form) {
			var $form = $(form);

			$.ajax({
				url : "php/storeContributions.php",
				type : "post",
				data : $form.serialize(),
				success : function (resp) {
					if (resp == "true") {
						$form.find(".msg-area").addClass("success").html("Your donation details have been submitted for review. After review, the 80G certificate will be sent to your provided email address.");
						$form[0].reset();
					} else {
						$form.find(".msg-area").addClass("error").html("There was an error saving the information. Please try again later.");
					}
				}
			});
		}
	});

	$("#contributionsList .btn-approve, #contributionsList .btn-reject").on("click", function () {

		var isBtnApprove = $(this).hasClass("btn-approve");
		var isBtnReject = $(this).hasClass("btn-reject");

		if (isBtnApprove) {
			var question = "Are you sure you want to approve this donation ?";
			var action = "approved";
		} else {
			var question = "Are you sure you want to reject this donation ?";
			var action = "rejected";
		}

		var question = (isBtnApprove) ? "Are you sure you want to approve this donation ?" : "Are you sure you want to reject this donation ?";
		var confirmVal = confirm (question);

		if (!confirmVal) return false;

		var tr = $(this).closest("tr");
		var record_id = tr.data("recordid");

		if (confirmVal) {
			doContributionsUpdate (tr, record_id, action);
		}
	});
});

function doContributionsUpdate (tr, record_id, action) {

	$.ajax({
		url : "php/updateContributions.php",
		type : "post",
		data : {
			record_id : record_id,
			action : action
		},
		success : function (resp) {
			var trClass = (action == "approved") ? "green" : "red";
			var actionBtnCell = tr.addClass(trClass).find(".action-btn-cell");
			if (resp != "error") {
				actionBtnCell.html("<span class='uppercase'>" + action + "</span>");
			} else {
				alert("There was an error completing your request. Please try later");
			}
		}
	})


}
