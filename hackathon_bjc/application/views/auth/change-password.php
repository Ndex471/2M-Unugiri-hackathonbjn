
<!--============= start main area -->
<div id="back-to-home">
	<a href="<?= base_url() ?>" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>

<div class="row"> 
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
		<div class="simple-page-logo animated swing">
			
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
			<h2 class="form-title m-b-xl text-center">Ganti Password Akun BJC</h>
				<h5><center><?= $this->session->userdata('reset_email') ?></center></h5>
				<?= $this->session->flashdata('message'); ?>
				<form action="<?= base_url('auth/changePassword') ?>" method="post">
				<div class="form-group">
					<input id="passwordbaru1" type="Password" name="passwordbaru1" class="form-control" placeholder="Password Baru" value="<?= set_value('passwordbaru1') ?>">
					<?= form_error('passwordbaru1', '<small class="text-danger pl-3">', '</small>') ?>
					<input id="passwordbaru2" type="Password" name="passwordbaru2" class="form-control" placeholder="Ulangi Password" value="<?= set_value('passwordbaru2') ?>">
					<?= form_error('passwordbaru2', '<small class="text-danger pl-3">', '</small>') ?>
					<input type="hidden" name="email" value="<?= $this->session->userdata('reset_email') ?>">
				</div>
		
			
				<button type="submit" class="btn btn-success" value="MASUK">Reset Password</button>
			</form>
			<br>
			<center><a href="<?= base_url() ?>auth" style="color: #59af4b">Kembali Ke Login</a></center>
		</div><!-- #login-form -->
	</div>
</div>

</div><!-- .simple-page-wrap -->	