<!DOCTYPE html>
<html>
	<head>
		<title>Data Seluruh Users</title>
	</head>
	<body>
		<h2>Menampilkan Data User</h2>
		<table border="1">
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Email</td>
			</tr>
			<?php
			foreach ($users->result() as $i => $user)
			{
				?>
				<tr>
					<td><?= ++$i; ?></td>
					<td><?= $user->nama; ?></td>
					<td><?= $user->email; ?></td>	
				</tr>
				<?php
			}?>
		</table>
	</body>
</html>
