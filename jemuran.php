<!DOCTYPE html>
<html>
<head>
	<title>T-Dorm | Telkom University Dormitory</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">


  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style-dashboard.css">
  <link rel="stylesheet" type="text/css" href="../css/style-navbar.css">
	<link rel="shortcut icon" href="img/fav.png">

  
  <!-- JAVASCRIPT -->

  <script type="text/javascript" src="js/ajax.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>

</head>
<body>


<!-- HEADER DAN NAVBAR -->
    <!-- HEADER DAN NAVBAR -->
    <nav>
      <ul>
        <a class="logo" href="index.php"  data-0="line-height:90px;" data-300="line-height:50px;">
          <img src="img/Logo.png" width="80" height="40" style="margin-left: 45px; margin-top:5px;" />
        </a>
        <li style="margin-top: 10px; margin-right: 20px;"><a href="ttg.php">Hubungi Kami</a></li>
        <li style="margin-top: 10px;"><a href="bantuan.php">Bantuan</a></li>
      </ul>
    </nav>
<!-- END OF NAV BAR -->

  <!-- KONTEN -->
    <!-- SIDEBAR -->

  <div class="sidebar">
  <h3 style="text-align: center; margin: 20px 0 20px 0;">Gedung 9</h3>
    <ul>
      <li><a href="index.php"><i class="material-icons" style="float: left; margin-right: 10px;">account_balance</i>Cek In/Out kamar</a></li>
      <li><a href="jemuran.php"><i class="material-icons" style="float: left; margin-right: 10px;">vpn_key</i>Kunci jemuran</a></li>
      <li><a href="tamu.php"><i class="material-icons" style="float: left; margin-right: 10px;">people_outline</i>Tamu</a></li>    </ul>
  </div>
    <!-- END OF SIDEBAR -->
  <div style="margin-left: 25%;  margin-top: 50px;">
    <h2>Kunci Jemuran</h2>
    <form class="pure-form pure-form-aligned" style="margin-top: 50px;" method="post">
    <fieldset style="padding-top: 0;">
        <div class="pure-control-group">
            <label for="today">Hari ini</label>
            <input class="pure-input-1-3" id="today" type="date" name="today" value="<?php date_default_timezone_set('Asia/Jakarta'); 
                  $date = date('Y-m-d');  echo $date; ?>" readonly>
        </div>
        <div class="pure-control-group">
            <label for="jam">Jam</label>
            <input class="pure-input-1-3" id="jam" name="jam" type="time" value="<?php
date_default_timezone_set('Asia/Jakarta');
$time = date('H:i:s');

echo $time;
?>" readonly>
              
        </div>
        <div class="pure-control-group">
                <label for="lantai">Lantai</label>
                <select class="pure-input-1-2" name="lantai" onchange="showKamar(this.value)" >
                    <option value="" selected>-- Pilih Lantai --</option>
                    <?php  
                        
                        include("koneksi.php");

                        $query = "select * from lantai";
                        $result = mysqli_query($connect, $query);
                        echo "";
                          while ($baris = mysqli_fetch_array($result)) {
                          echo "<option value='$baris[idLantai]'>$baris[namaLantai]</option>";
                          }
                          mysqli_close($connect);
                    ?>

                </select>
        </div>
        <div class="pure-control-group">
                <label for="kamar">No. kamar</label>
                <select class="pure-input-1-2" name="kamar" id="kamar" onchange="showMhs(this.value)" required>
                    <option value="" selected="">-- Pilih No. Kamar --</option>
                </select>
        </div>
        <div class="pure-control-group">
                <label for="mhs">Nama Mahasiswa</label>
                <select class="pure-input-1-2" name="mhs" id="mhs" required>
                    <option value="" selected>-- Pilih Mahasiswa --</option>
                </select>
        </div>
        <div class="pure-control-group">
            <label for="aksi">Aksi</label>
            <input id="option-one" type="radio" name="aksi" value="pinjam" required>Pinjam
            <input id="option-two" type="radio" name="aksi" value="simpan">Simpan
        </div>
        <div class="pure-controls">
            <button type="submit" name="submitJemuran" class="pure-button" style="background-color: #0AC986; color: #fff;">Kirim</button>
        </div>
    </fieldset>
    </form>
  </div>

<?php  
        include('koneksi.php');

        if (isset($_POST['submitJemuran'])){
          // Variabel
          $tanggal = $_POST['today'];
          $jam = $_POST['jam'];
          $lantai = $_POST['lantai'];
          $kamar = $_POST['kamar'];
          $mhs = $_POST['mhs'];
          $aksi = $_POST['aksi'];
          


          $query = "INSERT INTO jemuran (tanggal, jam, lantai, kamar, mhs, aksi) values ( '$tanggal', '$jam', '$lantai', '$kamar', '$mhs', '$aksi')";
          $result = mysqli_query ($connect, $query);
      
          if($result){
            echo "<script>swal('Data berhasil dimasukan oleh saudara $mhs pada jam $jam , silahkan hubungi helpdesk untuk proses selanjutnya!'); </script>";
          }
          else{
            echo "<script>swal('Data gagal dimasukan, mohon ulangi kembali!'); </script>";
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