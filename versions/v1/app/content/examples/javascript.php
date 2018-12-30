<div class="container">
	<h3>JavaScript</h3>
    <p>
    	JavaScript is a client-side scripting language which allows for application development and a "live feel."  
        Client-side means that the scripts are being run in your browser as opposed to the server where the webpage is.  
        JavaScript can be used to create AJAX applications which creates the effect of a desktop application with as little 
        loading and reloading as possible.
    </p>
</div>

<h3>Example Code</h3>
<div class="code">
    
<pre>Date.prototype.getMonthName = function() {
	var month_name = ['January','February','March','April','May','June',
    	'July','August','September','October','November','December'];
	return month_name[this.getMonth()];
} 
Date.prototype.getDayName = function() {
	var day_name = ['Sunday','Monday','Tuesday','Wednesday',
    	'Thursday','Friday','Saturday'];
	return day_name[this.getDay()];
}
if(!Array.indexOf){
	Array.prototype.indexOf = function(object){
		for(var i=0; i&lt;this.length; i++){
			if(this[i] == object) return i;
		}
		return -1;
	}
}
String.prototype.trim = function(){
	return this.replace(/^\s+|\s+$/g, '');
}
String.prototype.isSet = function(){
	if(this.trim() == '') return false;
	else return true;
}</pre>
    
</div>