<?php

	$sql="SELECT * FROM eriala ORDER BY name_eriala ASC" ;

	echo '<div id="column3"><h1>Gallery</h1><div style="width:912px;">';

	$rows=get_rows($sql);

	foreach ($rows as $row)
	{
		$sql_e = 'SELECT * FROM gallery WHERE id_eriala="'.$row[0].'" ORDER BY pilt_gallery ASC';
		$rows_e=get_rows($sql_e);

		if(count($rows_e))
			{

				
				echo '<p style="width=100%"><h2>'.$row[1].'</h2>';
				foreach ($rows_e as $row_e)
				{
					echo '<span class="left"><img src="images/'.$row_e[1].'" alt="" width="148px" height="168px"></span>';
				}
				echo '</p>';
			}
		echo '<div style="clear:both"></div>';
	}
	echo '</div></div>';