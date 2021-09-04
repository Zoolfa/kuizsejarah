<?php
//tulis pemboleh ubah $capaiBD
//tulis fungsi kemdalian mysqli_connect()
//masukkan butriran host,user,password dan database

	$capaiDB=mysqli_connect('localhost','root','','kuizsejarah');

	if(!$capaiDB){
		echo "Capaian ke pangkalan data tidak berjaya.";
	}

?>