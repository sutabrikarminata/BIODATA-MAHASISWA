<?php
	include "koneksi.php";
	$id=$_GET['Id'];
	$sql="DELETE FROM tabel_mahasiswa WHERE Id='$id'";
	$query=mysqli_query($conn, $sql);
	if($query){
		header("location:tampil.php");
	}
?>