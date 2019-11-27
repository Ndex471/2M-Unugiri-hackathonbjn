
  
<!--============= start main area -->
<div id="back-to-home">
  <a href="<?= base_url() ?>" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
</div>

<div class="row"> 
  <div class="container">
    <div class="col-lg-6 col-lg-offset-3">
    <div class="simple-page-logo animated swing">
      <a href="<?= base_url('home') ?>">
        <span><i class="fa fa-g"></i></span>
      </a>
    </div><!-- logo -->
    <div class="simple-page-form animated flipInY" id="login-form" >
      <center>        
        <!-- <a href="<?= base_url() ?>"><img src="<?= base_url() ?>/assets/cropped-logo-1.png" class="img img-responsive"></a> -->

      <h4 class="form-title m-b-xl text-center">Log In With Your BJC Account</h4>
      <br>
      </center>
        <?= $this->session->flashdata('message'); ?>
        <form action="<?= base_url('auth/index') ?>" method="post">
        <div class="form-group">
          <input id="username" type="text" name="username" class="form-control" placeholder="username" value="<?= set_value('username') ?>">
          <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
        </div>

        <div class="form-group">
          <input id="password" type="password" name="password" class="form-control" placeholder="Password">
          <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
        </div>

        <div class="form-group m-b-xl">
          <!--div class="checkbox checkbox-primary">
            <input type="checkbox" id="keep_me_logged_in"/>
            <label for="keep_me_logged_in">Keep me signed in</label>
          </div-->
        </div>
          <input type="hidden" NAME="random_num" value="619049"><input type="hidden" NAME="op" value="login">   
      
        <button type="submit" class="btn btn-primary" value="MASUK">MASUK</button>
      </form>

      <center style="margin-top: 15px"><a href="<?= base_url('auth/forgotpassword') ?>">Lupa Password?</a></center>
      <center><a href="<?= base_url() ?>auth/daftar">Belum Punya Akun ? Daftar akun</a></center>
      <!-- <center><a href="<?= base_url() ?>auth/daftar">Belum Punya Akun ? Daftar akun</a></center> --> 
    </div><!-- #login-form -->
  </div>
</div>

</div><!-- .simple-page-wrap -->  