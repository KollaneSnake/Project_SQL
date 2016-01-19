<?php 
//get number of page from db in tabel "menyy"
$sql = "SELECT * FROM menyy WHERE flag=2";

$rows=get_rows($sql);



foreach ($rows as $row) 
	{
		$page=$row[3];

		$k=1;
		if ($k==1) 
			{
				$sql_o = "SELECT * FROM osakond ORDER BY name_osakond ASC";

				$rows_o=get_rows($sql_o);

				$text="";
				foreach ($rows_o as $row_o) 
					{
						$text .="<li> <a href='".$_SERVER['PHP_SELF']."?page=".$page."&id_o=".$row_o[0]."'>".$row_o[1]."</a></li>";
					}
				echo "	<div class='sidebaritem'>
        				<div class='sbihead'>
          					<h1>".$row[1]."</h1>
        				</div>
       					<div class='sbilinks'>          
          					<ul>";
          		echo $text;
          		echo"</ul></div></div>";
			}
		$k++;
	
	}

