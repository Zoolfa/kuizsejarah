<h3>Profil Maklumat Pelajar : </h3>
<form action="" method="POST">
    <?php
         include'capaian.php';
         session_start();
         $no_ic = $_SESSION['no_ic'];
         echo "<b>".$_SESSION['nama']."</b>";
         $SQLprofil = "SELECT * from murid where no_ic='$no_ic' ;";
         $run = mysqli_query($capaiDB,$SQLprofil);
         $nom = 0;
         $data = mysqli_fetch_array($run);
         ?>
<table border="1">
    <tr><td align ="center">
    <img src="imgs/profil.png" width="150" height="150">
    <input type="hidden" name= "no_ic"
    value="<?php echo $data['no_ic'] ?>"></td></tr>
    <tr><td align="center">
    <input type= "text" name="nama"
    value="<?php echo $data['nama_murid'] ?>"></td></tr>
      <tr><td align="center">
    <input type ="text" name="kelas"
    value="<?php echo $data['kelas'] ?>"></td></tr> 
    <tr><td align ="center">
    <input type="text" name="pswd"
    value="<?php echo $data['password'] ?>"
    placeholder="Katalaluan Baharu" ></td><tr/>
    <tr><td align="center">
    <small>Katalaluan asal,ubah jika perlu</b></small></td></tr>
    <tr><td align="center">
    <button type="submit" name="editprofil">
    KEMAS KINI </button></td><tr>
</table></form> 