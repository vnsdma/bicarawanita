<?php
	include 'koneksi.php'
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Master Data user</h2>
	<hr>
	<center><input type="button" value="Tambah Data" onclick="location.href='tambah_user.php'"></center>
	<br>
		<table border="1" cellspacing="0" cellpadding="5">
			<tr>
				<td>Id user</td>
				<td>Nama user</td>
				<td>Username</td>
				<td>Password</td>
				<td> Aksi </td>
			</tr>


			<?php
				$sql="SELECT * FROM user";
				$query = mysqli_query($con, $sql);
				while ($con = mysqli_fetch_array($query))
				{
					?>

					<tr>
						<td><?php echo "$con[id_user]"; ?></td>
						<td><?php echo "$con[nama_user]"; ?></td>
						<td><?php echo "$con[username]"; ?></td>
						<td><?php echo "$con[password]"; ?></td>
						<td>
							<a href="edit_user.php?id_user=<?php echo "$con[id_user]"; ?>">Edit</a>
							<a href="hapus_user.php?id_user=<?php echo "$con[id_user]";?>" onclick ="return confirm('Anda yakin?')">Hapus</a> 
						</td>
					</tr>
					<?php
				}
			
			?>
		</table>
</body>
</html>