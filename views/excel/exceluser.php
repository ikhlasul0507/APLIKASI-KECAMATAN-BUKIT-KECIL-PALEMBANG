	<?php 
		 include "../control/koneksi.php";

		 $title = "Data User";

		 header("Content-type: application/vnd-ms-excel");
	 
		 header("Content-Disposition: attachment; filename=Laporan User.xls");
		 
		 header("Pragma: no-cache");
		 
		 header("Expires: 0");
	 ?>
	 <center>
	<h1 align="center">Data <?= $title; ?></h1>
	<p>Waktu Cetak :<?php
	$a=date('h')+5;
	echo date('d-m-Y '.$a.'-m-s')  ?></p>
	<div class="table table-responsive mt-3">
						<table class="table" id="tabel-data" border="1px">
							<thead style="background-color: yellow">
								<td>ID</td>
								<td>Nama</td>
								<td>Email</td>
								<td>Password</td>
								<td>Role</td>
							</thead>
							<tbody>
							<?php
                            $user=mysqli_query($conn,"SELECT * FROM tbl_user");
                            foreach ($user as $data) { ?>	
							<tr>
								<td><?= $data['id'];?></td>
								<td><?= $data['nama'];?></td>
								<td><?= $data['email'];?></td>
								<td><?= $data['password'];?></td>
								<td>
									<?php if($data['role']==1){ ?>
										<p class="badge badge-warning">Administrator</p>
									<?php }else{?>
										<p class="badge badge-primary">Pegawai</p>
									<?php }?>
								</td>
								
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
	