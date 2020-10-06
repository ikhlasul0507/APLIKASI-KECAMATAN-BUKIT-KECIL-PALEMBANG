<?php 
$title ="Data Pelayanan";
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
	      
	      <div class="modal-body">
	        <form action="control/tambahpelayanan.php" method="post" >
	        	<small>*Nama</small>
	        	<input class="form-control mt-2" type="text" name="nama" placeholder="Nama" required>
	        	<small>*NIK</small>
	        	<input class="form-control mt-2" type="number" name="nik" placeholder="NIK" required>
	        	<small>*Alamat</small>
	        	<textarea class="form-control mt-2" type="text" name="alamat"  placeholder="Alamat" required></textarea>
	        	<small>*Handphone</small>
	        	<input class="form-control mt-2" type="number" name="handphone" placeholder="Handphone" required>
	        	<small>*Jenis Pelayanan</small>
	        	<select name="jenis_pelayanan" class="form-control" required>
                    <option value="" disabled selected>- Keperluan -</option>
                    <?php
                    $keperluan=mysqli_query($conn,"SELECT * FROM tbl_keperluan");
                    foreach ($keperluan as $data) : ?>
                    <option value="<?= $data['idk'];?>"><?= $data['keperluan'];?></option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="status" value="1">
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

				    
				    <form action="" method="get">
				    <input type="submit" name="cari" value="Cari" class="btn btn-warning" style="float: right; margin-left: 10px">
				    <input type="date" class="form-control" name="tgl2" style="float: right; width: 200px;margin-left: 10px" required>
				    <input type="date" class="form-control" name="tgl1" style="float: right;margin-left: 10px; width: 200px" required>
				    <button class="btn btn-warning " data-toggle="modal" data-target="#exampleModal"><span class="fa fa-plus mr-2"></span>Tambah Data</button>
				    <a href="print/printpelayanan.php" class="btn btn-light" target="_blank"><span class="fa fa-print mr-2"></span>Print</a>
				    <a href="excel/excelpelayanan.php" class="btn btn-danger"><span class="fa fa-book mr-2"></span>Excel</a>
					</form>
					<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data">
							<thead style="background-color: yellow">
								<td>Nama</td>
								<td>NIK</td>
								<td>Alamat</td>
								<td>Handphone</td>
								<td>Tanggal</td>
								<td>Keperluan</td>
								<td>Status</td>
								<td>Aksi</td>
							</thead>
							<tbody>
							<?php
	                         if(isset($_GET['cari'])){
	                          $tgl1= $_GET['tgl1'];
	                          $tgl2= $_GET['tgl2'];

	                          $pengunjung=mysqli_query($conn, "SELECT * FROM tbl_pelayanan as a inner join tbl_keperluan as b on a.jenis_pelayanan=b.idk  where tanggal between '$tgl1' and '$tgl2' ORDER BY id DESC");
	                          foreach ($pengunjung as $data) : ?>	
							<tr>
								<td><?= $data['nama']; ?></td>
								<td><?= $data['nik'];?></td>
								<td><?= $data['alamat'];?></td>
								<td><?= $data['handphone'];?><br>
									<a href="https://api.whatsapp.com/send?phone=62<?= $data['handphone']; ?>" target="blank"  title='Chat Whatsapp'><span class="fa fa-whatsapp fa-lg"></span></a>
								</td>
								<td><?= $data['tanggal'];?></td>
								<td><?= $data['keperluan'] ?></td>
								<td>
									<?php if ($data['status']==1){?>
										<p class="badge badge-warning">Sedang Proses</p>
										<a href="control/ubahpelayanan.php?id=<?= $data['id'];?>" class="badge badge-primary">Ubah</a>
									<?php }else{?>
										<p class="badge badge-danger">Selesai</p>	
									<?php } ?>
								</td>
								<td>
									
									<a href="control/hapuspelayanan.php?id=<?= $data['id'];?>" class="btn btn-danger" onClick="return confirm('Yakin Di Hapus ?')" title='Hapus'><span class="fa fa-trash "></span></a>
								</td>
							</tr>
							<?php endforeach; }else{
							
                            $pengunjung=mysqli_query($conn,"SELECT * FROM tbl_pelayanan as a inner join tbl_keperluan as b on a.jenis_pelayanan=b.idk ORDER BY id DESC");
                            foreach ($pengunjung as $data) { ?>	
							<tr>
								<td><?= $data['nama']; ?></td>
								<td><?= $data['nik'];?></td>
								<td><?= $data['alamat'];?></td>
								<td><?= $data['handphone'];?><br>
									<a href="https://api.whatsapp.com/send?phone=62<?= $data['handphone']; ?>" target="blank"  title='Chat Whatsapp'><span class="fa fa-whatsapp fa-lg"></span></a>
								</td>
								<td><?= $data['tanggal'];?></td>
								<td><?= $data['keperluan'] ?></td>
								<td>
									<?php if ($data['status']==1){?>
										<p class="badge badge-warning">Sedang Proses</p>
										<a href="control/ubahpelayanan.php?id=<?= $data['id'];?>" class="badge badge-primary">Ubah</a>
									<?php }else{?>
										<p class="badge badge-danger">Selesai</p>	
									<?php } ?>
								</td>
								<td>
									
									<a href="control/hapuspelayanan.php?id=<?= $data['id'];?>" class="btn btn-danger" onClick="return confirm('Yakin Di Hapus ?')" title='Hapus'><span class="fa fa-trash "></span></a>
								</td>
							</tr>
							<?php } }?>
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

   