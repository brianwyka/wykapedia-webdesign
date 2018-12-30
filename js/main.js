
var Page = { };

Page.init = function () {
	Forms.init();
};

var Forms = { };

Forms.init = function () {
	
	$("form.ajax").submit(function () {
		var form = $(this);
		var request = $.ajax({
			dataType: "json",
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
		}).done(function (response) {
			form.trigger("reset");
		}).fail(function (error) {
			form.find("div.alert-box.alert").show();
		}).always(function (response) {
			form.find("div.alert-box." + response.status).show();
		});
		return false;
	});
	
};



$(document).ready(Page.init);