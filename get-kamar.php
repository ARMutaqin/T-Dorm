<?php  

	$id = $_GET["kamar"];
	
	include("koneksi.php");


	$query = "select * from kamar where idLantai ='".$id."'";

	$result = mysqli_query($connect, $query);

	echo "";
    while ($baris = mysqli_fetch_array($result)) {
		echo "<option value='$baris[idKamar]'>$baris[namaKamar]</option>";
    }
    mysqli_close($connect);
?>