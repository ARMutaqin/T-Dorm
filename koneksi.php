<?php
	$connect = mysqli_connect("localhost", "root", "", "database_tdorm");
	if(!$connect){
       die('Koneksi gagal: '.mysqli_error());
    }
?>


