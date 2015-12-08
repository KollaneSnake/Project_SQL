<?php

	$sql = "SELECT * FROM `osakond` ORDER BY `osakond`.`name_osakond` ASC"; 
	$rows=get_rows($sql);
	

	echo '<div id="column3">
	
	<h1>Osakond</h1>
	<div style="width:912px;">';

	foreach ($rows as $row) 
	{
		echo '<h2>'.$row[1].'</h2>';

		$sql_e = "SELECT * FROM `eriala` WHERE `eriala`.`id_osakond`=$row[0]";
		$rows_e=get_rows($sql_e);
		$text="";
		foreach ($rows_e as $row_e) 
		{
			$text.="<li>".$row_e[1]."</li>";
		}
		echo '<ul>'.$text.'</ul>';
	}

	echo '</div></div>';