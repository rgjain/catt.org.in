<?php

	date_default_timezone_set ("Asia/Kolkata");

	// DEV env connection config
	$host="localhost";
	$port=3306;
	$socket="";
	$user="root";
	$password="";
	$dbname="cattorgin";

	// PROD env connection config
/*	$host="apntt.db.8426548.hostedresource.com";
	$port=3306;
	$socket="";
	$user="apntt";
	$password="Apntt@123";
	$dbname="apntt";*/

	$con = mysql_connect($host, $user, $password, $dbname) or die ('Could not connect to the database server' . mysql_error());

	$dbcon = mysql_select_db($dbname) or die(mysql_error());
?>