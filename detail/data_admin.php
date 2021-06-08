<?php
	include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Master Data Admin</h2>
	<hr>
	<center><input type="button" value="Tambah Data" onclick="location.href='tambah_admin.php'"></center>
	<br>
		<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<td>Id Admin</td>
				<td>Nama Admin</td>
				<td>Username</td>
				<td>Password</td>
				<td> Aksi </td>
			</tr>


			<?php
				$sql="SELECT * FROM admin";
				$query = mysqli_query($con, $sql);
				while ($con = mysqli_fetch_array($query))
				{
					?>

					<tr>
						<td><?php echo "$con[id_admin]"; ?></td>
						<td><?php echo "$con[nama]"; ?></td>
						<td><?php echo "$con[username]"; ?></td>
						<td><?php echo "$con[password]"; ?></td>
						<td>
							<a href="edit_admin.php?id_admin=<?php echo "$con[id_admin]"; ?>">Edit</a>
							<a href="hapus_admin.php?id_admin=<?php echo "$con[id_admin]";?>" onclick ="return confirm('Anda yakin?')">Hapus</a> 
						</td>
					</tr>
					<?php
				}
			
			?>
		</table>
</body>
</html>