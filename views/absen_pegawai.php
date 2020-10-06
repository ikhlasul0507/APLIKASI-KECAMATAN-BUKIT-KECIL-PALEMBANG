<?php 
$title ="Data Absen Pegawai";
  include "temp/headeradmin.php";
?>

    
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
				    
				    <a href="print/printabsen.php" class="btn btn-light" target="_blank"><span class="fa fa-print mr-2"></span>Print</a>
				    <a href="excel/excelabsen.php" class="btn btn-danger"><span class="fa fa-book mr-2"></span>Excel</a>
					</form>
					<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data">
							<thead style="background-color: yellow">
								<td>ID</td>
								<td>NIK</td>
								<td>Nama</td>
								<td>Tanggal</td>
								<td>Aksi</td>
							</thead>
							<tbody>
							<?php
	                         if(isset($_GET['cari'])){
	                          $tgl1= $_GET['tgl1'];
	                          $tgl2= $_GET['tgl2'];

	                          $absen=mysqli_query($conn, "SELECT * FROM tbl_absen as a inner join tbl_pegawai as b on a.nip=b.nip where waktu between '$tgl1' and '$tgl2' ORDER BY waktu DESC");
	                          foreach ($absen as $data) :
	                          	?>
                          		<tr>
								<td><?= $data['ida'];?></td>
								<td><?= $data['nip']; ?></td>
								<td><?= $data['nama'];?></td>
								<td><?= $data['waktu']; ?></td>
								<td>
									<a href="control/hapusabsen.php?ida=<?= $data['ida'];?>" class="btn btn-danger" onClick="return confirm('Yakin Di Hapus ?')"><span class="fa fa-trash mr-2"></span>Hapus Data</a>
								</td>
							</tr>
							<?php endforeach; }
							else{
                            $absen=mysqli_query($conn,"SELECT * FROM tbl_absen as a inner join tbl_pegawai as b on a.nip=b.nip ORDER BY waktu DESC");
                            foreach ($absen as $data) { ?>	
							<tr>
								<td><?= $data['ida'];?></td>
								<td><?= $data['nip']; ?></td>
								<td><?= $data['nama'];?></td>
								<td><?= $data['waktu'] ?></td>
								<td>
									<a href="control/hapusabsen.php?ida=<?= $data['ida'];?>" class="btn btn-danger" onClick="return confirm('Yakin Di Hapus ?')"><span class="fa fa-trash mr-2"></span>Hapus Data</a>
								</td>
							</tr>
							<?php }} ?>
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

   