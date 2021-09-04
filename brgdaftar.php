<h3>Pendaftaran</h3>
<form action="" method="POST">
	<label>No Kad Pengenalan:</label>
	<input type="text" name="no_ic" placeholder="000000-00-0000"><br><br>
	<label>Nama Pelajar:</label>
	<input type="text" name="nama" size="50"><br><br>
	<label>Kelas:</label>
	<select name="kelas">
	<?php
	include 'capaian.php';
	$SQLkuiz= "SELECT * from kelas";
	$run = mysqli_query($capaiDB,$SQLkuiz);
	while($data = mysqli_fetch_array($run))
		{
	?>
	
	<option value="<?php echo $data ['kelas']; ?>">
		<?php echo $data['kelas']; }; ?></option>
	</select><br><br>
	<button type="submit" name="daftarmurid">DAFTAR MURID</button>
</form>