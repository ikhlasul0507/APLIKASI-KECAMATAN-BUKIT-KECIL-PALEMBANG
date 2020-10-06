	<?php 
		$title = "Data Pengunjung";
		include "../control/koneksi.php";
	 ?>
	 <center>
	<h1 align="center"><?= $title; ?></h1>
	<p>Waktu Cetak :<?php
	$a=date('h')+5;
	echo date('d-m-Y '.$a.'-m-s')  ?></p>
	<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data" border="1px" cellspacing="0" cellpadding="2px">
							<thead style="background-color: yellow">
								<td>Kode Pengunjung</td>
								<td>Nama</td>
								<td>Alamat</td>
								<td>Keperluan</td>
								<td>Tanggal</td>
							</thead>
							<tbody>
							<?php
                            $pengunjung=mysqli_query($conn,"SELECT * FROM tbl_pengunjung as a inner join tbl_keperluan as b on a.keperluan=b.idk");
                            foreach ($pengunjung as $data) { ?>	
							<tr>
								<td><?= $data['kode_pengunjung'];?></td>
								<td><?= $data['nama']; ?></td>
								<td><?= $data['alamat'];?></td>
								<td><?= $data['keperluan'] ?></td>
								<td><?= $data['tanggal']; ?></td>
								
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
	<script type="text/javascript">
		window.print();
	</script>