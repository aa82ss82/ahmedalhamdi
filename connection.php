<?php
$host="localhost";
$database="c3347719";
$username="c3347719";
$password="c3347719";
 
mysql_connect($host,$username,$password) or die
("could not connect to database, please check that mysql is in fact running");

 

mysql_select_db($database) or die(mysql_error());

?>
