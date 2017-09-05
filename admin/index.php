<?php  
  
  session_start();
  include "../koneksi.php";
  if(isset($_POST['loginButton'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    
    $query = "select * from admin where username='$user' and password='$pass'";
    $data = mysqli_query ($connect, $query);
    if(mysqli_num_rows($data)>0){
      $_SESSION['login'] = $user;
      echo "<script>window.location.href = 'dashboard/index.php';</script>";
      
    }
    else{
      echo "<h3 style='margin-top:100px;' align='center'>Anda gagal login. Silahkan ulangi kembali pada link dibawah ini!</h3>";
      echo "<h3 align='center'><a href='index.php'><b>LOGIN ADMIN</b></a></h3>";
    }
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
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/style-navbar.css">
  <link rel="shortcut icon" href="../img/fav.png">
</head>
<body>

  <!-- HEADER DAN NAVBAR -->
    <nav>
      <ul>
        <a class="logo" href="index.php"  data-0="line-height:90px;" data-300="line-height:50px;">
          <img src="../img/Logo.png" width="115" height="50"/>
        </a>
        <li><a href="../ttg.php">Tentang</a></li>
        <li><a href="../bantuan.php">Bantuan</a></li>
      </ul>
    </nav><br/>


  <!-- KONTEN -->
  <center>
    <h1>Telkom University Dormitory</h1>
    <h3 style="margin-top: 7px;">Silahkan masukan akses login Anda</h3>
  </center>
  <br/>

  <!-- FORM LOGIN -->
  <div class="form-login">
    <h2 align="center" >Login Admin</h2><br/>
    <center>
    <form method="post">
      <input class="w3-input w3-border w3-round-large" name="username" type="text" placeholder="Masukan username" required><br/>
      <input class="w3-input w3-border w3-round-large" name="password" type="password" placeholder="Masukan password" required><br/>
      <input type="submit" class="log-btn" name="loginButton" value="Log In">
    </form>
    </center>
  </div>


   <!--   FOOTER -->

  <footer>
  <br/>
    <p>&copy Copyright 2017 T-Dorm</p>
  </footer>     
</body>
</html>
 <?php  
  }
 ?>