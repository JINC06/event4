<?php

	//define("DB_HOST", getenv("OPENSHIFT_MYSQL_DB_HOST"));
	//define("DB_PORT", getenv("OPENSHIFT_MYSQL_DB_PORT"));
	//define("DB_USER", getenv("OPENSHIFT_MYSQL_DB_USERNAME"));
	//define("DB_PASS", getenv("OPENSHIFT_MYSQL_DB_PASSWORD"));
	//define("DB_NAME", getenv("OPENSHIFT_APP_NAME"));
	
	define("DB_HOST", 'localhost');
	define("DB_PORT", '3306');
	define("DB_USER", 'root');
	define("DB_PASS", '');
	define("DB_NAME", 'event4');

	$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	$db = mysql_select_db(DB_NAME) or die(mysql_error());

?>