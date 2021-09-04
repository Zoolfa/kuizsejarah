<h3>Jadual Pencapaian Anda</h3>
<?php
	include 'capaian.php';
	$nokp = $_SESSION['no_ic'];
	$nama = $_SESSION['nama'];
	echo "<table border='1'>
			<tr><th>Bil</th>
				<th>No IC</th>
				<th>Nama Murid</th>
				<th>Kelas</th>
				<th>Nama Kuiz</th>
				<th>Tarikh Kuiz</th>
				<th>Skor</th>
			</tr>";
	$bil=0;
	$SQLcari="SELECT * from murid inner join ambil on
	murid.no_ic=ambil.no_ic where murid.no_ic='$nokp';";
	$run=mysqli_query($capaiDB,$SQLcari);
	while($data=mysqli_fetch_array($run))
		{
			$bil++;
			echo "<tr><td>".$bil."</td>
					  <td>".$data['no_ic']."</td>
					  <td>".$data['nama_murid']."</td>
					  <td>".$data['kelas']."</td>
					  <td>".$data['namakuiz']."</td>
					  <td>".$data['Tarikh_jawab']."</td>
					  <td>".$data['markah']."</td>
				  </tr>";
		}
	echo "</table>";
	echo "<br>";
	//Letaakkan butang cetak jenis javascript
?>
<center><button onclick="fungsiCetak()">CETAK</button></center>
<script type="text/javascript">
	function fungsiCetak(){
		window.print();
	}
</script>