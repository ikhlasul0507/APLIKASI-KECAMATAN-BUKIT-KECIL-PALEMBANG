<?php 
	$title ="Data Berita";
  	include "temp/headeradmin.php";
  	include "control/koneksi.php";
?>
    <!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $title ?></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      
	      <div class="modal-body">
	        <form action="control/tambahberita.php" method="post" enctype="multipart/form-data">
	        	<small>*Judul Berita</small>
	        	<input class="form-control mt-2" type="text" name="judul" placeholder="Judul Berita" required>
	        	<small>*Photo Berita</small>
	        	<input class="form-control mt-2" type="file" name="photo" placeholder="Judul Berita" required>
	        	<small>*Waktu Berita</small>
	        	<input class="form-control mt-2" type="date" name="tanggal" placeholder="Tanggal Berita" required>
	        	
	        	<small>*Isi Berita</small>
	        	<textarea class="form-control mt-2" type="text" name="isi"  placeholder="Isi Berita" required></textarea>
	        	
	        
	      </div>
	      <div class="modal-footer">
                  <td>
                    <p>
                      <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
                    </p>
                  </td>
            </div>
            </form>
	    </div>
	  </div>
	</div>
			
				<?php 
				$berita=mysqli_query($conn,"SELECT * FROM tbl_berita");
				foreach ($berita as $k) :
                    $id= $k['id'];
                    $judul= $k['judul'];
                    $photo= $k['photo'];
                    $tanggal = $k['tanggal'];
                    $isi = $k['isi'];
                  ?>

                  <div class="modal fade" id="modal-edit<?php echo $k['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel">Edit <?= $title ?></h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      
					      <div class="modal-body">
					        <form class="form form-control" action="control/editberita.php" method="post" enctype="multipart/form-data">
					        	<small>*Judul Berita</small>
					        	<input type="hidden" name="id" value="<?= $k['id'];?>">
					        	<input class="form-control mt-2" type="text" name="judul" placeholder="Judul Berita" value="<?= $k['judul'];?>">
					        	<small>*Photo Berita, Biarkan Saja Jika Tidak Diganti</small>
					        	<input class="form-control mt-2" type="file" name="photo" placeholder="Judul Berita" >
					        	<small>*Waktu Berita</small>
					        	<input class="form-control mt-2" type="date" name="tanggal" placeholder="Tanggal Berita" value="<?= $k['tanggal'];?>">
					        	
					        	<small>*Isi Berita</small>
					        	<textarea class="form-control mt-2" type="text" name="isi"  placeholder="Isi Berita"><?= $k['isi']; ?></textarea>
					        	
					        
					      </div>
					      <div class="modal-footer">
				                  <td>
				                    <p>
				                      <input type="submit" name="edit" class="btn btn-primary" value="Edit">
				                    </p>
				                  </td>
				            </div>
				            </form>
					    </div>
					  </div>
					</div>

					<?php endforeach; ?>
    <!-- section -->
    <div class="section layout_padding padding_bottom-0 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span><?= $title; ?></span></h2>
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
				    <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus mr-2"></span>Tambah Data</button>
				    <a href="print/printberita.php" class="btn btn-light" target="_blank"><span class="fa fa-print mr-2"></span>Print</a>
				    <a href="excel/excelberita.php" class="btn btn-danger"><span class="fa fa-book mr-2"></span>Excel</a>
					<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data">
							<thead style="background-color: yellow">
								<td>Judul</td>
								<td>Waktu</td>
								<td>Photo</td>
								<td>Isi Berita</td>
								<td>Aksi</td>
							</thead>
							<tbody>
							<?php
                            $berita=mysqli_query($conn,"SELECT * FROM tbl_berita ORDER BY id DESC" );
                            foreach ($berita as $data) { ?>	
							<tr>
								<td><?= $data['judul'];?></td>
								<td><?= $data['tanggal']; ?></td>
								<td><img src="../img/berita/<?= $data['photo']; ?>" style="border-radius: 100%; width: 100px; height: 100px"></td>
								<td><?= $data['isi']; ?></td>
								<td>
									<a href="" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit<?= $data['id'];?>"><span class="fa fa-pencil mr-2"></span>Edit Data</a>
									<a href="control/hapusberita.php?id=<?= $data['id'];?>" class="btn btn-danger" onClick="return confirm('Yakin Di Hapus ?')"><span class="fa fa-trash mr-2"></span>Hapus Data</a>
								</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
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

   