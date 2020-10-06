<?php
include 'koneksi.php';

$id_pelayanan = $_GET['id'];

$status = 2;

$ubahpelayanan = mysqli_query($conn, "UPDATE tbl_pelayanan SET status='$status' WHERE id='$id_pelayanan'");

// $delete = mysqli_query($conn, "$hapus");

if($ubahpelayanan){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil DiUbah!");
            window.location.href="../data_pelayanan.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert ("Gagal Mengubah Data");
            window.location.href="../data_pelayanan.php";
        </script>
    <?php
    }
?>