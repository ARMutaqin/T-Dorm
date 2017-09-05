<?php  
  session_start();
  if(empty($_SESSION['login'])){
    header("location: ../index.php");
  }
  else{
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  

  <title>T-Dorm | Telkom University Dormitory</title>

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">



	<link rel="stylesheet" type="text/css" href="../../css/style-dashboard.css">
	<link rel="shortcut icon" href="../../img/fav.png">


  <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
  
</head>
<body>


<!-- HEADER DAN NAVBAR -->
    <nav>
      <ul>
        <a class="teks" href="index.php"  data-0="line-height:90px;" data-300="line-height:50px;">T-Dorm</a>
        

              <!-- PROFILE -->
        <li class="profile">
           <a href="#" style="color: #d2d6dd;"><p style="font-size: 18px; text-align: center">
             <?php
              if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
              }
             ?>
           </p></a>

            <ul>
              <li><a href="edit-data-admin.php">Profile</a></li>
              <li><a href="#">Settings</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>

        </li>


              <!-- END OF PROFILE -->

        <li style="margin-right: 20px;"><a href="../../ttg.php">Tentang</a></li>
        <li><a href="../../bantuan.php">Bantuan</a></li>
      </ul>
    </nav>
<!-- END OF NAV BAR -->

  <!-- KONTEN -->
    <!-- SIDEBAR -->

  <div class="sidebar">
    <h3 style="text-align: center; margin: 20px 0 20px 0;">Admin Dashboard</h3>

    <ul>
      <li><a href="index.php">Riwayat<i class="material-icons" style="float: right;">expand_more</i></a>
          <ul>
            <li><a href="index.php">Cek In/Out kamar</a></li>
            <li><a href="riwayat-jemuran.php">Kunci Jemuran</a></li>
            <li><a href="riwayat-tamu.php">Tamu</a></li>
          </ul>
      </li>

      <li><a href="data-mhs.php">Mahasiswa<i class="material-icons" style="float: right;">expand_more</i></a>
          <ul>
            <li><a href="tambah-data-mhs.php">Tambah data</a></li>
          </ul>
      </li>

      <li><a href="json.php">JSON Data</a></li>
    </ul>
  </div>
    <!-- END OF SIDEBAR -->

    <!-- KONTEN UTAMA -->




  <div style="margin-left: 25%; margin-top: 50px;">
  <h2>Edit data Admin</h2>

   <?php  
        include('../../koneksi.php');

        $show = mysqli_query($connect, "SELECT * FROM admin");


        if(mysqli_num_rows($show) == 0){
          echo "<script>window.history.back()</script>";
        }
        else{
          $data = mysqli_fetch_array($show);
        }
  ?>

    <form class="pure-form pure-form-aligned" style="margin-top: 50px;" method="post">
    <fieldset style="padding-top: 0;">
        <div class="pure-control-group">
            <label for="name">Nama lengkap</label>
            <input class="pure-input-1-3" id="nama" name="nama" type="text" value="<?php echo $data['nama']; ?>" placeholder="Masukan nama lengkap mahasiswa" required>
        </div>
        <div class="pure-control-group">
            <label for="nim">NIM</label>
            <input class="pure-input-1-3" id="nim" name="nim" type="text" value="<?php echo $data['nim']; ?>" placeholder="Masukan NIM mahasiswa" required>
        </div>
        <div class="pure-control-group">
            <label for="jurusan">Jurusan</label>
            <input class="pure-input-1-3" id="jurusan" name="jurusan" type="text" value="<?php echo $data['jurusan']; ?>"  placeholder="Masukan jurusan mahasiswa" required>
        </div>

        <div class="pure-control-group">
            <label for="username">Username</label>
            <input class="pure-input-1-3" id="username" name="username" type="text" value="<?php echo $data['username']; ?>" placeholder="Masukan username" required>
        </div>
        <div class="pure-control-group">
            <label for="password">Password</label>
            <input class="pure-input-1-3" id="password" name="password" type="password" value="<?php echo $data['password']; ?>" placeholder="Masukan password" required>
        </div>
        <div class="pure-control-group">
            <label for="nohp">No. Hp</label>
            <input class="pure-input-1-3" id="nohp" name="nohp" type="text" value="<?php echo $data['nohp']; ?>" placeholder="Masukan No. Handphone mahasiswa" required>
        </div>
        <div class="pure-control-group">
            <label for="alamat-asal">Alamat asal</label>
            <textarea class="pure-input-1-2" id="alamat-asal" name="alamatAsal" placeholder="Masukan alamat asal mahasiswa" required><?php echo $data['alamat']; ?></textarea>
        </div>
        <div class="pure-controls">
            <button type="submit" name="submitEditAdmin" class="pure-button" style="background-color: #0AC986; color: #fff;">Edit data</button>
        </div>
    </fieldset>
    </form>
  </div>

  <?php  
        include('../../koneksi.php');

        if (isset($_POST['submitEditAdmin'])){
          // Variabel
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $jurusan = $_POST['jurusan'];
          $username = $_POST['username'];
          $password = $_POST['password'];

          $nohp = $_POST['nohp'];
          $alamatAsal = $_POST['alamatAsal'];
          


          $updateQuery = "UPDATE admin SET nama='$nama', nim='$nim', jurusan='$jurusan', username='$username', password='$password', nohp='$nohp',  alamat='$alamatAsal'";
          $result = mysqli_query ($connect, $updateQuery);
      
          if($result){
            echo "<script>swal('Data admin dengan nama $nama dan NIM $nim berhasil diedit.')</script>";
          }
          else{
            echo "<script>swal('Data gagal diedit, mohon ulangi kembali!'); </script>";
          }
        }

  ?>


  <!-- 	FOOTER -->
	<!-- <footer>
  <br/>
		<p>&copy Copyright 2017 T-Dorm</p>
	</footer>	 -->





</body>
</html>


<?php } ?>