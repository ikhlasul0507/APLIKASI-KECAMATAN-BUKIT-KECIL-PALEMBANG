<?php 

		include "koneksi.php";

  		if($_POST['simpan']){

  		$kode_pengunjung=$_POST['kode_pengunjung'];
        $nama=$_POST['nama'];
        $alamat = $_POST['alamat'];
        $keperluan = $_POST['keperluan'];
        $tanggal = $_POST['tanggal'];


       	$sql = "INSERT INTO tbl_pengunjung SET kode_pengunjung='$kode_pengunjung',nama='$nama',alamat='$alamat',keperluan='$keperluan',tanggal='$tanggal'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../pengunjung.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../pengunjung.php";
	        </script>
	    <?php
	    }

  	}

?>