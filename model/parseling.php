<?php

	$page=$_GET["page"];//page number -> number in db

	if(isset($page))
	{
		$sql = "SELECT * FROM `menyy` WHERE `order_menyy`=".$page;
	}
	else
	{
		$sql = "SELECT * FROM `menyy` WHERE `order_menyy` is NULL";
		$page='';
	}

	$rows=get_rows($sql);

	foreach($rows as $row)
	{
		
	if($row[2]!="" && file_exists("content/".$row[2])&& $row[3]==$page)
		include("content/".$row[2]);
	else
		echo '<h3>No file</h3>';
		
		
	}
	?>
