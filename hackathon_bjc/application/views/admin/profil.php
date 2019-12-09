<?php $this->load->view('admin/_partial/header') ?>
<?php 
$role_id = $this->session->userdata('role_id');
if ($role_id == 1) {
	$role = "Admin Super";
	$role_id = 1;
}else {
	$role = "Admin";
	$role_id = 2;
}
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<?= $this->session->flashdata('message'); ?>
	        <form  action="<?= base_url() ?>admin/edit_pengguna" method="post" enctype="multipart/form-data">				
	    		<h6>Username</h6>
				<div class="input-group mb-3">
			        <!-- <textarea  class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi"  style="height: 100px" required></textarea> -->
					<input type="text" class="form-control" placeholder="Username" value="<?= $profil['username'] ?>" name="uname">
					<?= form_error('username', '<small class="text-danger">', '</small>') ?>
			    </div>
	    		<h6>Nama Lengkap</h6>
				<div class="input-group mb-3">
					<!-- <textarea  class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi"  style="height: 100px" required></textarea> -->
					<input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Lengkap Anda" name="nama"   value="<?= $profil['nama'] ?>">
					<!-- <input type="text" class="form-control" placeholder="Nama Lengkap" value="<?= $profil['nama'] ?>" nama="nama"> -->
					<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
			    </div>
	    		<h6>Email</h6>
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Email" value="<?= $profil['email'] ?>" name="email">
					<?= form_error('email', '<small class="text-danger">', '</small>') ?>
			    </div>
				<div class="input-group">
					<!-- <textarea  class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi"  style="height: 100px" required></textarea> -->								    
	                <div class="form-group">
	                  <label class="radio-inline h6 mt-2 ml-2"  for="Jk">
	                    <input type="radio" name="jk" value="Laki-Laki" checked> Laki-Laki
	                  </label>
	                  <label class="radio-inline h6 mt-2 ml-2" for="Jk">
	                    <input type="radio" name="jk" value="Perempuan" class="ml-2"> Perempuan
	                  </label>
	                </div>
	                <?= form_error('jk', '<small class="text-danger">', '</small>') ?>
			    </div>
	    		<h6>Role</h6>
				<div class="input-group mb-3">
					<!-- <textarea  class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi"  style="height: 100px" required></textarea> -->
					<!-- <input type="text" class="form-control" placeholder="Telpon" aria-label="email" aria-describedby="addon-wrapping" value="<?= $role ?>"> -->
					<select class="form-control" id="roles" name="roles" disabled="">
						<option value="<?= $role_id ?>"><?= $role ?></option>
						<option value="2">Admin</option>
						<option value="1">Admin Super</option>
					</select>
			    </div><!-- 
		    		<h6>Role</h6>
					<div class="input-group mb-3">
				      <textarea  class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi"  style="height: 100px" required></textarea>
				      <input type="text" class="form-control" placeholder="nik" aria-label="nik" aria-describedby="addon-wrapping" value="adminsuper" disabled>
				    </div> -->
			    
					<!-- <div class="input-group"> -->
				<input type="hidden" name="id" value="<?= $profil['id'] ?>">
				<input type="hidden" name="profil" value="profil">
				<input type="hidden" name="role" value="1">
				<button type="submit" class="btn btn-danger float-right"><i class="fa fa-save"></i>&nbsp;&nbsp; Update Profil</button>
				<!-- </div> -->
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('admin/_partial/footer') ?>