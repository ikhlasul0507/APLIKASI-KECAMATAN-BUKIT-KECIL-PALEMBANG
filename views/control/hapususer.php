<?php
include 'koneksi.php';

$id_user = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbl_user where id='$id_user'");

// $delete = mysqli_query($conn, "$hapus");

if($delete){


    ?>
	<script type="text/javascript">
            alert ("Data Berhasil Dihapus!");
            window.location.href="../data_user.php";
        </script>
    <?php
    }
    else
    {
    ?>
        <script type="text/javascript">
            alert ("Gagal Menghapus Data");
            window.location.href="../data_user.php";
        </script>
    <?php
    }
?>