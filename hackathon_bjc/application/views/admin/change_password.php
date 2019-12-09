<?php $this->load->view('admin/_partial/header') ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">			

          	<?= $this->session->flashdata('message'); ?>
            <form  action="<?= base_url() ?>auth/gantipassword" method="post" enctype="multipart/form-data">
				
				<div class="form-group mb-3">
        			<label for="passwordlama">Password Lama</label>
					<input type="password" name="passwordlama" class="form-control" placeholder="Masukkan Password Lama Anda ...">
                	<?= form_error('passwordlama', '<small class="text-danger">', '</small>') ?>
			    </div>
				<div class="form-group mb-3">
					<label for="passwordbaru1">Password Baru</label>
					<input type="password" name="passwordbaru1" class="form-control" placeholder="Masukkan Password Baru Anda ...">
                	<?= form_error('passwordbaru1', '<small class="text-danger">', '</small>') ?>
			    </div>
				<div class="form-group mb-3">
					<label for="passwordbaru2">Ulangi Password</label>
					<input type="password" name="passwordbaru2" class="form-control" placeholder="Ulangi Password Anda ...">
                	<?= form_error('passwordbaru2', '<small class="text-danger">', '</small>') ?>
			    </div>
				<!-- <div class="form-group"> -->
				<button type="submit" class="btn btn-danger float-right"><i class="fa fa-lock"></i>&nbsp;&nbsp; Ganti Password</button>
				<!-- </div> -->
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('admin/_partial/footer') ?>