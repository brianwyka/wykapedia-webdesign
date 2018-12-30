<div class="panel">
	<h2>CSS - Cascading Style Sheets</h2>
	<div class="sub-panel">
		<h3>&raquo; Description</h3>
		<p>
			Cascading Style Sheets, or CSS, control the look of the 
			webpage.  When you think about what type of font and how 
			you want your page to display, you are thinking about 
			CSS.  This is where most browser-compatibility issues 
			arise from.  Special techniques are used to address 
			eratin issues and differences in various browsers.
		</p>		
	</div>
	<div class="sub-panel">
		<h3 class="cursor-hand" onclick="Code.toggle('css')">
			&raquo; Example Rules
		</h3>
		<div class="code-snippet" id="css-code">
<pre>html, body {
	margin: 0px;
	padding: 0px;
}

div {
	margin: 0px;
	padding: 0px;
	display: block;
}

h1, h2, h3, h4, h5, h6 {
	margin: 0px;
	padding: 0px;
	display: block;
}</pre>
		</div>
	</div>
</div>
<div class="panel">
	<h2>HTML - Hypertext Markup Language</h2>
	<div class="sub-panel">
		<h3>&raquo; Description</h3>
		<p>
			Hypertext Markup Language, or HTML, is responsible 
			for the structure and layout of the page.  You can 
			think of it as a tree structure as demonstrated below.  
			The tree strucutre not only allows the CSS to control 
			the look and feel of the page, but it keeps the 
			document well-formed and organized.
		</p>
	</div>
	<div class="sub-panel">
		<h3 class="cursor-hand" onclick="Code.toggle('html')">
			&raquo; Example Markup
		</h3>
		<div class="code-snippet" id="html-code">
<pre>&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Transitional//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt; 
	
	&lt;!--Begin HEAD of document--&gt; 
	&lt;head&gt; 
	
		&lt;!--Begin Metadata--&gt; 
		&lt;meta http-equiv=&quot;content-type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt; 
		&lt;!--End Metadata--&gt; 
	
		&lt;!--Document Title--&gt; 
		&lt;title&gt;wykaPedia Web Design &amp;amp; Development&lt;/title&gt; 
		
		&lt;!--Document Base--&gt; 
		&lt;base href=&quot;http://www.wykapedia.org/&quot; /&gt; 
		
		&lt;!--Document Favicon--&gt; 
		&lt;link rel=&quot;shortcut icon&quot; type=&quot;image/x-icon&quot; href=&quot;/favicon.ico&quot; /&gt; 
		
		&lt;!--Begin StyleSheet Links--&gt; 
		&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;/css/styles.css&quot; /&gt; 
		&lt;!--End StyleSheet Links--&gt; 
		
		&lt;!--Begin Script Includes--&gt; 
		&lt;script type=&quot;text/javascript&quot; src=&quot;/js/script.js&quot;&gt;&lt;/script&gt; 
		&lt;!--End Script Includes--&gt; 
	
	&lt;/head&gt; 
	&lt;!--End HEAD of document--&gt; 
	
	&lt;!--Begin BODY of document--&gt; 
	&lt;body&gt; 
	
		&lt;div id=&quot;canvas&quot;&gt;&lt;/div&gt;
		
	&lt;/body&gt;
	&lt;!--End BODY of document--&gt;
	

&lt;/html&gt;</pre>
		</div>
	</div>
</div>
<div class="panel">
	<h2>JS - JavaScript</h2>
	<div class="sub-panel">
		<h3>&raquo; Description</h3>
		<p>
			JavaScript is a client-side scripting language which 
			allows for application development and a "live feel."  
			Client-side means that the scripts are being run in your 
			browser as opposed to the server where the webpage is.  
			JavaScript can be used to create AJAX applications which 
			creates the effect of a desktop application with as little 
			loading and reloading as possible.
		</p>
	</div>
	<div class="sub-panel">
		<h3 class="cursor-hand" onclick="Code.toggle('js')">
			&raquo; Example Script
		</h3>
		<div class="code-snippet" id="js-code">
<pre>//prototype helper functions
Date.prototype.getMonthName = function() {
	var monthName = [
		'January','February','March','April','May','June','July',
		'August','September','October','November','December'
	];
	return monthName[this.getMonth()];
};
Date.prototype.getDayName = function() {
	var dayName = [
		'Sunday','Monday','Tuesday','Wednesday',
		'Thursday','Friday','Saturday'
	];
	return dayName[this.getDay()];
};

if (!Array.indexOf) {
	Array.prototype.indexOf = function(object) {
		for (var i in this) {
			if (this[i] == object) {
				return i;
			}
		}
		return -1;
	};
}</pre>
		</div>
	</div>
</div>
<div class="panel last-panel">
	<h2>PHP - Hypertext Preprocessor</h2>
	<div class="sub-panel">
		<h3>&raquo; Description</h3>
		<p>
			Hypertext Preprocessor, or PHP, is a server-side scripting 
			language which allows for application development.  Server-
			side means that the scripts are being run on the server as 
			opposed to client-side scripts running in the browser.  PHP 
			can be combined with SQL to extract and manipulate data 
			stored on the server in databases.
		</p>
	</div>
	<div class="sub-panel">
		<h3 class="cursor-hand" onclick="Code.toggle('php')">
			&raquo; Example Code
		</h3>
		<div class="code-snippet" id="php-code">
<pre>$fruits = array('apple', 'orange', 'lemon', 'grape', 'lime');

foreach ($fruits as $fruit) {
	echo 'My favorite type of fruit is: ' . $fruit;
}

$numberFruits = count($fruits);

if ($numberFruits == 0) {
	echo 'What happened to all the fruit?';
} else {
	echo 'The number of fruits: ' . $numberFruits;
}</pre>
		</div>
	</div>
</div>

