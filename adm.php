<?php
include ("session.php");
require_once ("config.php");
$db_handle = new ConfigController();

$radio = $_POST["seater"];
$id1 = $_POST["id1"];
$pwd1 = $_POST["pwd1"];

$pref1 = $_POST["pref1"];
$pref2 = $_POST["pref2"];
$pref3 = $_POST["pref3"];
$pref4 = $_POST["pref4"];
$pref5 = $_POST["pref5"];

if ($_SESSION['cid'] == $id1) {
	echo "<script type = 'text/javascript'> alert('ka Majak hai?');window.location.href='home.php';</script>";
	exit();
}

$query = "select * from grp where cid = " . $_SESSION['cid'];
$a = $db_handle -> numRows($query);
$b = $db_handle -> numRows("select * from grp where cid = " . $id1);
if ($a == 0 && $b == 0) {

	$gid = mysql_num_rows(mysql_query("select * from grouppref")) + 1;
	$query = mysql_query("select * from pointer where cid = " . $_SESSION['cid'] . ";");
	$sum;
	while ($row = mysql_fetch_array($query)) {
		$sum = $row["sem5"] + $row["sem6"];
	}

	$query = $db_handle -> numRows("select * from userdata where cid = " . $id1 . " and password = '" . $pwd1 . "'");

	if ($query == 1) {
		$query = mysql_query("select * from pointer where cid = " . $id1);
		while ($row = mysql_fetch_array($query)) {
			$sum = $sum + $row["sem5"] + $row["sem6"];
		}
	} else {
		echo "<script type = 'text/javascript'> alert('Partner 1 id and password do not match');window.location.href='admission.php';</script>";
	}

	if ($radio == "false") {
		$id2 = $_POST["id2"];
		$pwd2 = $_POST["pwd2"];
		if ($id2 == $id1 && $_SESSION['cid'] == $id2) {
			echo "<script type = 'text/javascript'> alert('ka Majak hai?');window.location.href='home.php';</script>";
			exit();
		}
		
		$query = $db_handle -> numRows("select * from userdata where cid = " . $id1 . " and password = '" . $pwd1 . "'");

		if ($query == 1) {
			$a = $db_handle -> numRows("select * from grp where cid = " . $id2);
			if ($a == 0) {
				$query = mysql_query("select * from pointer where cid = " . $id2);
				if ($row = mysql_fetch_array($query)) {
					$sum = $sum + $row["sem5"] + $row["sem6"];
				}
			} else {
				echo "<script type = 'text/javascript'> alert('Partner 2 alrady in a group');window.location.href='admission.php';</script>";

			}
		} else {
			echo "<script type = 'text/javascript'> alert('Partner 2 id and password do not match');window.location.href='admission.php';</script>";
		}

		$query = "INSERT INTO grouppref VALUES (" . $gid . ",'" . $pref1 . "','" . $pref2 . "','" . $pref3 . "','" . $pref4 . "','" . $pref5 . "'," . $sum . ",null,3)";

		if (mysql_query($query)) {
			$query1 = "insert into grp values (" . $_SESSION['cid'] . "," . $gid . ");";
			
			$query2 = "insert into grp values (" . $id1 . "," . $gid . ");";
			
			$query3 = "insert into grp values (" . $id2 . "," . $gid . ");";
			if (mysql_query($query3) && mysql_query($query2) && mysql_query($query1))
				echo "<script type = 'text/javascript'>window.location.href='admission.php'; alert('Group Created!');</script>";
			else {
				echo "<script type = 'text/javascript'> alert('Something went wrong ');window.location.href='admission.php';</script>";
			}
		} else {
			echo "<script type = 'text/javascript'> alert('Something went wrong ');window.location.href='admission.php';</script>";
		}
	}
	else{
		
		$query = "INSERT INTO grouppref VALUES (" . $gid . ",'" . $pref1 . "','" . $pref2 . "','" . $pref3 . "','" . $pref4 . "','" . $pref5 . "'," . $sum . ",null,2)";

		if (mysql_query($query)) {
			$query1 = "insert into grp values (" . $_SESSION['cid'] . "," . $gid . ");";
			
			$query2 = "insert into grp values (" . $id1 . "," . $gid . ");";
		
			if (mysql_query($query2) && mysql_query($query1))
				echo "<script type = 'text/javascript'>window.location.href='admission.php'; alert('Group Created!');</script>";
			else {
				echo "<script type = 'text/javascript'> alert('Something went wrong ');window.location.href='admission.php';</script>";
			}
			
		} 

		else {
			echo "<script type = 'text/javascript'> alert('Something went wrong ');window.location.href='admission.php';</script>";
		}
		
	}
} else {
	echo "<script type = 'text/javascript'> alert('Already in a group ');window.location.href='admission.php';</script>";
}
?>