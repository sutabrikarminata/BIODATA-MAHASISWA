<?php
include "koneksi.php";
$id=$_GET['Id'];
$sql="SELECT * FROM tabel_mahasiswa WHERE Id='$id'";
$query=mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
?>
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
	<form action ="" method="post">
		<p><a href="tampil.php">[_Kembali_]</a></p>
		<table>
		<tr>
			<td>Id</td>
			<td>:</td>
			<td><input type="text" name="id" value="<?php echo $row['Id']; ?>"></td>
		</tr>
		<tr>
			<td>Nama Mahasiswa</td> 
			<td>:</td>
			<td><input type="text" name="nama_mahasiswa" value="<?php echo $row['Nama_mahasiswa']; ?>"></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo $row['Nim']; ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" row="8" cols="20" <?php echo $row['Alamat']; ?>></textarea></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><input type="text" name="fakultas" value="<?php echo $row['Fakultas']; ?>"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan" value="<?php echo $row['Jurusan']; ?>"></td>
		</tr>
	</table>
	<input type="submit" name="simpan" value="Ubah data"><br><br>
</form>
	</div>
	<center>
    <div id="footer">
        Hak &copy; 2019 SUTABRI KARMINATA
    </div>
    </center>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
include "koneksi.php";
$sql="UPDATE tabel_mahasiswa SET Id='$_POST[id]', Nama_mahasiswa='$_POST[nama_mahasiswa]', Nim='$_POST[nim]', Alamat='$_POST[alamat]', Fakultas='$_POST[fakultas]', Jurusan='$_POST[jurusan]' WHERE Id='$id'";
$query=mysqli_query($conn, $sql);
if($query){
	echo "Data Berhasil di Ubah";
	}
	else{
	echo "Data Gagal di Ubah". $sql;
	}
}
?>
