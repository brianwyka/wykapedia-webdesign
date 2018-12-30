// JavaScript Document

var Code = {
	
	selectedType: null,
	
	toggle: function (type) {
		if (type == this.selectedType) {
			this.hide(type);
		} else {
			this.show(type);
		}
	},
	
	hide: function (type) {
		$('#' + type + '-code').slideUp('slow');
		Code.selectedType = null;
	},
	
	show: function (type) {
		var selectedType = Code.selectedType;
		Code.hide(selectedType);
		if (selectedType != type) {
			$('#' + type + '-code').slideDown('slow');
		}
		Code.selectedType = type;
	}
	
};

var Nav = {};

Nav.indices = {
	home: 0,
	services: 1,
	examples: 2,
	portfolio: 3,
	contact: 4,
	page_not_found: 5
};

Nav.cache = {};

Nav.getHash = function () {
	var hash = window.location.hash;
	if (hash == '' || hash == '#') {
		hash = 'home';
	} else {
		hash = hash.slice(1);
	}
	return hash;
};

Nav.handleHashChange = function () {
	var navLink = $("#nav-" + Nav.getHash());
	var page;
	if (navLink.length < 1) {
		page = 'page_not_found';
	} else {
		page = navLink.attr('href').slice(1);
	}
	$(".nav-link").removeClass('on');
	navLink.addClass('on');
	$('#splash').cycle(Nav.indices[page]);
	$('#content').load('pub/pages/' + page + '.php', function () {
		
	});
	Nav.cache[page] = $('#content').html();
};

$(document).ready(function () {
	
	$(window).hashchange(Nav.handleHashChange);
	
	$(window).hashchange();
	
	$('#splash').cycle({
		fx: 'scrollLeft',
		timeout: 0,
		speed: 1000,
		startingSlide: Nav.indices[Nav.getHash()]
	});
	
	swfobject.embedSWF("http://apps.lls.org/Apps360//genericWidget.swf", 
					   "etoolsFundraiserWidget", "184", "250", "9.0.0", 
					   "http://apps.lls.org/Apps360//expressInstall.swf", 
		{
			programGroupName:"tnt", constituentID:"1610557071", eventID:"11615"
		},
		{
			bgcolor:"#ffffff"
		},
		{ }
	);
	
});
