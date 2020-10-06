<?php
include 'koneksi.php';

$id_absen = $_GET['ida'];

$delete = mysqli_query($conn, "DELETE FROM tbl_absen where ida='$id_absen'");

// $delete = mysqli_query($conn, "$hapus");

if($delete){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil Dihapus!");
            window.location.href="../absen_pegawai.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert ("Gagal Menghapus Data");
            window.location.href="../absen_pegawai.php";
        </script>
    <?php
    }
?>