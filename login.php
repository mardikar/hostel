<?php
require_once ("config.php");
$db_handle = new ConfigController();
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$email = $_POST['lemail'];
	$password = $_POST['lpassword'];

	$sql = "select * from userdata where emai='$email' and password='$password' ";

	$result = mysql_query($sql);
	$row = mysql_fetch_array($result, MYSQL_ASSOC);
	$count = mysql_num_rows($result);
	if ($count == 1) {

		$_SESSION['login_user'] = $email;
		$_SESSION['cid'] = $row["cid"];
		echo "<script type='text/javascript'>window.location.href='home.php'</script>";
	} else {
		echo '<script type="text/javascript">alert("Please enter valid email id and password and retry"); window.location.href="index.php"</script>';
	}
	mysql_close();
}
?>