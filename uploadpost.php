<?php

require_once ("config.php");
session_start();

$db_handle = new ConfigController();
function runQuery($query) {
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$resultset[] = $row;
	}
	if (!empty($resultset))
		return $resultset;
}

function numRows($query) {
	$result = mysql_query($query);
	$rowcount = mysql_num_rows($result);
	return $rowcount;
}

$textarea = $_POST["aboutDescription"];

$results = mysql_query('SELECT emai FROM userdata WHERE emai = "' . mysql_real_escape_string($_SESSION['login_user']) . '"') or trigger_error(mysql_error());
$email = null;
if (mysql_num_rows($results) > 0) {
	$rows = mysql_fetch_assoc($results);
	$email = $rows["emai"];
}
$query = "INSERT INTO `userpost`(`pid`, `email`, `post`, `timee`, `upvote`) VALUES (NULL,'$email','$textarea',NULL,6)";

if (mysql_query($query)) {
	echo '<script type = "text/javascript">window.location = "home.php";</script>';
} else {
	echo "bagh bua";
}
?>