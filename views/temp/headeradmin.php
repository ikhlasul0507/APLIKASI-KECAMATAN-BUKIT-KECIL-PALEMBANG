<?php
  include "control/koneksi.php";
  session_start();
  if(!isset($_SESSION['email']))
    {
        echo"
            <script>alert('Silahkan Login Terlebih Dahulu ! !');document.location='../index.php'</script>
        "; 
       }
?>

<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title><?= $title; ?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="../css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css" />

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
    </script>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="../images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-left" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li style="background-color: yellow">
                            <a class="nav-link active" href="konten.php">Beranda</a>
                        </li>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="data_pelayanan.php">Data Pelayanan</a>
                        </li>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="data_pengunjung.php">Data Pengunjung</a>
                        </li>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="berita.php">Data Berita</a>
                        </li>
                        <?php if ($_SESSION['role']==1): ?>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="absen_pegawai.php">Absen Pegawai</a>
                        </li>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="data_pegawai.php">Data Pegawai</a>
                        </li>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="data_user.php">Data User</a>
                        </li>                        
                        <?php endif ?>
                        <li style="background-color: yellow">
                            <a class="nav-link" href="logout.php" onClick="return confirm('Yakin Keluar ?')">Logout</a>
                        </li>
                    </ul>
                </div>
                <p style="color: blue">
                    <?php 
                    $email= $_SESSION['email'];
                    $data=mysqli_query($conn,"SELECT * FROM tbl_user WHERE email='$email' ");
                    while($tampil=mysqli_fetch_array($data))
                    { 
                      echo $tampil['nama'];
                      echo "<br>";
                      if ($role==1) {
                          echo "Admin";
                      } else {
                          echo "Pegawai";
                      }
                      
                    }
                ?>

                </p>
               
            </div>
        </nav>
    </header>
    <!-- End header -->