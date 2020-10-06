<?php 
$title= "Halaman Login";
include "temp/header.php";

include "control/koneksi.php";

  session_start();
  if(isset($_POST['login'])){
	  $sql=mysqli_query($conn,"select * from tbl_user where email='$_POST[email]' and password='$_POST[password]' and role='$_POST[role]'");
	  if(mysqli_num_rows($sql)>0){
		$login=mysqli_fetch_array($sql);
	      $_SESSION['email']=$login['email'];  
	      $_SESSION['role']=$login['role'];
	      $_SESSION['nama_user']=$login['nama'];
			echo"
			<script>alert('Login Berhasil');
			document.location='konten.php'</script>
		";
	  }else{
		 echo"
			<script>alert('Login Gagal, Data Yang Dimasukan Salah !');document.location='login.php'</script>
		"; 
	  }
  }

 ?>
<section class="inner_banner">
	  <div class="container">
	      <div class="row">
		      <div class="col-12">
			     <div class="full">
				     <h3>Contact us</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<!-- end section -->
   
	<!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="full float-right_img">
                        <img src="../images/img10.png" alt="#">
                    </div>
                 </div>
				 <div class="col-lg-4 col-md-4 col-sm-12" style="background:silver;">
				    <div class="contact_form">
					    <form action="" method="post">
						   <fieldset>
						       <p style="background-color: yellow; text-align: center;margin-top: 10px">Silahkan Anda Login !</p>
							   <div class="full field">
							      <input class="form-control" type="email" placeholder="Email" name="email" />
							   </div>
							   <div class="full field">
							      <select name="role" class="form-control">
					                <option value="" disabled selected>- Pilih Level -</option>
					                <option value="1">Admin</option>
					                <option value="2">Pegawai</option>
						  		   </select>
							   </div>
							   <div class="full field">
							      <input class="form-control" type="password" placeholder="Password" name="password" />
							   </div>
							  
							   <div class="full field">
							      <div ><button name="login" style="width: 100%" type="submit">Login</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
	<?php 

include "temp/footer.php";
 ?>