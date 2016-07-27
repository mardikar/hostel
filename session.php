<?php
include ('config.php');
session_start();
$db_handle = new ConfigController();
$user_check = $_SESSION['login_user'];

$row = $db_handle->runQuery("select emai from userdata where emai = '$user_check' ");

//$login_session = $row["emai"];

if (!isset($_SESSION['login_user'])) {
	header("location: index.php");
}
?>