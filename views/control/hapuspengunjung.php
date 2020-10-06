<?php
include 'koneksi.php';

$id_pengunjung = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbl_pengunjung where id='$id_pengunjung'");

// $delete = mysqli_query($conn, "$hapus");

if($delete){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil Dihapus!");
            window.location.href="../data_pengunjung.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert ("Gagal Menghapus Data");
            window.location.href="../pengunjung.php";
        </script>
    <?php
    }
?>