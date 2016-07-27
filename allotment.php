<?php
include("session.php");
require_once ("config.php");
$db_handle = new ConfigController();

$query = mysql_query("select * from grouppref where seat = 3 order by spi");

while($row = mysql_fetch_array($query)){
	$hostel = mysql_fetch_array(mysql_query("select * from hostel where seat=3 and room = '".$row["pref1"]."'"));
	if($hostel["status"] == 0){
		mysql_query("update hostel set status = 1, gid = ".$row["gid"].",pref = 1 where room = '".$row["pref1"]."'");
		continue;
	}	
	$hostel = mysql_fetch_array(mysql_query("select * from hostel where seat=3 and room = '".$row["pref2"]."'"));
	if($hostel["status"] == 0){
		mysql_query("update hostel set status = 1, gid = ".$row["gid"].",pref = 2 where room = '".$row["pref2"]."'");
		continue;
	}
	$hostel = mysql_fetch_array(mysql_query("select * from hostel where seat=3 and room = '".$row["pref3"]."'"));
	if($hostel["status"] == 0){
		mysql_query("update hostel set status = 1, gid = ".$row["gid"].",pref = 3 where room = '".$row["pref3"]."'");
		continue;
	}
	$hostel = mysql_fetch_array(mysql_query("select * from hostel where seat=3 and room = '".$row["pref4"]."'"));
	if($hostel["status"] == 0){
		mysql_query("update hostel set status = 1, gid = ".$row["gid"].",pref = 4 where room = '".$row["pref4"]."'");
		continue;
	}
	$hostel = mysql_fetch_array(mysql_query("select * from hostel where seat=3 and room = '".$row["pref5"]."'"));
	if($hostel["status"] == 0){
		mysql_query("update hostel set status = 1, gid = ".$row["gid"].",pref = 5 where room = '".$row["pref5"]."'");
		continue;
	}
}

?>