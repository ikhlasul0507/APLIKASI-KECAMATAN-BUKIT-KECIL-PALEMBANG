<?php 
$title ="Data Pegawai";
  include "temp/headeradmin.php";
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
	      
	      <div class="modal-body" style="height: 180px">
	        <form action="control/tambahpegawai.php" method="post" enctype="multipart/form-data">

	        	<small>*NIP</small>
	        	<input class="form-control mt-2" type="number" name="nip" placeholder="NIP" required>
	        	<small>*Nama</small>
	        	<input class="form-control mt-2" type="text" name="nama" placeholder="Nama" required>
	        	
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
				 	<a href="print/printpengunjung.php" class="btn btn-light" target="_blank"><span class="fa fa-print mr-2"></span>Print</a>
				    <a href="excel/excelpengunjung.php" class="btn btn-danger"><span class="fa fa-book mr-2"></span>Excel</a>
					
					<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data">
							<thead style="background-color: yellow">
								<td>ID</td>
								<td>NIP</td>
								<td>Nama</td>
								<td>Aksi</td>
							</thead>
							<tbody>
							<?php
                            $pegawai=mysqli_query($conn,"SELECT * FROM tbl_pegawai ORDER BY id DESC");
                            foreach ($pegawai as $data) { ?>	
							<tr>
								<td><?= $data['id'];?></td>
								<td><?= $data['nip']; ?></td>
								<td><?= $data['nama'];?></td>
								<td>
									<a href="control/hapuspegawai.php?id=<?= $data['id'];?>" class="btn btn-danger" onClick="return confirm('Yakin Di Hapus ?')"><span class="fa fa-trash mr-2"></span>Hapus Data</a>
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
	

	<?php 
	include "temp/footer.php";
	 ?>

   