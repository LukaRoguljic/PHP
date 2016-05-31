<?php
//opens connection to mySQL server
$dbc = mysql_connect ('localhost', 'root', '');
if(!$dbc){
	die('Not connected'  .mysql_error());
}

//select db
$db_selected = mysql_select_db ("final", $dbc);
if(!$db_selected)
{
	die("Can't connect:  " .mysql_error());
}


//$query = "UPDATE orders SET del_name ='watzefuck' WHERE order_id = 2 ";
//$result = mysql_query($query);
?>