<?php

	$sql = "SELECT * FROM `osakond` ORDER BY `osakond`.`name_osakond` ASC"; 
	$rows=get_rows($sql);

	echo '<div id="column3">
	
	<h1>Osakond</h1>
	<div style="width:912px;">';

	foreach ($rows as $row) 
	{
		echo '<h2>'.$row[1].'</h2>';
	}

	echo '</div></div>';