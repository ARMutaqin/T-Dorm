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
  <div style="margin-left: 15%; margin-top:50px;">
    <h2 align="center" style="margin-bottom:30px;">Riwayat Cek In/Out mahasiswa</h2>
    
    <!-- TABLE FORM RIWAYAT -->
        <table>

          <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Nama Mahasiswa</th>
            <th>Kamar</th>
            <th>Aktivitas</th>
            <th>Jam</th>
          </tr>

          <?php 
            include("../../koneksi.php");

            $halaman = 10;
            $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
            $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
            $query = "SELECT * FROM cek_in_out_kamar";
            $result = mysqli_query($connect, $query);
            $total = mysqli_num_rows($result);
            $pages = ceil($total/$halaman);
            $sqlQuery = mysqli_query($connect, "SELECT * FROM cek_in_out_kamar ORDER BY tanggal ASC LIMIT $mulai , $halaman ");
            $no = $mulai+1;

                    while($data = mysqli_fetch_array($sqlQuery)){ 
                      echo '<tr>';
                        echo '<td>'.$no.'</td>';  //menampilkan nomor urut
                        echo '<td>'.$data['tanggal'].'</td>'; //menampilkan data nis dari database
                        echo '<td>'.$data['nama_mhs'].'</td>';  //menampilkan data nama lengkap dari database
                        echo '<td>'.$data['kamar'].'</td>'; //menampilkan data kelas dari database
                        echo '<td>'.$data['aksi'].'</td>'; //menampilkan data jurusan dari database
                        echo '<td>'.$data['jam'].'</td>'; //menampilkan data jurusan dari database
                      $no++;
                      echo "</tr>";
                    }              
              mysqli_close($connect);
          ?>
        </table>
        <div class="pagination">
          <?php echo "<a href='index.php?halaman=".($page-1)."'> <<< </a>"; ?>
            <?php for ($i=1; $i<=$pages ; $i++){ ?>
                <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
          <?php } ?>
          <?php echo "<a href='index.php?halaman=".($page+1)."'> >>> </a>"; ?>
            
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