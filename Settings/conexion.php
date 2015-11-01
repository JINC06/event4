<?php

	//define("DB_HOST", getenv("OPENSHIFT_MYSQL_DB_HOST"));
	//define("DB_PORT", getenv("OPENSHIFT_MYSQL_DB_PORT"));
	//define("DB_USER", getenv("OPENSHIFT_MYSQL_DB_USERNAME"));
	//define("DB_PASS", getenv("OPENSHIFT_MYSQL_DB_PASSWORD"));
	//define("DB_NAME", getenv("OPENSHIFT_APP_NAME"));
	
	//Deploy local
	//define("DB_HOST", 'localhost');
	//define("DB_PORT", '3306');
	//define("DB_USER", '');
	//define("DB_PASS", '');
	//define("DB_NAME", '');
	
	//Deploy on openshift
	define("DB_HOST", $OPENSHIFT_MYSQL_DB_HOST);
	define("DB_PORT", $OPENSHIFT_MYSQL_DB_PORT);
	define("DB_USER", '');
	define("DB_PASS", '');
	define("DB_NAME", '');

	$conexion = mysql_connect(DB_HOST, DB_USER, DB_PASS);
	$db = mysql_select_db(DB_NAME) or die(mysql_error());

?>