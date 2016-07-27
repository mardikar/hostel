<?php

require_once ("config.php");
$db_handle = new ConfigController();

$output = "";
$query = mysql_query("select * from hostel where status = 0 and seat = 2");
while($row = mysql_fetch_array($query)){
	$output .= '<option value="'.$row["room"].'">'.$row["room"].'</option>';
}
echo $output;
?>