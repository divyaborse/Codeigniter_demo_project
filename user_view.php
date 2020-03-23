<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1" cellpadding="5">
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Number</th>
		<th>Email</th>
		<th>School_name</th>
		<th>Class</th>
		<th>Gender</th>


	</tr>
	<tr>
		<?php
		foreach ($user_array as $key => $value) {
			# code...
			/*echo "<pre>";
			print_r($value);
			echo "</pre>";*/
			echo "<tr>
			<td>".$value['id']."</td>
			<td>".$value['Name']."</td>
			<td>".$value['Number']."</td>
			<td>".$value['Email']."</td>
			<td>".$value['School_name']."</td>
			<td>".$value['Class']."</td>
			<td>".$value['Gender']."</td>



			</tr>";
		}
		?>
	</tr>
	
</table>
</body>
</html>
