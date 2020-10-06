	<?php 
		 include "../control/koneksi.php";

		 $title = "Data Pelayanan";

		 header("Content-type: application/vnd-ms-excel");
	 
		 header("Content-Disposition: attachment; filename=Laporan Pelayanan.xls");
		 
		 header("Pragma: no-cache");
		 
		 header("Expires: 0");
	 ?>
	 <center>
	<h1 align="center">Data <?= $title; ?></h1>
	<p>Waktu Cetak :<?php
	$a=date('h')+5;
	echo date('d-m-Y '.$a.'-m-s')  ?></p>
	<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data" border="1px" cellpadding="2" cellspacing="0">
							<thead style="background-color: yellow">
								<td>Nama</td>
								<td>NIK</td>
								<td>Alamat</td>
								<td>Handphone</td>
								<td>Tanggal</td>
								<td>Keperluan</td>
								<td>Status</td>
							</thead>
							<tbody>
							<?php
	                        
	                          $pengunjung=mysqli_query($conn, "SELECT * FROM tbl_pelayanan as a inner join tbl_keperluan as b on a.jenis_pelayanan=b.idk ORDER BY id DESC");
	                          foreach ($pengunjung as $data) : ?>	
							<tr>
								<td><?= $data['nama']; ?></td>
								<td><?= $data['nik'];?></td>
								<td><?= $data['alamat'];?></td>
								<td><?= $data['handphone'];?></td>
								<td><?= $data['tanggal'];?></td>
								<td><?= $data['keperluan'] ?></td>
								<td>
									<?php if ($data['status']==1){?>
										<p class="badge badge-warning">Sedang Proses</p>
									<?php }else{?>
										<p class="badge badge-danger">Selesai</p>	
									<?php } ?>
								</td>
								
							</tr>
						<?php endforeach; ?>
							</tbody>
						</table>
					</div>
	