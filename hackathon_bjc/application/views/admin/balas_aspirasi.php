<?php $this->load->view('admin/_partial/header') ?>
<div class="container-fluid">
		<?= $this->session->flashdata('message'); ?>
		<a href="<?= base_url('admin/aspirasi_publik') ?>"><i class="fas fa-arrow-left"></i> Kembali ke Halaman Aspirasi Publik</a><br>
	<div class="row p-3">
		<div class="col-md-8">	
				<div class="card card-body border">				
					<div class="media">
					  <img class="mr-3 rounded-circle" src="https://siipp.net/assets/images/img_avatar2.png" alt="Generic placeholder image" width="64">
					  <div class="media-body">
					  	<div class="row">
			            	<div class="col-8">
			                <h5 class="text-capitalize"><?= $aspirasi_by_kode['nama'] ?> <small class="text-lowercase">&nbsp;(<?= $aspirasi_by_kode['email'] ?>)&nbsp;&nbsp;
			                	<span class=" badge badge-pill badge-success " >Warga</span>
			                </small></h5>                                        
				            </div>
				            <div class="col-4 float-right">                    
				                <small style="text-transform: bold" class="float-right">2019-09-31 15:16:07</small>
				            </div>
			        	</div>	            
			        	<p class="text-justify"><?= $aspirasi_by_kode['aspirasi'] ?></p>              
					  </div>
					</div>
				</div>
				<div class="bg-white p-3 border">					
	            	<h6><strong>Balas</strong></h6>
		                <form  action="<?= base_url() ?>admin/balas_aspirasi" method="post" enctype="multipart/form-data">
							<input type="hidden" name="nama" value="<?= $profile['nama'] ?>">
							<input type="hidden" name="alamat" value="Tlogorejo">
							<input type="hidden" name="email" value="<?= $profile['email'] ?>">
							<input type="hidden" name="jk" value="<?= $profile['jenis_kelamin'] ?>">
							<input type="hidden" name="id_komen" value="<?= $this->uri->segment(3) ?>">
							<input type="hidden" name="subject" value="jawaban">
							<input type="hidden" name="kirim" value="<?=  $aspirasi_by_kode['email'] ?>">
							<input type="hidden" name="idkomen" value="<?=  $aspirasi_by_kode['id'] ?>">

							<div class="input-group mb-3">
						      <textarea  class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi"  style="height: 100px"></textarea>
						    </div>
								<!-- <div class="input-group"> -->
							<button type="submit" class="btn btn-danger float-right"><i class="far fa-paper-plane"></i>&nbsp;&nbsp; Balas</button>
							<!-- </div> -->
						</form>
						<br>
						<br>
				</div>
		<br><br>
		</div>
		<div class="col-md-4">
			<div id="grafik3"></div>
		</div>
	</div>
</div>

<?php $this->load->view('admin/_partial/footer') ?>