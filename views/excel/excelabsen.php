	<?php 
		 include "../control/koneksi.php";

		 $title = "Data Absen Pegawai";

		 header("Content-type: application/vnd-ms-excel");
	 
		 header("Content-Disposition: attachment; filename=Laporan Absen Pegawai.xls");
		 
		 header("Pragma: no-cache");
		 
		 header("Expires: 0");
	 ?>
	 <center>
	<h1 align="center">Data <?= $title; ?></h1>
	<p>Waktu Cetak :<?php
	$a=date('h')+5;
	echo date('d-m-Y '.$a.'-m-s')  ?></p>
	<div class="table table-responsive mt-3">
						<table class="table" border="1px" cellspacing="0" cellpadding="2">
							<thead style="background-color: yellow">
								<td>ID</td>
								<td>NIK</td>
								<td>Nama</td>
								<td>Tanggal</td>
							</thead>
							<tbody>
							<?php
	                         
                            $absen=mysqli_query($conn,"SELECT * FROM tbl_absen as a inner join tbl_pegawai as b on a.nip=b.nip ORDER BY waktu DESC");
                            foreach ($absen as $data) { ?>	
							<tr>
								<td><?= $data['ida'];?></td>
								<td><?= $data['nip']; ?></td>
								<td><?= $data['nama'];?></td>
								<td><?= $data['waktu'] ?></td>
								
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
	