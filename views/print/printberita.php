	<?php 
		$title = "Data Berita";
		include "../control/koneksi.php";
	 ?>
	 <center>
	<h1 align="center"><?= $title; ?></h1>
	<p>Waktu Cetak :<?php
	$a=date('h')+5;
	echo date('d-m-Y '.$a.'-m-s')  ?></p>
	<div class="table table-responsive mt-3">
						<table class="table" border="1px" cellspacing="0" cellpadding="2">
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
								<td><img src="../../img/berita/<?= $data['photo']; ?>" style="border-radius: 100%; width: 100px; height: 100px"></td>
								<td><?= $data['isi']; ?></td>
								
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
	<script type="text/javascript">
		window.print();
	</script>