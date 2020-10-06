<?php 

  include "koneksi.php";

  if(isset($_POST['simpan'])){

  	$nip = $_POST['nip'];
  	$waktu = $_POST['waktu'];

  	if($nip){

	  $sql=mysqli_query($conn,"select * from tbl_pegawai where nip='$nip'");

	  if(mysqli_num_rows($sql)>0){
		
		// konding absen hanya bisa 1 kali

			mysqli_query($conn,"INSERT INTO tbl_absen SET nip='$nip',waktu='$waktu'");

			echo"
			<script>alert('Absen Berhasil');
			document.location='../pegawai.php'</script>
		";
	  }else{
		 echo"
			<script>alert('Anda Bukan Pegawai, NIK Tidak Di Temukan !');document.location='../pegawai.php'</script>
		"; 
	  }
	}else{
		 echo"
			<script>alert('Masukan NIK Terlebih Dahulu !');document.location='../pegawai.php'</script>
		"; 
	  }

  }


 ?>