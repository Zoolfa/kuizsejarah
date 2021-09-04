<?php
	include "capaian.php";
	$no_ic = $_POST['no_ic'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$password = '123abc';
	$SQLdaftarmurid = "INSERT into murid
	(no_ic,nama_murid,kelas,password) values
	('$no_ic','$nama','$kelas','$password');";
	$run = mysqli_query($capaiDB,$SQLdaftarmurid);
	if($run){
		echo "Pendaftaran Anda Berjaya<br>";
		echo "KataLaluan anda: <b>$password</b><br>";
		echo "<a href='login.php'>Login di sini</a>";
	}else{
		echo "Maaf Pendaftaran anda gagal";
	}
?>