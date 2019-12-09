<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bojonegoro Job Center</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" sizes="196x196" href="<?= base_url();?>assets/favicon.png">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->
        <!-- Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
        
        <!-- CSS -->

        <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/bootstrap.min.css"> -->
        <!-- Bootstrap CDN -->
        <link href="<?= base_url() ?>/assets/bjc/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
        

        <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/themefisher-fonts.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/owl.carousel.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/animate.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/style.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/home/css/responsive.css">
    </head>

    <body id="body">
	    <!-- 
	    Header start
	    ==================== -->
        <div class="container">
            <nav class="navbar navbar-fixed-top  navigation " id="top-nav">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url() ?>assets/logo1.png" alt="" style="margin-top:-13px" class="brandicon">
                    <!-- BOJONEGORO JOB CENTER -->
                </a>

              <button class="navbar-toggler hidden-lg-up float-lg-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                  <i class="tf-ion-android-menu"></i>
              </button>
              <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <ul class="nav navbar-nav menu float-lg-right" id="top-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/pekerjaan') ?>">PEKERJAAN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/perusahaan') ?>">PERUSAHAAN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">HUBUNGI KAMI</a>
                  </li>
                  <?php  
                  $role = $this->session->userdata('role_id');
                  if ($role) {
                  ?>

                  <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white"  href="<?= base_url() ?>/auth/logout"  onclick="return confirm('Anda yakin ingin logout ?')"><i class="fas fa-power-off"></i> LOGOUT</a>
                  </li>
                  <?php 
                  }else {
                  ?>
                  <li class="nav-item">
                    <a class="nav-link btn btn-primary text-white" href="<?= base_url('auth/daftar') ?>">DAFTAR</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-warning text-white" href="<?= base_url('auth') ?>">LOGIN</a>
                  </li>
                <?php } ?>

                </ul>
              </div>
            </nav>
        </div>
        

	    <section class="hero-area bg-1">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-7">
	                    <div class="block" id="test">
	                        <h1 class="wow fadeInDown" data-wow-delay="0.3s" data-wow-duration=".2s" style="color: black">Bojonegoro Job Center</h1>
	                        <p class="wow fadeInDown text-capitalize" data-wow-delay="0.5s" data-wow-duration=".5s" style="color: black">Sistem informasi yang mempertemukan antara pencari kerja dan perusahaan yang mencari calon pekerja professional dan kredibel</p>
	                        <div class="wow fadeInDown" data-wow-delay="0.7s" data-wow-duration=".7s">
	                        	<a class="btn btn-home bg-danger" href="<?= base_url('home/pekerjaan') ?>" role="button" style="color: black"><i class="fas fa-search" style="color: black"></i> Cari Pekerjaan</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-5 wow zoomIn">
	                    <div class="block" style="background-color: lightblue;opacity: 70%">
	                        <div class="counter text-center">
	                            <ul id="countdown_dashboard">
	                                <li>
	                                    <div class="dash days_dash">
                                            <div class="p-2" style="color:black;"><h2><b>3.000</b></h2></div>
	                                        <span class="dash_title text-uppercase" style="color:black;">Pekerjaan</span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash hours_dash">
                                            <div class="p-2" style="color:black;"><h2><b>1.200</b></h2></div>
	                                        <span class="dash_title text-uppercase" style="color:black;">Perusahaan</span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash minutes_dash">
                                            <div class="p-2" style="color:black;"><h2><b>5.000</b></h2></div>
	                                        <span class="dash_title text-uppercase" style="color:black;">Pelamar</span>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash seconds_dash">
                                            <div class="p-2" style="color:black;"><h2><b>200</b></h2></div>
	                                        <span class="dash_title text-uppercase" style="color:black;">Bidang</span>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        <section  class="section about bg-gray" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                        <div class="content">
                        	<div class="sub-heading">
                        		<h3>Tentang Aplikasi</h3>
                        	</div>
                            <p>Bojonegoro Job Center merupakan platform web untuk mempertemukan pencari kerja dengan perusahaan/institusi/lembaga. Yang membedakan aplikasi Bojonegoro Job Center ini dengan aplikasi lain adalah di aplikasi ini para pencari kerja di test terlebih dahulu saat setelah pendaftaran akun. Dengan tujuan pihak perusahaan bisa memilih calon pekerjanya sesuai dengan nilai hasil test peserta.</p>
                            <p>
                               
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-slider">
                            <img src="<?= base_url() ?>assets/home/images/about/1.jpg" alt="">
                            <img src="<?= base_url() ?>assets/home/images/about/2.jpg" alt="">
                            <img src="<?= base_url() ?>assets/home/images/about/3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        Service start
        ==================== -->
        <section id="service" class="service section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <h2>Bidang Pekerjaan Populer</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="block">
                            <i class="tf-strategy"></i>   
                            <h3>Web Developper</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <i class="tf-circle-compass"></i>
                        	<h3>Android Developer</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="block">
                            <i class="tf-anchor2"></i>
                            <h3>Perawat</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="block">
                            <i class="tf-globe"></i>
                            <h3>Bidan</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="block">
                            <i class="tf-strategy"></i>   
                            <h3>Sopir</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="block">
                            <i class="tf-circle-compass"></i>
                            <h3>Admin</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="block">
                            <i class="tf-anchor2"></i>
                            <h3>Marketing</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="block">
                            <i class="tf-globe"></i>
                            <h3>Programmer</h3>
                            <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                        </div>
                    </div>
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        <section class="call-to-action section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow text-center">

                    </div>
                </div>
            </div>
        </section><!-- #call-to-action close -->

        <!-- 
        Contact start
        ==================== -->
        <section id="contact" class="section contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="block">
                            <div class="heading wow fadeInUp">
                                <h2>HUBUNGI KAMI</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 offset-md-3 wow fadeInUp" data-wow-delay="0.3s">
                    	<div class="form-group">
                    	    <form action="#" method="post" id="contact-form">
                    	        <div class="input-field">
                    	            <input type="text" class="form-control" placeholder="Your Name" name="name">
                    	        </div>
                    	        <div class="input-field">
                    	            <input type="email" class="form-control" placeholder="Email Address" name="email">
                    	        </div>
                    	        <div class="input-field">
                    	            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                    	        </div>
                    	        <button class="btn btn-send" type="submit">Send me</button>
                    	    </form>

                    	    <div id="success">
                    	        <p>Your Message was sent successfully</p>
                    	    </div>
                    	    <div id="error">
                    	        <p>Your Message was not sent successfully</p>
                    	    </div>
                    	</div>
                    </div>
                </div>
            </div>
        </section>

        <section clas="wow fadeInUp">
        	<div class="map-wrapper">
        	</div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="#">2M UNUGIRI</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="<?= base_url() ?>assets/home/js/vendor/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
        <script src="<?= base_url() ?>assets/home/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?= base_url() ?>assets/home/js/jquery.lwtCountdown-1.0.js"></script>
        <script src="<?= base_url() ?>assets/home/js/owl.carousel.min.js"></script>
        <script src="<?= base_url() ?>assets/home/js/jquery.validate.min.js"></script>
        <script src="<?= base_url() ?>assets/home/js/jquery.form.js"></script>
        <script src="<?= base_url() ?>assets/home/js/jquery.nav.js"></script>
        <script src="<?= base_url() ?>assets/home/js/wow.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script> -->
        <script src="<?= base_url() ?>assets/home/js/main.js"></script>
        
    </body>
</html>
