<?php
    include 'capaian.php';
	$nom = $_GET['nom'];
	$kuiz = $_GET['kuiz'];
	$SQLitem = "SELECT * from soalan where id_soalan='$nom'
	&& namakuiz='$kuiz';";
	$run = mysqli_query($capaiDB, $SQLitem);
	$data= mysqli_fetch_array($run);
    //papar soalan kuiz
        if(isset($data['soalan'])){
            include 'counttime.php';
?>

<form action="" method="GET">
    Soalan No: <?php echo $data['id_soalan'] ; ?><br>
    <input type="hidden" name="id_soalan" value="<?php echo $data['id_soalan']; ?>">
    <input type="hidden" name="nosoalan" value="<?php echo $data['id_soalan']; ?>">	
	<?php echo $data['soalan']; ?><br>
	<input type="radio" name="JawapanMurid" value="<?php echo $data['PilihanA']; ?>">
	<?php echo $data['PilihanA']; ?><br>
	<input type="radio" name="JawapanMurid" value="<?php echo $data['PilihanB']; ?>">
	<?php echo $data['PilihanB']; ?><br>
	<input type="radio" name="JawapanMurid" value="<?php echo $data['PilihanC']; ?>">
	<?php echo $data['PilihanC']; ?><br>
	<input type="radio" name="JawapanMurid" value="<?php echo $data['PilihanD']; ?>">
	<?php echo $data['PilihanD']; ?><br>
	<input type="hidden" name="JawapanBetul" value="<?php echo $data['JawapanBetul']; ?>">
	<input type="hidden" name="namakuiz" value="<?php echo $data['namakuiz']; ?>">
	<button type="submit" name="jawapan">JAWAB</button>
</form>
<?php
        }else{
            echo "Menjawab Selesai";
			echo "<br>";
			include 'skor.php';
		}
?>		