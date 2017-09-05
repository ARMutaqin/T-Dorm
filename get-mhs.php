<?php  
	$id = $_GET["mhs"];
	
	include("koneksi.php");


	$query = "select * from mhs where kamar ='".$id."'";

	$result = mysqli_query($connect, $query);

	echo "";
    while ($baris = mysqli_fetch_array($result)) {
		echo "<option value='$baris[nama]'>$baris[nama]</option>";
    }
    mysqli_close($connect);
?>