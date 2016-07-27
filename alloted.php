<?php
require_once ("config.php");
$db_handle = new ConfigController();

$query = mysql_query("select * from hostel where status = 1");
$output = '';
while ($row = mysql_fetch_array($query)) {
	$spi = mysql_fetch_array(mysql_query("select * from grouppref where gid = ".$row["gid"]));
	$name = mysql_query("select * from grp,userdata where grp.gid = ".$row["gid"]." and grp.cid = userdata.cid");
	$partners = '';
	while($fname = mysql_fetch_array($name)){
		$partners .= '<td>'.$fname["fname"].'</td>';
	}
	$output .= '<tr><td class="mdl-data-table__cell--non-numeric">'.$row["room"].'</td>
					<td>'.$spi["spi"].'</td>
					'.$partners.'
				</tr>';
}
echo $output;
?>