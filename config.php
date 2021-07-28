<?php 
	error_reporting(0);
	date_default_timezone_set("Asia/Jakarta");
	define('host', 'localhost');
	define('user', 'root');
	define('pass', '');
	define('db', 'tutorial_crud');

	$conn = mysql_connect(host,user,pass,db)or die(mysql_error());
	if ($conn) {
		mysql_select_db(db,$conn);
	} else {
		echo "Data Base Tidak Ada!";
	}
?>