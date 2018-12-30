<?php
	
	require_once('config.php');
	
	$sql = "SELECT id,client_id,name,url,description,date_completed FROM pages "
		. "WHERE is_active = 1 ORDER BY date_completed DESC";
	$query = mysql_query($sql);
	
	$pages = array();
	$pageCount = 0;
	
	while ($page = mysql_fetch_object($query)) {
		$pages[$pageCount] = array(
			'id' => (int)$page->id,
			'client_id' => (int)$page->client_id,
			'name' => (string)$page->name,
			'url' => (string)$page->url,
			'description' => (string)$page->description,
			'date_completed' => (string)date('m/d/Y', strtotime($page->date_completed))
		);
		$pageCount++;
	}
	
	echo json_encode($pages);
	
	mysql_close();
	
?>