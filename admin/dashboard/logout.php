<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">

  <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<body>



<?php
	session_start();
	if(isset($_SESSION['login'])){
		unset ($_SESSION);
		session_destroy();
		
		echo "<script type='text/javascript'>
			// swal('Berhasil keluar!');

			window.location.href = '../index.php';

			</script>";

}
	
?>

</body>
</html>