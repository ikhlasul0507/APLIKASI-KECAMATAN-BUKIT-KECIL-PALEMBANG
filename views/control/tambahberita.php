<?php 

		include "koneksi.php";

  		if($_POST['simpan']){

  		$judul=$_POST['judul'];
        //$photo=$_POST['photo'];
        $photo = $_FILES['photo']['name'];
        $tanggal=$_POST['tanggal'];
        $isi = $_POST['isi'];
        $file = $_FILES['photo']['tmp_name'];

        
	    move_uploaded_file($file, '../../img/berita/'.$photo);
	    
       	$sql = "INSERT INTO tbl_berita SET judul='$judul',photo='$photo',tanggal='$tanggal',isi='$isi'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../berita.php";
	        </script>
	    <?php
	    }
	    else
	    {
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	            window.location.href="../berita.php";
	        </script>
	    <?php
	    }

  	}

?>