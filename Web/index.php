<!DOCTYPE html>
<html>

<body>
	<h3>Redlock Database</h3>
	<table>
			<tr>
				<th>USER ID</th>
				<th>NAMA</th>
				<th>ALAMAT</th>
				<th>JABATAN</th>
			</tr>
		<tbody>
			<?php
            $host = "redlockdb-2.0";
            $username = "root";
            $password = "angie";
            $dbname = "redlock";
    
            $connection = new mysqli($host, $username, $password, $dbname) ;
			$result = $connection->query("SELECT * FROM users");
			while($row = $result->fetch_assoc()) {?>
				<tr>
					<td><?=$row["USERID"]?></td>
					<td><?=$row["NAMA"]?></td>
					<td><?=$row["ALAMAT"]?></td>
					<td><?=$row["JABATAN"]?></td>
				</tr>
			    <?php }				
			?>
		</tbody>
	</table>
</body>


<head>
	<title>Redlock</title>
	<style>
		td,th{
			padding: 10px;
			border: 1px solid #dddddd;
		}
	</style>
</head>

</html>