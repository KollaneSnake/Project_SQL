<?php 

$id_o=$_GET['id_o'];

$sql = "SELECT * FROM osakond WHERE id_osakond=".$id_o;

$rows=get_rows($sql);
foreach ($rows as $row) 
{
	$title=$row[1];
	$text=$row[2];
}

?>

<div id="column2">
<h1>Osakond <?php echo $title; ?></h1>
	<p><?php echo $text; ?></p>
</div>