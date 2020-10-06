<?php 
	$title = "Halaman Beranda";
  	include "temp/headeradmin.php";
  	include "control/koneksi.php";
?>

    
    <!-- section -->
    <div class="section layout_padding padding_bottom-0 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Halaman Beranda</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section contact_section" style="background:#12385b;">
        <div class="container">
               <div class="row">
                 
				   
				 <div class="layout_padding col-lg-12 col-md-12 col-sm-12">
				    <div class="contact_form">
					    <form action="" method="get">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="Masukan NIK / Nama" name="data" />
							   </div>
							   <div class="full field float-right">
							      <div class="center">
                                    <button type="submit" name="cari">Cari</button></div>
							   </div>
						   </fieldset>
						</form>
					</div>
					<div class="table table-responsive mt-3">
                        <?php  if(isset($_GET['cari'])){
                              $data= $_GET['data'];
                              $pelayanan=mysqli_query($conn, "SELECT * FROM tbl_pelayanan as a inner join tbl_keperluan as b on a.jenis_pelayanan=b.idk where nik LIKE '%$data%' OR nama LIKE '%$data%' ORDER BY tanggal DESC");
                              foreach ($pelayanan as $data) :
                               ?>
        						<table class="table">
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>: <?= $data['tanggal'];?></td>
                                    </tr>
        							<tr>
        								<td>Nama</td>
        								<td>: <?= $data['nama'];?></td>
        							</tr>
        							<tr>
        								<td>NIK</td>
        								<td>: <?= $data['nik']; ?></td>
        							</tr>
        							<tr>
        								<td>Alamat</td>
        								<td>: <?= $data['alamat'];?></td>
        							</tr>
        							<tr>
        								<td>Handphone</td>
        								<td>: <?= $data['handphone']; ?></td>
        							</tr>
        							<tr>
        								<td>Jenis Pelayanan</td>
        								<td>: <p class="badge badge-success"><?= $data['keperluan'];?></p></td>
        							</tr>
        							<tr>
        								<td>Status Pelayanan</td>
        								<td>:<?php if ($data['status']==1){?>
                                            <p class="badge badge-warning">Sedang Proses</p>
                                            <?php }else{?>
                                            <p class="badge badge-danger">Selesai</p>   
                                            <?php } ?>
                                        </td>
        							</tr>
        						</table>
                            <?php endforeach; }?>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
	<!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Total Data Aplikasi</span></h2>
                        </div>
					  </div>
                </div>
			  </div>
			  <style type="text/css">
			  	.total{
			  		background-color: yellow;
			  		margin-left: 80px;
			  	}
			  </style>
               <div class="row">
                <div class="col-lg-12">
                     <div class="layout_padding col-lg-12 col-md-12 col-sm-12">
				   <div class="row">
					<div class="total col-md-2">
						<small>Data Pelayanan Proses</small>
						<p style="font-size: 70px; margin-top: 10px">
						 <?php 
							$data = mysqli_query($conn,"SELECT * FROM tbl_pelayanan WHERE status='1'");
							$total = mysqli_num_rows($data);
							echo $total;
						 ?>	
						 </p>
					</div>
					<div class="total col-md-2">
						<small>Data Pelayanan Selesai</small>
						<p style="font-size: 70px; margin-top: 10px">
							<?php 
							$data = mysqli_query($conn,"SELECT * FROM tbl_pelayanan WHERE status='2'");
							$total = mysqli_num_rows($data);
							echo $total;
						 ?>
						</p>
					</div>
					<div class="total col-md-2">
						<small>Data Pengunjung</small>
						<p style="font-size: 70px; margin-top: 10px">
							<?php 
							$data = mysqli_query($conn,"SELECT * FROM tbl_pengunjung");
							$total = mysqli_num_rows($data);
							echo $total;
						 ?>
						</p>
					</div>
					<div class="total col-md-2">
						<small>Data Berita</small>
						<p style="font-size: 70px; margin-top: 10px">
							<?php 
							$data = mysqli_query($conn,"SELECT * FROM tbl_berita");
							$total = mysqli_num_rows($data);
							echo $total;
						 ?>
						</p>
					</div>
					
					</div>
                 </div>
                </div>

            </div>			  
           </div>
        </div>
	<!-- end section -->
	

	<?php 
	include "temp/footer.php";
	 ?>

   