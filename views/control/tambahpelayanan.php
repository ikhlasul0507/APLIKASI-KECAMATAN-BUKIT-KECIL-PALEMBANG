<?php 

		include "koneksi.php";

  		if($_POST['simpan']){

  		$nama=$_POST['nama'];
        $nik=$_POST['nik'];
        $alamat = $_POST['alamat'];
        $handphone = $_POST['handphone'];
        $jenis_pelayanan = $_POST['jenis_pelayanan'];
        $status = $_POST['status'];
        $tanggal = date('Y-m-d');
   
       	$sql = "INSERT INTO tbl_pelayanan SET nama='$nama',nik='$nik',alamat='$alamat',handphone='$handphone',tanggal='$tanggal',jenis_pelayanan='$jenis_pelayanan',status='$status'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../data_pelayanan.php";
	        </script>
	    <?php
	    }
	    else
	    { var_dump($sql); die
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../data_pelayanan.php";
	        </script>
	    <?php
	    }

  	}

?>