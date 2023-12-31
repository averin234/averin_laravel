
<!DOCTYPE html>
<html lang="en" oncontextmenu="return false">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>AVERIN</title>
    <link rel="shortcut icon" href="{{('asset/images/favicon.png')}}" type="image/png">

    <!-- Bootstrap core CSS -->
    <link href="{{('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{('asset/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{('asset/css/templatemo-space-dynamic.css')}}">
    <link rel="stylesheet" href="{{('asset/css/animated.css')}}">
    <link rel="stylesheet" href="{{('asset/css/owl.css')}}">
<!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
<script>
    document.addEventListener("contextmenu", function (e) {
        e.preventDefault();
    });

    document.addEventListener("keydown", function (e) {
        if (e.key === "F12" || e.keyCode === 123) {
            e.preventDefault();
        }
    });
    $(document).keydown(function(e){ 
    if(e.which === 123){ 
 
       return false; 
    } 
}); 
</script>
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div> -->
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="{{ url('/') }}" class="logo">
              <h4><img src="{{('asset/images/logo_averin.png')}}" alt="team meeting" height="70px"> </h4>
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="{{ url('/') }}" class="active">BERANDA</a></li>
              <li class="scroll-to-section"><a href="{{ url('/tentangkami') }}">TENTANG KAMI</a></li>
              <li class="scroll-to-section"><a href="{{ url('/produk') }}">PRODUK</a></li>
              <li class="scroll-to-section"><a href="{{ url('/kontak') }}">KONTAK</a></li>
              <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">LOGIN APLIKASI</a>
                <div class="dropdown-content">
                                     
                                        <a href="https://sirs.co.id" target="_blank">Averin SIRs</a>
                                        <a href="https://d-medis.id" target="_blank">D-Medis</a>
                                        <a href="https://a-dokter.id" target="_blank">a-Dokter</a>
                                        <a href="https://rme.sirs.co.id" target="_blank">Gateway RME-RS</a>
                                        <a href="https://rskita.id" target="_blank">AHS SIRs</a>
                                        <a href="https://payroll.sirs.co.id" target="_blank">SIMPONI</a>
                                        <a href="https://lafkespri.org" target="_blank">SIM Akreditasi</a>
                                        <a href="https://kreki.org" target="_blank">Kreki-119</a>
                                        <a href="https://cnot.co.id" target="_blank">e-Notaris</a>
                                        <a href="https://d-medis.id" target="_blank">Averin e-Klinik</a>
                                        <a href="https://pbfku.averin.co.id" target="_blank">PBFKU</a>
                                        <a href="https://sam.sirs.co.id" target="_blank">SAM</a>
                                        <a href="" target="_blank">LaboSS</a>
                                        <a href="" target="_blank">SIDIK</a>
                                        <a href="" target="_blank">AMS Corporate</a>
                                        <a href="" target="_blank"></a>
                                    </div>
              </li>
              <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <h6>Welcome to AVERIN INFORMATIKA TEKNOLOGI</h6>
                <h2>Averin  <span>SIRs</span><em>(System Informasi Pelayanan dan Manajemen Rumah Sakit)</em></h2>
                <p>Dibangun tahun 2001 yaitu melakukan pembuatan Sistem Aplikasi Kesehatan, Pembuatan produk sistem aplikasi ini dimulai dengan melakukan riset di bidang sistem Pelayanan dan Manajemen Rumah Sakit dan dengan dibantu para ahli di bidang pengelolaan Rumah Sakit. <a rel="nofollow" href="https://portal.sirs.co.id/" target="_parent">Portal Sirs</a>.</p>
                <form id="search" action="https://sirs.co.id/" method="GET">
                  <fieldset>
                    <input type="address" name="address" class="email" placeholder="portal.sirs.co.id" disabled autocomplete="on" required>
                  </fieldset>
                  <fieldset>
                    <button type="submit" class="main-button">Lihat Averin SIRs</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="{{('asset/images/banner-right-image.png')}}" alt="team meeting')}}">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <img src="{{('asset/images/about-left-image.png')}}" alt="person graphic">
          </div>
        </div>
        <div class="col-lg-8 align-self-center">
          <div class="services">
            <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
              <h4>KENAPA PILIH KAMI?</h4>
              <h4 style="font-size: 16px;">Konsultan IT terbaik sejak tahun 2000!</h4>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon">
                    <img src="{{('asset/images/service-icon-01.png')}}" alt="reporting">
                  </div>                  <div class="right-text">
                    <h4>Program Modular</h4>
                    <p>Program kami tersusun dari modul - modul yang dapat disesuaikan dengan kebutuhan anda</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon">
                    <img src="{{('asset/images/service-icon-02.png')}}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Tepat Guna & Sesuai Kebutuhan</h4>
                    <p>Menggunakan teknologi yang tepat guna, sehingga para mitra kerja memperoleh hasil yang maksimal</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon">
                    <img src="{{('asset/images/service-icon-03.png')}}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Perawatan Jangka Panjang</h4>
                    <p>Perawatan berkala setelah program anda terpasang</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                  <div class="icon">
                    <img src="{{('asset/images/service-icon-04.png')}}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Pelayanan Terbaik</h4>
                    <p>Kami berusaha untuk memberikan pelayanan yang terbaik untuk solusi IT anda</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="portfolio" class="our-portfolio section" style="margin-top: 50px;">
    <div class="container">
    <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading  wow bounceIn animated" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                        <h2><em>Produk</em> / <span>Portfolio</span></h2>
                    </div>
                </div>
            </div>
    <div class="row">
                <div class="col-lg-3 col-sm-6">
                        <a href="https://sirs.co.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>Averin SIRs</h4>
                                    <p>Averin SIRS telah diuji dan dipercaya oleh Rumah Sakit untuk menjadi program standar</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/AVerinSIRs.png')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>Averin SIRs</h4>
                                <p>Averin SIRS menyediakan paket - paket dengan harga yang sesuai dengan kebutuhan</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://d-medis.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>D-Medis</h4>
                                    <p>Aplikasi D-medis memudahkan Klinik dalam Melayani Pasien lebih cepat, mudah dan
        Akurat</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/D-medis.png')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>D-Medis</h4>
                                <p>Manajemen Pelayanan Klinik menggunakan Metode Clould</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://a-dokter.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>a-Dokter</h4>
                                    <p>Aplikasi dokter berbasis cloud untuk meningkatkan kualitas pelayanan praktek dokter
        mandiri</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/A-Dokter.png')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>a-Dokter</h4>
                                <p>Aplikasi dokter berbasis cloud untuk meningkatkan kualitas pelayanan</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://rme.sirs.co.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>Gateway RME-RS</h4>
                                    <p>Direct Sale Order dirancang untuk kebutuhan Apotik</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/RME.png')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>Gateway RME-RS</h4>
                                <p>Direct Sale Order dirancang untuk kebutuhan Apotik</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://rskita.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>AHS SIRs</h4>
                                    <p>AHS menyediakan paket - paket dengan harga yang sesuai dengan kebutuhan</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/AHS.png')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>AHS SIRs</h4>
                                <p>AHS menyediakan paket - paket dengan harga yang sesuai dengan kebutuhan</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://payroll.sirs.co.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>SIMPONI</h4>
                                    <p>System HR terintegrasi dengan Payroll dan KPI</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/simponi.jpg')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>SIMPONI</h4>
                                <p>System HR terintegrasi dengan Payroll dan KPI</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://cnot.co.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>e-Notaris</h4>
                                    <p>Sistem Administrasi Manajemen Kantor Notaris</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/cnot.jpg')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>e-Notaris</h4>
                                <p>Sistem Administrasi Manajemen Kantor Notaris</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://d-medis.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>Averin e-Klinik</h4>
                                    <p>Averin merupakan Aplikasi Manajemen Pelayanan Klinik menggunakan Metode Cloud
        Application</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/e-klinik.jpg')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>Averin e-Klinik</h4>
                                <p>Manajemen Pelayanan Klinik menggunakan Metode Cloud</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="https://sam.sirs.co.id">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>SAM</h4>
                                    <p>System Apotik Mandiri yang terintegrasi mulai dari pemesanan oleh Client, Work Order,
        penyiapan obat (termasuk obat racikan) sampai dengan pembayaran di kasir</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/sam.png')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>SAM</h4>
                                <p>System Apotik Mandiri berbasis Cloud Application</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>SIDIK</h4>
                                    <p>System Informasi Manajemen Pendidikan</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/sidik.jpg')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>SIDIK</h4>
                                <p>System Informasi Manajemen Pendidikan</p>
                            </div>
                        </a>
                    </div><div class="col-lg-3 col-sm-6">
                        <a href="">
                            <div class="item wow bounceInUp animated" data-wow-duration="1s" data-wow-delay="0.3s" style="visibility: visible;-webkit-animation-duration: 1s; -moz-animation-duration: 1s; animation-duration: 1s;-webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="hidden-content">
                                    <h4>AMS Corporate</h4>
                                    <p>Administrasi Manajemen Surat Korporat</p>
                                </div>
                                <div class="showed-content">
                                    <img src="{{('asset/images/laboos.jpg')}}" alt="">
                                </div>
                                <p>&nbsp;</p>
                                <h4>AMS Corporate</h4>
                                <p>Administrasi Manajemen Surat Korporat</p>
                            </div>
                        </a>
                    </div>            
                  </div>
    </div>
  </div>
  
  <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="container">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <div class="col-lg-6 offset-lg-5">
        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
          <h2><em>Our</em> <span>Founder</span></h2>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-3 align-self-center" >
        <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
        </div>
      </div>
    <div class="main">
     
      <div class="profile-card">
          <div class="img">
              <img src="{{('asset/images/muawan.png')}}">
          </div>
          <div class="caption">
            <h3>Muawan Asyir</h3>
            <p>CEO / Founder</p>
              <div class="social-links">
                  <a href="#"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
              </div>
          </div>
      </div>
      
  </div>
  <div class="col-lg-6 offset-lg-5">
    <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
      <h2><em>Powered</em> <span>By</span></h2>
    </div>
  </div>
  <div class="container" style="margin-top: 50px;">
    <div class="col-lg-8 offset-lg-3">
  <div class="row">
    <div class="col-lg-3 col-sm-6 " >
      <img src="{{('asset/images/logo_averin1.png')}}" alt="">
    </div>
    <div class="col-lg-3 col-sm-6">
      <img src="{{('asset/images/logo_privy.png')}}" alt="" >
      </div>
      <div class="col-lg-3 col-sm-6">
      <img src="{{('asset/images/logo_upg.png')}}" alt="" >
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>ADA YANG INGIN ANDA TANYAKAN KEPADA KAMI?</h2>
            <p>Silahkan hubungi kami dengan cara menekan tombol berikut.</p>
            <p></p>
            <h2>PT. AVERIN INFORMATIKA TEKNOLOGI</h2>
            <p>PT. Averin telah berdiri sejak tahun 1999 untuk menyediakan solusi IT untuk mitra kerja dengan teknologi terkini yang tepat guna sehingga dapat mempermudah alur kerja para mitra.</p>
            <div class="phone-info">
              <h4><span><i class="fa fa-users"></i> <a href="#">Gedung Graha Pulo, Ground Floor, Jl. Warung Buncit Raya No.89, RT.6/RW.3, Kalibata, Pancoran, Kota Jakarta Selatan. 12740</a></span></h4>
            </div>
            <div class="phone-info">
              <h4><span><i class="fa fa-phone"></i> <a href="#">+6221 79186448</a></span></h4>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-6">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                </fieldset>
              </div>
            </div>
            <div class="contact-dec">
              <img src="{{('asset/images/contact-decoration.png')}}" alt="">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
          <p>© Copyright PT Averin Informatika. All Rights Reserved. 
        </div>
      </div>
    </div>
  </footer>
  <!-- Scripts -->
  <script src="{{('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('asset/js/owl-carousel.js')}}"></script>
  <script src="{{('asset/js/animation.js')}}"></script>
  <script src="{{('asset/js/imagesloaded.js')}}"></script>
  <script src="{{('asset/js/templatemo-custom.js')}}"></script>

</body>
</html>