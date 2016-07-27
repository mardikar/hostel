<?php ?>
<html>
	<head>
		<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
		<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.2.6.pack.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	</head>
	<body>
		<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp" style="margin-left: 30%;margin-top: 1.6%">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Room</th>
					<th>Pointer</th>
					<th>Student1</th>
					<th>Student2</th>
					<th>Student3</th>
				</tr>
			</thead>
			<tbody>
				<?php include("alloted.php");?>				
			</tbody>
		</table>
	</body>
</html>