
<!--============= start main area -->
<div id="back-to-home">
	<a href="<?= base_url() ?>" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>
<br>
<div class="row"> 
	<div class="container">
		<div class="col-lg-8 col-lg-offset-2">
		<div class="simple-page-logo animated swing">
			<a href="<?= base_url('home') ?>">
				<span><i class="fa fa-gg"></i></span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
			<center>				
				<!-- <img src="<?= base_url() ?>/assets/cropped-logo-1.png" class="img img-responsive"> -->
			<h2 class="form-title m-b-xl text-center">Daftar Akun Bojonegoro Job Center</h>
			</center>
				<form action="<?= base_url('auth/daftar') ?>" method="post">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Uname" >Username:</label>         
								<small style="color: red">*Jangan beri spasi untuk username</small>
								<input type="text" class="form-control" id="uname" placeholder="Masukkan Nama Lengkap Anda" name="uname" style="border: 0.5px solid grey" value="<?= set_value('uname') ?>">
								<?= form_error('uname', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Nama" >Nama Lengkap:</label>         
								<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" name="nama" style="border: 0.5px solid grey" value="<?= set_value('nama') ?>">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
				          	<br>
				          	<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="radio-inline h5"  for="Jk">
									<input type="radio" name="jk" value="Laki-Laki"  style="margin-top: -13px" checked>Laki-Laki
								</label>
								<label class="radio-inline h5"  style="margin-top: 15px" for="Jk">
									<input type="radio" name="jk" value="Perempuan"  style="margin-top: -13px">Perempuan
								</label>
							</div>

							<br><br>
							<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Alamat" style="margin-top: -7px">Alamat:</label>
								<input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Anda" name="alamat" style="border: 0.5px solid grey" value="<?= set_value('alamat') ?>">
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
							</div>

						</div>
						<div class="col-md-6">
				          	<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Email" >Email:</label>
								<input type="text" class="form-control" id="email" placeholder="Masukkan Alamat Email Anda" style="border: 0.5px solid grey"  name="email" value="<?= set_value('email') ?>">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
							</div>

							<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Telpon" >Telpon:</label>
								<input type="number" class="form-control" id="telpon" placeholder="Masukkan Nomor Telpon Anda" style="border: 0.5px solid grey"  name="telpon" value="<?= set_value('telpon') ?>">
								<?= form_error('telpon', '<small class="text-danger pl-3">', '</small>') ?>
							</div>

							<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Password1" >Password:</label>
								<input id="sign-in-password" type="password" name="password1" class="form-control" style="border: 0.5px solid grey"  placeholder="Masukkan Password">
								<?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
							</div>

							<div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
								<label class="control-label h5" for="Password2" >Ulangi Password:</label>
								<input id="sign-in-password" type="password" name="password2" class="form-control" style="border: 0.5px solid grey"  placeholder="Ulangi Password">
								<?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
							</div>

						</div>
					</div>
					<br>
					

					<div class="form-group m-b-xl">
						<div class="checkbox checkbox-primary">
							<input type="checkbox" id="keep_me_logged_in"/>
							<label for="keep_me_logged_in">Keep me signed in</label>
						</div>
					</div>
						<input type="hidden" NAME="random_num" value="619049"><input type="hidden" NAME="op" value="login">		
				
					<button type="submit" class="btn btn-primary" value="MASUK">Daftar</button>
				</form>

				<center style="margin-top: 15px"><a href="<?= base_url('auth/forgotpassword') ?>">Lupa Password?</a></center>
				<center><a href="<?= base_url() ?>auth">Sudah Punya Akun ? Login dulu</a></center>
			</div><!-- #login-form -->

		</div><!-- .simple-page-wrap -->
	</div>
</div>	
