<?php 

	$text='';

	foreach ($rows as $row) {
		# code...
		if($row['flag']==1)
		{
			if($row[3]=='')
			{
				$text.='<li><a href="">'.$row[1].'</a></li>';
			}
		}
	}

 ?>