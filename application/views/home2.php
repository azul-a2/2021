<!DOCTYPE html>
<html>
	<head>
		<title>Data Seluruh Users</title>
	</head>
	<body>
		<h2>Menampilkan Data User</h2>
		<table>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Email</td>
			</tr>
			<?php
			foreach ($product->result() as $i => $user)
			{
				?>
				<tr>
					<td><?= ++$i; ?></td>
					<td><?= $product->title; ?></td>
					<td><?= $product->price; ?></td>	
				</tr>
				<?php
			}?>
		</table>
	</body>
</html>