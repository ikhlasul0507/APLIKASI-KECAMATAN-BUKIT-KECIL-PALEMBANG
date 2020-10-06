<?php 

		include "koneksi.php";

  		if($_POST['simpan']){

  		$nama=$_POST['nama'];
        $email=$_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];


       	$sql = "INSERT INTO tbl_user SET nama='$nama',email='$email',password='$password',role='$role'";

	    if (mysqli_query($conn, $sql)) 
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Data Berhasil Disimpan");
	            window.location.href="../data_user.php";
	        </script>
	    <?php
	    }
	    else
	    { 
	    ?>
	        <script type="text/javascript">
	            alert ("Gagal, Email Sudah Ada");
	            window.location.href="../data_user.php";
	        </script>
	    <?php
	    }

  	}

?>