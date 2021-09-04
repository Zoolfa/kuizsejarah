<?php
	include 'capaian.php';
	$id_soalan = $_GET['nom'];
	$kuiz = $_GET['kuiz'];
	$SQLitem = "SELECT COUNT(JawapanMurid),
	COUNT(JawapanBetul) from soalan where namakuiz='$kuiz'; ";
	$run = mysqli_query($capaiDB,$SQLitem);
	$data= mysqli_fetch_array($run);
	//kira skor
	
	$jawbetul = $data['COUNT(JawapanMurid)'];
	$jumitem = $data['COUNT(JawapanBetul)'];
	$skor = ($jawbetul / $jumitem) * 100;
	echo "<h3>Bilangan Soalan: ".$jumitem."<br>";
	echo "Bilangan Jawapan Tepat: ".$jawbetul."<br>";
	echo "Peratus Pencapaian: <b>".$skor."%</b></h3>";
	//simpan markah
	$SQLsimpanskor = "INSERT into ambil
	(no_ic,namakuiz,Tarikh_jawab,markah)values
	('$id','$kuiz',now(),'$skor');";
	$simpan =  mysqli_query($capaiDB,$SQLsimpanskor);
?>