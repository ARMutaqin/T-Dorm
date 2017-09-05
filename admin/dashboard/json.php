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
  <title>T-Dorm | Telkom University Dormitory</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css" integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="../../css/style-dashboard.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  
  <link rel="shortcut icon" href="../../img/fav.png">
  
</head>
<body>


<!-- HEADER DAN NAVBAR -->
    <nav>
      <ul>
        <a class="teks" href="index.php"  data-0="line-height:90px;" data-300="line-height:50px;">T-Dorm</a>
        

              <!-- PROFILE -->
        <li class="profile">
           <a href="edit-data-admin.php" style="color: #d2d6dd;"><p style="font-size: 18px; text-align: center">
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

  <div class="sidebar" style="height: 500%;">
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
      <li><a href="tentang.php">Tentang</a></li>
    </ul>
  </div>
    <!-- END OF SIDEBAR -->

    
    <!-- KONTEN UTAMA -->

  <div style="margin-left: 15%; margin-top:50px;">
    <h2 align="center" style="margin-bottom:70px;">Data JSON Mahasiswa</h2>
    <div class="json">
      <?php  
          include("../../koneksi.php");

          $query = "select * from mhs";
          $data = mysqli_query($connect, $query);
          
          $dataMhs = array();
          $dataDb = array();
          $konten = array();
          
          foreach($data as $nilai){
            $konten[] = array(
            'nama' => $nilai["nama"], 'ttl' => $nilai["ttl"], 
            'agama' => $nilai['agama'], 'nim' => $nilai["nim"],
            'jurusan' => $nilai["jurusan"], 'nohp' => $nilai["nohp"], 
            'email' => $nilai["email"], 'jenisKelamin' => $nilai["jeniskelamin"], 
            'golDar' => $nilai["goldar"], 'alamatAsal' => $nilai["alamat_asal"], 'kamar' => $nilai["kamar"]
            );
          }
          
          $dataDb['data-gedung-9'] = $konten;
          $dataMhs['Mahasiswa'] = $dataDb;
          
          $json_data = json_encode($dataMhs, JSON_PRETTY_PRINT);
          echo "<p style='padding-left:10px; padding-bottom:10px;'>$json_data</p>";
          
          file_put_contents('dataMhs.json', $json_data);
      ?>
    </div>

  </div>



  <!--  FOOTER -->
  <!-- <footer>
  <br/>
    <p>&copy Copyright 2017 T-Dorm</p>
  </footer>  -->





</body>
</html>
<?php } ?>