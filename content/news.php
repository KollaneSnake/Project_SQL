<?php 
	$id_e=$_GET['id_e'];//номер специальности
	if(!isset($id_e))
	{
		//список отделений
		$sql = "SELECT * FROM news ORDER BY date_news DESC";
	}
	else
	{
		$sql = "SELECT * FROM news WHERE id_news=".$id_e;
	}

	$rows=get_rows($sql);
	

	echo '<div id="column3"><h1>Uudised</h1>
	<div style="width:912px;">';

	if(isset($id_e))
	{
		foreach ($rows as $row) 
		{
			echo '<div id="column2" style="min-height:250px; height:100%;"><span class="left"><img src="images/'.$row[3].'" alt="" width="158px" height="220"></span>';
			echo '<div><h2>'.$row[1].'</h2>';
			echo '<p style="width:800px">'.$row[2].'</p>';
			echo '<span style="float:right">'.$row[4].'</span></div></div> ';

	 	echo'<a href="'.$_SERVER['PHP_SELF']."?page=".$page.'">Tagasi</a>';
		}
	}
	else
	{
		echo '<ul>';
		foreach ($rows as $row) 
			{
				echo '<li>'.$row[4].'   <a href="'.$_SERVER['PHP_SELF'].'?page='.$page.'&id_e='.$row[0].'">'.$row[1].'</a></li>';
			}
		echo '</ul>';
	}

	echo '</div></div>';