<h3>Pilih Kuiz</h3>
<form action="soalankuiz.php" method="GET">
	<input type="hidden" name="nom" value="1">
	<br><label>Nama Kuiz:</label><br>
	<select name="kuiz">
		<?php
		include 'capaian.php';
		$SQLjawkosong = "UPDATE soalan SET JawapanMurid=Null;";
		$kosongkan = mysqli_query($capaiDB,$SQLjawkosong);
		$SQLkuiz = "SELECT * from kuiz;";
		$run = mysqli_query($capaiDB,$SQLkuiz);
		while($data = mysqli_fetch_array($run))
			{
				?>
		<option value="<?php echo $data['namakuiz']; ?>">
		<?php echo $data['namakuiz']; }; ?></option>	
	</select><br><br>
	<button type="submit" name="pilihkuiz">PILIH</button>
</form>