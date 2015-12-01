<?php
	

	$user='root'
	$password=''
	$host='localhost'
	


		$link=mysql_connect($host,$user,$password) or die('No connect');
		$db=mysql_select_db('kiir_school') or die('No database');
		mysql_query('set names utf8');
