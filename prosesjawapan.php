<?php
	include 'capaian.php';
	$id_soalan = $_GET['nosoalan'];
	$jaw = $_GET['JawapanMurid'];
	$JawapanMurid = $_GET['JawapanBetul'];
	$kuiz = $_GET['namakuiz'];
	if($jaw == $JawapanMurid){
	$SQLupdate = "UPDATE soalan SET JawapanMurid='$jaw'
	where id_soalan='$id_soalan' AND namakuiz= '$kuiz' ;";
	$run = mysqli_query($capaiDB,$SQLupdate);
		if($run){
		$id_soalan = $id_soalan + 1;
		header('Location: soalankuiz.php?nom='.$id_soalan.'&kuiz='.$kuiz.'');
			}
	}else{
		$id_soalan = $id_soalan + 1;
		header('Location: soalankuiz.php?nom='.$id_soalan.'&kuiz='.$kuiz.'');
	}
?>