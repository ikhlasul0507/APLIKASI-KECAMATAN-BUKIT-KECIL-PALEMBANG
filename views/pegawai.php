<?php 
    $title = "Data Pegawai";
	include "temp/header.php";
 ?>

    
    <!-- section -->
    <div class="section layout_padding padding_bottom-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div class="heading_main text_align_center">
						   <h2><span>Absen Pegawai</span></h2>
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
				    <div class="contact_form">
					    <form action="control/prosesabsen.php" method="post">
						   <fieldset>
                                <div class="row">
                                    <div class="col">
                                       <div class="full field">
                                          <input type="text" placeholder="Masukan NIP" name="nip" />
                                         
                                       </div> 
                                    </div>
                                    <div class="col">
                                        <div class="full field">
                                         
                                          <input type="text" name="waktu" value="<?= date('Y-m-d') ?>" readonly >
                                       </div>
                                    </div>
                                </div>
						      
							   <div class="full field float-right">
							      <div class="center">
                                    <input type="submit" name="simpan" class="btn btn-warning" value="Absen">
                                </div>
							   </div>
						   </fieldset>
						</form>
					</div>
					
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->
	

	<?php 
	include "temp/footer.php";
	 ?>

   