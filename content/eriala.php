<?php 
	$id_e=$_GET['id_e'];//номер специальности
	if(!isset($id_e))
	{
		//список отделений
		$sql = "SELECT * FROM osakond ORDER BY name_osakond ASC";
	}
	else
	{
		$sql = "SELECT * FROM eriala WHERE id_eriala=".$id_e;
	}

	$rows=get_rows($sql);
	

	echo '<div id="column3"><h1>Osakond</h1>
	<div style="width:912px;">';

	if(isset($id_e))
	{
		foreach ($rows as $row) 
		{
			echo '<div id="column2" style="min-height:250px; height:100%;"><h2>'.$row[1].'</h2>
	      <span class="left"><img src="images/'.$row[2].'" alt="" width="148px" height="168px"></span>
	      <p style="width: 800px">'.$row[4].'</p>
	 	</div> ';

	 	echo'<a href="'.$_SERVER['PHP_SELF']."?page=".$page.'">Tagasi</a>';
		}
	}
	else
	{
		foreach ($rows as $row) 
			{
				echo '<h2>'.$row[1].'</h2>';

				$sql_e = "SELECT * FROM eriala WHERE id_osakond=".$row[0];
				$rows_e=get_rows($sql_e);
				$text="";
				foreach ($rows_e as $row_e) 
				{
					$text.="<li> <a href='".$_SERVER['PHP_SELF']."?page=".$page."&id_e=".$row_e[0]."'>".$row_e[1]."</a></li>";
				}
				echo '<ul>'.$text.'</ul>';
			}
	}

	echo '</div></div>';