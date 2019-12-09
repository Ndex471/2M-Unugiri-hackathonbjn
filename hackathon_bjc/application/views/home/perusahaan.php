<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bojonegoro Job Center</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" sizes="196x196" href="<?= base_url();?>assets/favicon.png">

  <link href="<?= base_url() ?>/assets/home1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url() ?>assets/home1/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url() ?>assets/home1/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home1/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home1/lib/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/home1/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url() ?>assets/home1/css/style.css" rel="stylesheet">

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header" class="header-fixed">
    <div class="container">

      <div class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="<?= base_url() ?>assets/home1/#main">C<span>o</span>nf</a></h1>-->
        <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/logo1.png" alt="" style="margin-top:-13px" class="brandicon"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="<?= base_url() ?>"><i class="fa fa-home"></i> HOME</a></li>
          <li><a href="<?= base_url() ?>home/pekerjaan"><i class="fa fa-info-circle"></i> PEKERJAAN</a></li>
          <li class="menu-active"><a href="<?= base_url() ?>home/perusahaan"><i class="fa fa-cogs"></i> PERUSAHAAN</a></li>
          <li><a href="<?= base_url() ?>home/#hubungiKami"><i class="fa fa-phone"></i> HUBUNGI KAMI</a></li>
          <?php  
          $role = $this->session->userdata('role_id');
          if ($role) {
          ?>

            <li class="buy-tickets"><a href="<?= base_url() ?>/auth/logout"  onclick="return confirm('Anda yakin ingin logout ?')"><i class="fa fa-power-off"></i> LOGOUT</a></li>  
          <?php 
          }else {
          ?>
          <li class="buy-tickets"><a href="<?= base_url() ?>/auth" class="bg-warning"><i class="fa fa-user"></i> DAFTAR</a></li>
          <li class="buy-tickets"><a href="<?= base_url() ?>/auth"><i class="fa fa-user"></i> LOGIN</a></li>
        <?php } ?>
        </ul>
      </nav><!-- #nav-menu-container -->

    </div>
  </header><!-- #header -->
<main id="main" class="main-page  ">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <br>
        <br>
        <h2><b>List Perusahaan</b></h2>
        <hr style="border: 3px solid black">
        <div class="row">
          
         <?php  
         for ($i=0; $i < 9; $i++) { 
         ?>
        <div class="col-md-4 col-sm-6">
          <div class="card card-body bg-light border mb-3"> 
            <div class="row">
              <div class="col">
                <img src="<?= base_url() ?>assets/home/images/about-img.jpg" class="img-fluid mb-2">
              </div>
            </div>
            <center class="mb-3">                    
              <h5 style="margin-bottom: -1px">PT Jaya Abadi</h5>
              <small><i class="fas fa-map-marker-alt"></i> Bojonegoro, Jawa Timur</small>
            </center>
              <p class="text-justify">
                <small> Bergerak di bidang industri kreatif dan Pemasaran produk digital. Bergerak di bidang industri kreatif dan Pemasaran produk digital.</small>
              </p>

          </div>
          </div>
        <br>
         <?php 
         }
         ?>
        </div>

      </div>
      <div class="col-md-4">
        <br>
        <br>
        <img src="<?= base_url() ?>assets/maxresdefault.jpg" class="img img-fluid"><br><br>
        <img src="<?= base_url() ?>assets/Pinarak-BJN..jpg" class="img img-fluid">
      </div>  
    </div>
  </div>
  <br>
  <br>

  </main>
  
  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        <p>Copyright &copy; <a href="#">2M UNUGIRI</a>| All right reserved.</p>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="<?= base_url() ?>assets/home1/#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url() ?>assets/home1/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/easing/easing.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/superfish/hoverIntent.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/superfish/superfish.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/wow/wow.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/venobox/venobox.min.js"></script>
  <script src="<?= base_url() ?>assets/home1/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="<?= base_url() ?>assets/home1/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?= base_url() ?>assets/home1/js/main.js"></script>
</body>

</html>
