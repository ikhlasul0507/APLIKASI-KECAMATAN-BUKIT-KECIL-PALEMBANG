<?php
include 'koneksi.php';

$id_pegawai = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbl_pegawai where id='$id_pegawai'");

// $delete = mysqli_query($conn, "$hapus");

if($delete){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil Dihapus!");
            window.location.href="../data_pegawai.php";
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