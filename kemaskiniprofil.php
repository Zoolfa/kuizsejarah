<?php 
	include 'capaian.php';
	$ic = $_POST['no_ic'];
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$password = $_POST['pswd'];
	$SQLkemaskini = "UPDATE murid SET nama_murid='$nama' ,
	kelas='$kelas' ,password='$password' where no_ic='$ic'; ";
	$run = mysqli_query($capaiDB,$SQLkemaskini);
	if($run){
		echo "Kemas kini berjaya";
	}else{
		echo "Kemas kini gagal";
	}
?>