
<!--============= start main area -->
<div id="back-to-home">
	<a href="<?= base_url() ?>" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>

<div class="row"> 
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
		<div class="simple-page-logo animated swing">
			<a href="<?= base_url('home') ?>">
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
			<center>				
				<!-- <img src="<?= base_url() ?>/assets/cropped-logo-1.png" class="img img-responsive"> -->
			</center>
			<h4 class="form-title m-b-xl text-center">Reset Your Account Password</h4>
				<?= $this->session->flashdata('message'); ?>
				<form action="<?= base_url('auth/forgotPassword') ?>" method="post">
				<div class="form-group">
					<input id="email" type="text" name="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
				</div>
		
			
				<button type="submit" class="btn btn-primary" value="MASUK">Reset Password</button>
			</form>
			<br>
			<center><a href="<?= base_url() ?>auth">Kembali Ke Login</a></center>
		</div><!-- #login-form -->
	</div>
</div>

</div><!-- .simple-page-wrap -->	