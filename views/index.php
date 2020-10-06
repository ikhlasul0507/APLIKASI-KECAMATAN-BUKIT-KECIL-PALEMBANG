<?php 
    $title ="Selamat Datang Di Kecamatan Ilir Barat I";
	include "temp/header.php";
    include "control/koneksi.php";


 ?>

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(../images/kec.jpeg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3><span span class="theme_color">Selamat Datang</span><br>Kecamatan Ilir Barat I</h3>
                                        <h4>JL.Kap A Rivai No 67 Palembang</h4>
                                        <br>
                                        <div class="full center">
										    
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../images/kec.jpeg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3 ><span span class="theme_color" >Selamat Datang</span><br>Kecamatan Ilir Barat I</h3>
                                        <h4>JL.Kap A Rivai No 67 Palembang</h4>
                                        <br>
                                        <div class="full center">
										    
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../images/kec.jpeg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3 ><span span class="theme_color" >Selamat Datang</span><br>Kecamatan Ilir Barat I</h3>
                                        <h4>JL.Kap A Rivai No 67 Palembang</h4>
                                        <br>
                                        <div class="full center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(../images/kec.jpeg);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                        <h3 ><span span class="theme_color" >Selamat Datang</span><br>Kecamatan Ilir Barat I</h3>
                                        <h4>JL.Kap A Rivai No 67 Palembang</h4>
                                        <br>
                                        <div class="full center">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Periksa Pelayanan</span></h2>
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
                           <h2><span>Berita</span></h2>
                        </div>
                      </div>
                </div>
              </div>
               <div class="row">
                <div class="col-lg-12">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="full blog_img_popular">
                                          <img class="img-responsive" src="../images/img9.png" alt="#" />
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <h4 class="mt-2">Berita Kegiatan</h4>
                                          <p>Kecamatan Ilir Barat I</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $berita=mysqli_query($conn,"SELECT * FROM tbl_berita");
                            foreach ($berita as $data) { ?> 
                             <div class="carousel-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                       <div class="full blog_img_popular">
                                          <img class="img-responsive" src="../img/berita/<?= $data['photo']; ?>" alt="#" />
                                          
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="full blog_img_popular">
                                          <h4 class="mt-2"><?= $data['judul'];?></h4>
                                          <p><?= $data['isi'];?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>

                    </div>
                </div>

            </div>            
           </div>
        </div>
    <!-- end section -->	

	<?php 
	include "temp/footer.php";
	 ?>

   