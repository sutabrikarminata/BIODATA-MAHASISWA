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
		<img src="image/wifi-id.png"height="500"class="header"/>
        </div>
      </div>
    <div id="body">
    	<h4>
		<a href="tampil.php">[Lihat Database]</a></h4>
		<form action="" method="post">	
		<table>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr> 
			<td>Nama</td> 
			<td>:</td> 
			<td><input type="text" name="nama_mahasiswa"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td> 
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" rows="10" cols="30"></textarea></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><input type="text" name="fakultas"></td>
		</tr>
			<td>Jurusan</td> 
			<td>:</td>
			<td><input type="text" name="jurusan"></td>
		</tr>
		</table>
		<input type="submit" name="simpan" value="Simpan"> <input type="reset" name="reset" value="reset">
	</form>

<?php
	if(isset($_POST['simpan'])){
		include "koneksi.php";
		$sql="INSERT INTO tabel_mahasiswa (Id, Nama_mahasiswa, Nim, Alamat, Fakultas, Jurusan) VALUES ('$_POST[id]', '$_POST[nama_mahasiswa]', '$_POST[nim]', '$_POST[alamat]', '$_POST[fakultas]', '$_POST[jurusan]')";
		$query=mysqli_query($conn, $sql);
		if($query){
			echo "Data Berhasil Tersimpan";
		}
		else {
			echo "Data gagal disimpan". $sql;
		}
	}
?>
	<center>
    <div id="footer">
        Hak &copy; 2019 SUTABRI KARMINATA
    </div>
    </center>
</center>
</body>
</html>