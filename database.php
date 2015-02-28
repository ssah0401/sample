<?php
$conn_error='Could not able to connect to DB';
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_database='STOCK_MARKET';
if(@mysql_connect($mysql_host,$mysql_user,$mysql_password))  {

	if(@mysql_select_db($mysql_database)) 	{

//echo "DB connected Successfully".'<br>';

	}
}
else 	{

	die($conn_error);
}


?>