// JavaScript Document

var Page = {
	
	open: function(path) {
		pathSplit = path.split('/');
		Dom.changeClass(Dom.get('id', 'menu_' + pathSplit[0]), 'on');
		Dom.changeClass(Dom.get('id', 'sub_menu_' + pathSplit[0]), 'on');
		Dom.changeClass(Dom.get('id', 'content'), pathSplit[0]);
		popup = new Popup(null);
		if (pathSplit[1] != null && pathSplit[1].isSet()) {	
			popup.setTitle(pathSplit[1].replace(/_/g, Common.SPACE));
			popup.fill(null, path);
			if (pathSplit[0].equals('request') && pathSplit[1].equals('submit')) {
				popup.addButton('Submit Request', function() {
					AjaxForm.submit('request-form');
				});
			}
			popup.addButton('Close', function() {
				Hash.set(pathSplit[0]);
				popup.close();
			});
			popup.show();
			popup.center(500);
		} else {
			popup.close();
		}
	},
	
	close: function(path) {
		path = path.isSet() ? path : 'home';
		pathSplit = path.split('/');
		Dom.changeClass(Dom.get('id', 'menu_' + pathSplit[0]), 'off');
		Dom.changeClass(Dom.get('id', 'sub_menu_' + pathSplit[0]), 'off');
	},
	
	requestResponse: function() {
		innerHTML = '<p>Thank you for submitting your request.  ';
		innerHTML += 'We will get back to you as soon as possible...</p>'
		Dom.fill('popup-body', innerHTML);
		Dom.get('id', 'popup-button').removeChild(Dom.get('id', 'popup-button').firstChild);
	}
	
};

Window.addOnLoadFunction(function() {
	Config.setAppRoot('webdesign/versions/v1');
	Ajax.setUpdatePath('app/content');
	AjaxForm.setRequestPath('app');
	Hash.addOnChangeFunction(function(oldValue, newValue) {
		Page.close(oldValue);
		Page.open(newValue);
	});
	Hash.compare();
	if (!Hash.get().isSet()) {
		Hash.set('home');
	}
});