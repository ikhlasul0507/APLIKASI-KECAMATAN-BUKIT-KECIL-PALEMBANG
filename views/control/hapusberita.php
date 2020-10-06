<?php
include 'koneksi.php';

$id_berita = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbl_berita where id='$id_berita'");

// $delete = mysqli_query($conn, "$hapus");

if($delete){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil Dihapus!");
            window.location.href="../berita.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert ("Gagal Menghapus Data");
            window.location.href="../berita.php";
        </script>
    <?php
    }
?>