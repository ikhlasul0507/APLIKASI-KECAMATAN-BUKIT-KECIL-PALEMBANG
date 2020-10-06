<?php 
    include "control/koneksi.php";
    $title ="Data Pengunjung";
	  include "temp/header.php";

    $query = mysqli_query($conn, "SELECT max(kode_pengunjung) as kodeTerbesar FROM tbl_pengunjung");
    $data = mysqli_fetch_array($query);
    $kodePeng = $data['kodeTerbesar'];

    $urutan = (int) substr($kodePeng, 3,3);
    $urutan++;
    $huruf = "PE";
    $kodePeng = $huruf.sprintf("%03s", $urutan);
 ?>

    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Data Pengunjung</span></h2>
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
					    <form action="control/tambahpengunjung.php" method="post">
						   <fieldset>
                  <div class="full field">
                    <input type="text" placeholder="Kode Pengunjung" value="<?php echo $kodePeng; ?>" name="kode_pengunjung" readonly />
                 </div>
						       <div class="full field">
							      <input type="text" placeholder="Masukan Nama" name="nama" required />
							   </div>
                 <div class="full field">
                  <input type="text" placeholder="Alamat" name="alamat" required />
                </div>
                <div class="full field">
                  <select name="keperluan" class="form-control" required>
                    <option value="" disabled selected>- Keperluan -</option>
                    <?php
                    $keperluan=mysqli_query($conn,"SELECT * FROM tbl_keperluan");
                    foreach ($keperluan as $data) : ?>
                    <option value="<?= $data['idk'];?>"><?= $data['keperluan'];?></option>
                    <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="full field">
                      <input type="text" placeholder="Alamat" name="tanggal" value="<?= date('Y-m-d');?>" readonly />
                  </div>
							   <div class="full field float-right">
							      <div>
                      <input type="submit" name="simpan" class="btn btn-warning" value="Simpan">
                    </div>
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

   