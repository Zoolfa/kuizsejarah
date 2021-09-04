<?php
	include 'capaian.php';
	$count = 0;
	$no_ic = $_POST['no_ic'];
	$pass = $_POST['pass'];
	$SQLLogin = "SELECT * from murid
	where no_ic = '$no_ic' && password='$pass' ;";
	$run=mysqli_query($capaiDB,$SQLLogin);
	$data=mysqli_fetch_array($run);
		if(empty($data['no_ic'])){
		?>
			<script type="text/javascript">
				window.alert("Maaf Username/Password salah.");
				window.location= 'login.php';
			</script>
		<?php
		}else{
			//membina session
			session_start();
			$_SESSION['no_ic'] = $data['no_ic'];
			$_SESSION['nama'] = $data['nama'];
			echo "Salam kunjungan, ".$_SESSION['nama']. ".";
			?>
			<script type = "text/javascript">
				window.alert("Tahniah login berjaya.");
				window.location = 'ahli.php';
			</script>
			<?php
		}
?>





