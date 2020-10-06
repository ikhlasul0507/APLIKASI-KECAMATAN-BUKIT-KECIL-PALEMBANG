<?php 

		include "koneksi.php";

  		if($_POST['edit']){

  		$id = $_POST['id'];	
  		$judul=$_POST['judul'];
        // $photo=$_POST['photo'];
        $photo = $_FILES['photo']['name'];
        $tanggal=$_POST['tanggal'];
        $isi = $_POST['isi'];
        $file = $_FILES['photo']['tmp_name'];
        $nama_photo =$_FILES['photo']['name'];

        if($nama_photo){
	    move_uploaded_file($file, '../../img/berita/'.$photo);
	    
       	$sql = "UPDATE tbl_berita SET judul='$judul',photo='$photo',tanggal='$tanggal',isi='$isi' WHERE id='$id'";
       	}else{
       		$sql = "UPDATE tbl_berita SET judul='$judul',tanggal='$tanggal',isi='$isi' WHERE id='$id'";
       	}
	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Diedit");
	            window.location.href="../berita.php";
	        </script>
	    <?php
	    }
	    else
	    {
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal");
	        </script>
	    <?php
	    }

  	}

?>