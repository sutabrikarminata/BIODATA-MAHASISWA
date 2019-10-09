<?php
$servername="localhost";
$username="root";
$pass="";
$db="biodata_mahasiswa";

$conn=mysqli_connect($servername, $username, $pass, $db);
if(!$conn){
	die("Koneksi gagal : ". mysqli_connect_error());
}
?>