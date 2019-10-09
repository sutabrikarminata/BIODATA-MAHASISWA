<html>
<head>
	<script src="js/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" media="all" href="stylecss/css.css"/>
</head>
<body>
	<div id="layout">
		<div id="header">
		<img src="image/wifi-id.png" class="header"/>
        </div>
      </div>
       <div id="body">
	<form method="post">
		<p><a href="index.php">[Tambah Mahasiswa]</a></p>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>Nama Mahasiswa</th>
				<th>NIM</th>
				<th>Alamat</th>
				<th>Fakultas</th>
				<th>Jurusan</th>
				<th>Aksi</th>
			</tr>
		<?php
			include "koneksi.php";
			$sql = "SELECT * FROM tabel_mahasiswa";
			$query = mysqli_query($conn, $sql);
			if($query === FALSE){
				die(mysqli_connect_error());
			}
			while ($row = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>$row[Id]</td>";
			echo "<td>$row[Nama_mahasiswa]</td>";
			echo "<td>$row[Nim]</td>";
			echo "<td>$row[Alamat]</td>";
			echo "<td>$row[Fakultas]</td>";
			echo "<td>$row[Jurusan]</td>";
			echo "<td><a href=edit.php?Id=$row[Id]>Edit</a> <a href=hapus.php?Id=$row[Id]> / Hapus</a></td>";
			echo "</tr>";
			}
		?>
		</table>
		<p>Total Mahasiswa : <?php echo mysqli_num_rows($query) ?></p>
	</form>
	<center>
    <div id="footer">
        Hak &copy; 2019 Sri Wahyuni
    </div>
    </center>
</body>
</html>
