<?php
if(!empty($_POST["pid"])) {
	echo "yes";
require_once("config.php");
$db_handle = new ConfigController();
    
	switch($_POST["action"]){
		case "like":
			$query = "INSERT INTO userlike (id,pid) VALUES ('" . $_POST["id"] . "','" . $_POST["pid"] . "')";
			$result = $db_handle->insertQuery($query);
			if(!empty($result)) {
				$query ="UPDATE userpost SET upvote = upvote + 1 WHERE id='" . $_POST["pid"] . "'";
				$result = $db_handle->updateQuery($query);				
			}			
		break;		
		case "unlike":
			$query = "DELETE FROM userlike WHERE id = '" . $_POST["id"] . "' and pid = '" . $_POST["pid"] . "'";
			$result = $db_handle->deleteQuery($query);
			if(!empty($result)) {
				$query ="UPDATE userpost SET upvote = upvote - 1 WHERE pid='" . $_POST["pid"] . "' and upvote > 0";
				$result = $db_handle->updateQuery($query);
			}
		break;		
	}
}
?>
