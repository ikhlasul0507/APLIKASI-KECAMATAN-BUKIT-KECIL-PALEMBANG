<?php 

		include "koneksi.php";

  		if($_POST['simpan']){

  		$nip=$_POST['nip'];
        $nama=$_POST['nama'];
      
       	$sql = "INSERT INTO tbl_pegawai SET nip='$nip',nama='$nama'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../data_pegawai.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../data_pegawai.php";
	        </script>
	    <?php
	    }

  	}

?>