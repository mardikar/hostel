<?php
include ("config.php");
$db_handle = new ConfigController();
$user = mysql_query("select * from userdata;");
while ($userrow = mysql_fetch_array($user)) {
	echo '<img src="data:image/jpeg;base64,' . base64_encode($userrow['image']) . '"height = 90; width = 60;/>';

}
?>
<html>
	<body>
		<div class="imagelist">

		</div>
	</body>
</html>