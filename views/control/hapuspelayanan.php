<?php
include 'koneksi.php';

$id_pelayanan = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbl_pelayanan where id='$id_pelayanan'");

// $delete = mysqli_query($conn, "$hapus");

if($delete){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil Dihapus!");
            window.location.href="../data_pelayanan.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert ("Gagal Menghapus Data");
            window.location.href="../data_pelayanan.php";
        </script>
    <?php
    }
?>