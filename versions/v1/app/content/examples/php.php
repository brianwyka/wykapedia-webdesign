<div class="container">
	<h3>Hypertext Preprocessor</h3>
    <p>
    	Hypertext Preprocessor, or PHP, is a server-side scripting language which allows for application development.  
        Server-side means that the scripts are being run on the server as opposed to client-side scripts running in the browser.  
        PHP can be combnined with SQL to extract and manipulate data stored on the server in databases.
    </p>
</div>

<h3>Example Code</h3>
<div class="code">
    
<pre>&lt;?php
	$sql = &quot;SELECT id,email FROM emails&quot;;
	$query = mysql_query($sql);
	
	while($row = mysql_fetch_object($query)){
		echo $row-&gt;id;
		echo $row-&gt;email;
	}
?&gt;</pre>
    
</div>