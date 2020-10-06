	<?php 
		include "../control/koneksi.php";

		$title = "Data Berita";

		 header("Content-type: application/vnd-ms-excel");
	 
		 header("Content-Disposition: attachment; filename=Laporan Data Berita.xls");
		 
		 header("Pragma: no-cache");
		 
		 header("Expires: 0");
	 ?>
	 <center>
	<h1 align="center">Data <?= $title; ?></h1>
	<p>Waktu Cetak :<?php
	$a=date('h')+5;
	echo date('d-m-Y '.$a.'-m-s')  ?></p>
	<div class="table table-responsive mt-3">
						<table class="table" border="1px" style="width: 100%" cellspacing="0" cellpadding="0">
							<thead style="background-color: yellow">
								<td>Judul</td>
								<td>Waktu</td>
								<td>Photo</td>
								<td>Isi Berita</td>
							</thead>
							<tbody>
							<?php
                            $berita=mysqli_query($conn,"SELECT * FROM tbl_berita");
                            foreach ($berita as $data) { ?>	
							<tr>
								<td><?= $data['judul'];?></td>
								<td><?= $data['tanggal']; ?></td>
								<td><?= $data['photo']; ?></td>
								<td><?= $data['isi']; ?></td>
								
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
	