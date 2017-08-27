<?php 
	function connect (
		$host="localhost",
		$user="root",
		$pass="654321",
		$dbname="10474"
		) {
		mysql_connect($host,$user,$pass) or die("connection error");
		mysql_select_db($dbname) or die("select db error");
		mysql_query("set names 'utf8'");
	}
 ?>