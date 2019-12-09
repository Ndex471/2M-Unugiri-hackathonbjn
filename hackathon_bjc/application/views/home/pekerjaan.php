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
          <li class="menu-active"><a href="<?= base_url() ?>home/pekerjaan"><i class="fa fa-info-circle"></i> PEKERJAAN</a></li>
          <li><a href="<?= base_url() ?>home/perusahaan"><i class="fa fa-cogs"></i> PERUSAHAAN</a></li>
          <li><a href="<?= base_url() ?>home/#hubungiKami"><i class="fa fa-phone"></i> HUBUNGI KAMI</a></li>
          <li class="buy-tickets"><a href="<?= base_url() ?>/auth" class="bg-warning"><i class="fa fa-user"></i> DAFTAR</a></li>
          <li class="buy-tickets"><a href="<?= base_url() ?>/auth"><i class="fa fa-user"></i> LOGIN</a></li>
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
        <h2><b>Halaman Pekerjaan</b></h2>
        <hr style="border: 3px solid black">
        <div class="card card-body bg-light border"> 
          <form action="#" method="post" enctype="multipart/form-data">

            <h6>Share Pekerjaan</h6>
            <div class="form-group mb-3">
              <textarea class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi" style="height: 100px" disabled></textarea>
            </div>
            <h6>Posisi</h6>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="image" disabled>
            </div>
            <h6>Lokasi</h6>
            <div class="form-group mb-3">
                <input type="text" class="form-control" name="image" disabled>
            </div>
            <h6>File Pendukung</h6>
            <div class="form-group mb-3">
                <input type="file" class="form-control" name="image" disabled>
            </div>
               <!-- <div class="form-group"> -->
              <br>
            <button type="submit" class="btn btn-danger pull-right waves-effect" disabled><i class="fa fa-send"></i>&nbsp;&nbsp; Kirim</button>
          </form>
        </div>

        <br>
        <br>
          <h2><b>List Pekerjaan</b></h2>
          <hr style="border: 3px solid black">
           
           <?php  
            for ($i=0; $i < 3; $i++) { 
              foreach ($list_pekerjaan->result() as $row) {
                $id_pt = $row->id_perusahaan;
                $nama_pt = $this->db->get_where('bjc_user', ['id' => $id_pt])->row_array();
           ?>

          <div class="card card-body bg-light border">                               
            <div class="media">
              <img src="https://siipp.net/assets/images/img_avatar2.png" class="align-self-start mr-3" style="border-radius: 50%;width: 80px">
                               
                  <div class="media-body">
                    <div class="row">
                      <div class="col-8" style="text-transform: capitalize;">
                        <h6><?= $nama_pt['nama'] ?> <small>&nbsp;&nbsp;

                        </small></h6>                                        
                    </div>
                    <div class="col-4 float-right">                    
                        <small style="text-transform: bold" class="float-right"><?= $row->date_created ?></small>
                    </div>
                    </div>
                    <div class="col-12 media-heading" style="margin-left: -11px;margin-top:-10px;color:gray">
                      <p><?= $row->posisi ?></p>
                      <p style="margin-top: -27px;margin-bottom: 3px;color: black"><b>Gaji <?= $row->gaji ?></b></p>
                    </div>
                      
                    <p style="text-align: justify;"><?= $row->isi ?></p>
                    <div class="row">
                    </div>                                                         
                    <a href="#" class="btn btn-primary border btn-sm"><span class="fa fa-send"></span>&nbsp;&nbsp;Lamar</a>
                                                                                
                    <!-- <a href="#" class="btn btn-danger border"><span class="fa fa-comment "></span>&nbsp;&nbsp;Balas</a> -->
                    <a href="#" class="btn btn-danger border btn-sm"><span class="fa fa-comment "></span>&nbsp;&nbsp;Komen</a>                             
                  </div>
              </div> <!-- akhir media -->
          </div>
          <br>
           <?php 
             }
           }
           ?>
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
