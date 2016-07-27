<?php
class ConfigController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "signup";

	function __construct() {
		$conn = $this -> connectDB();
		if (!empty($conn)) {
			$this -> selectDB($conn);
		}
		ini_set('mysql.connect_timeout', 300);
		ini_set('default_socket_timeout', 300);
	}

	function connectDB() {
		$conn = mysql_connect($this -> host, $this -> user, $this -> password);
		return $conn;
	}

	function selectDB($conn) {
		mysql_select_db($this -> database, $conn);
	}

	function runQuery($query) {
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result, MYSQLI_ASSOC)) {
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
    
    function insertQuery($query) {
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
    
    function updateQuery($query) {
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}
    
    function deleteQuery($query) {
		$result = mysql_query($query);
		if (!$result) {
			die('Invalid query: ' . mysql_error());
		} else {
			return $result;
		}
	}

}
?>