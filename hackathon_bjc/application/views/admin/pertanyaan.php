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
            <li><a href="<?= base_url() ?>home/profil"><i class="fa fa-user"></i> Profil</a></li>
            <li class="buy-tickets"><a href="<?= base_url() ?>/auth/logout"  onclick="return confirm('Anda yakin ingin logout ?')"><i class="fa fa-power-off"></i> LOGOUT</a></li>
          </ul>
        </nav><!-- #nav-menu-container -->

      </div>
    </header><!-- #header -->
  <main id="main" class="main-page  ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <br>
          <br>
          <div class="card card-body bg-success border"> 
            <center>
              <img src="https://siipp.net/assets/images/img_avatar2.png" class="align-self-start mr-3" style="border-radius: 50%;width: 100px">
            </center>
          </div>
          <div class="card card-body bg-light border"> 
            <center>
              <h4 style="margin-bottom: -1px"><?= ucwords($profil['nama']) ?></h4>
              <?php  
              $p = $detail_profil['pendidikan_terakhir'];
              $p = strtolower($p);
              $kampus = strtolower($detail_profil[$p]);
              // $kampus = ucfirst($detail_profil[$p]);
              $nilai = "nilai_".$p;
              ?>
              <small><i>Lulusan <?= $detail_profil['pendidikan_terakhir'] ?>, <?= $kampus ?></i></small>
              <p><small><i>Nilai Ijazah : <?= $detail_profil[$nilai] ?></i></small></p>
            </center>
            <div class="text-justify">
              <p>Kejujuran</p>
              <div class="progress mb-2" style="margin-top: -20px">
                <div class="progress-bar" role="progressbar" style="width: <?= $nilai_karakter['nilai_kejujuran'] ?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Ketangkasan</p>
              <div class="progress mb-2" style="margin-top: -20px">
                <div class="progress-bar" role="progressbar" style="width: <?= $nilai_karakter['nilai_ketangkasan'] ?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Kedisiplinan</p>
              <div class="progress mb-2" style="margin-top: -20px">
                <div class="progress-bar" role="progressbar" style="width: <?= $nilai_karakter['nilai_kedisiplinan'] ?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Tanggung Jawab</p>
              <div class="progress mb-2" style="margin-top: -20px">
                <div class="progress-bar" role="progressbar" style="width: <?= $nilai_karakter['nilai_tanggung_jawab'] ?>%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <br>
          <br>
          <br>
          <form action="<?= base_url('admin/submit_pertanyaan') ?>" method="post" enctype="multipart/form-data">

            <h4><?= $list_pertanyaan['pertanyaan'] ?></h4>
            <div class="form-group" style="margin-top:-1px;margin-bottom:-1px">
              <?php  
              foreach ($jawaban->result() as $row) {
                ?>

              <label class="radio-inline h5"  for="jawaban">
                <input type="radio" name="jawaban" value="<?= $row->skor ?>" style="margin-top: -13px" checked>&nbsp;&nbsp; <?= $row->jawaban ?>
              </label><br>
              <?php }
              ?>
                <input type="hidden" name="id_user" value="<?= $profil['id'] ?>">
            </div>


               <!-- <div class="form-group"> -->
              <br>
            <button type="submit" class="btn btn-danger pull-right waves-effect"><i class="fa fa-send"></i>&nbsp;&nbsp; Jawab</button>
          </form>

          <!-- <h2><b>Halaman Pekerjaan</b></h2>
          <hr style="border: 3px solid black">
          <div class="card card-body bg-light border"> 
            <form action="#" method="post" enctype="multipart/form-data">

              <h6>Share Pekerjaan</h6>
              <div class="form-group mb-3">
                <textarea class="form-control" placeholder="Berikan Tanggapan Pada Komentar ..." name="aspirasi" style="height: 100px" ></textarea>
              </div>
              <h6>File Pendukung</h6>
              <div class="form-group mb-3">
                  <input type="file" class="form-control" name="image" >
              </div>
                <br>
              <button type="submit" class="btn btn-danger pull-right waves-effect" ><i class="fa fa-send"></i>&nbsp;&nbsp; Kirim</button>
            </form>
          </div> -->

          <br>
          <br>

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
