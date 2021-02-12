<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hadiansyah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/nivo-slider/css/nivo-slider.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>TRACKING COVID-19</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Slider Section ======= -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="{{asset('assets/img/slider/slider1.jpg')}}" alt="" title="#slider-direction-1" />
        <img src="{{asset('assets/img/slider/slider2.jpg')}}" alt="" title="#slider-direction-2" />
        <img src="{{asset('assets/img/slider/slider3.jpg')}}" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Tetap jaga kesehatan </h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title2">Jangan Lupa Menggunakan Protokol Kesehatan</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  {{-- <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Lebih Baik Mencegah Dari Pada Mengobati</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Patuhi Protokol Kesehatan</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  {{-- <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Hindari Kerumunan</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">Tetap Berjaga Jarak Agar Terhidar Dari Virus Corona</h1>
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
                  {{-- <a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
                  <a class="ready-btn page-scroll" href="#about">Learn More</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Slider -->

 <div class="bg-light">
      <navigasi-bar>
          <center>
                <div class="opening">
                    <br>
                    <br>
                    <h3 class="card-title"><center>Data Kasus Corona virus di Indonesia </center></h3>
                </div>
                <div class="last-update"></div>
         </center>
      </navigasi-bar>
                <div class="container">
                    <div class="card mb-3 mt-3">
                        <div class="card-body ">
                            {{-- bg-dark --}}
            <br>
            <div class="row">
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-danger img-card box-primary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL POSITIF</p>
            <h2 class="mb-0 number-font">{{ $positif }}</h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/brand/kecewa.png')}}" width="50" height="50"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card bg-success img-card box-secondary-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL SEMBUH</p>
            <h2 class="mb-0 number-font">{{ $sembuh}}</h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
            <div class="ml-auto"> <img src="{{asset('assets/img/brand/senang.png')}}" width="50" height="50"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
       <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card  bg-secondary img-card box-success-shadow">
         <div class="card-body">
          <div class="d-flex">
           <div class="text-white">
            <p class="text-white mb-0">TOTAL MENINGGAL</p>
            <h2 class="mb-0 number-font">{{ $meninggal }}</h2>
            <p class="text-white mb-0">ORANG</p>
           </div>
           <div class="ml-auto"> <img src="{{asset('assets/img/brand/nangis.png')}}" width="50" height="50"> </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
         <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary">
               <div class="card-body">
                 <div class="d-flex">
                  <div class="text-white">
                     <h2 class="mb-0 number-font">INDONESIA</h2>
                      <p class="text-white mb-0"><!-- {{ $positif }} --></p>
                 <div class="ml-auto"> <img src="{{asset('assets/img/brand/indonesia.png')}}" width="50" height="50"></div>
                </div>
            </div>
         </div>
      </div>
     </div>
          </div>
         </div>
        </div>
       </div><!-- COL END -->
     </div>
    </div>

    
{{-- 
              <div class="card-body">
                <h3 class="card-title"><center>Data Kasus Corona virus di Indonesia Berdasarkan Provinsi</center></h3>
              <table id="example1" class="table table-bordered table-striped"> --}}
                <section id="indonesia" class="indonesia">
                    <div class="container">
                        <br>
                        <br>
                      <div class="section-title" data-aos="zoom-out">
                        
                        <h3 class="card-title"><center>Data Kasus Corona virus di Indonesia Berdasarkan Provinsi</center></h3>
                      </div>
              
                      <div class="row content" data-aos="fade-up">
                            
                          <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
              
                            <table id="example2" class="table table-bordered table-striped">
                            
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Jumlah Positif</th>
                    <th scope="col">Jumlah Sembuh</th>
                    <th scope="col">Jumlah Meninggal</th>
                  </tr>
                </thead>
              <tbody>
              @php
                $no = 1;
              @endphp

              @foreach($provinsi as $tmp)
                  <tr>
                    <th scope="row">{{$no++}}</th>
                      <td>{{$tmp->nama_provinsi}}</td>
                      <td>{{number_format($tmp->Positif)}}</td>
                      <td>{{number_format($tmp->Sembuh)}}</td>
                      <td>{{number_format($tmp->Meninggal)}}</td>
                  </tr>
                  
                @endforeach
                </tbody>
              </table>
            {{-- </div>
          </div>
        </div> --}}
    </div>
</div>
</div>

</div>
</section>
             
        <section id="global" class="global">
            <div class="container">
      
              <div class="section-title" data-aos="zoom-out">
                  <br>
                  <br>
                <h3 class="card-title"><center>Data Kasus Corona Virus Di Dunia</center></h3>
              </div>
      
              <div class="row content" data-aos="fade-up">
                    
                  <div class="table-wrapper-scroll-y my-custom-scrollbar col-lg-12">
      
                    <table id="example1" class="table table-bordered table-striped">
                   
                      <thead>
                        <tr>
                          <th scope="col"><center>No</center></th>
                          <th scope="col"><center>Negara</center></th>
                          <th scope="col"><center>Jumlah Positif</center></th>
                          <th scope="col"><center>Jumlah Sembuh</center></th>
                          <th scope="col"><center>Jumlah Meninggal</center></th>
                        </tr>
                      </thead>
                    <tbody>
                    @php
                      $no = 1;
                    @endphp
                      @foreach($dunia as $data)
                          <tr>
                            <td> <?php echo $no++ ?></td>
                            <td> <?php echo $data['attributes']['Country_Region'] ?></td>
                            <td> <?php echo number_format($data['attributes']['Confirmed']) ?></td>
                            <td><?php echo number_format($data['attributes']['Recovered'])?></td>
                            <td><?php echo number_format($data['attributes']['Deaths'])?></td>
                          </tr>
                        @endforeach
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
      
            </div>
            </section>

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Corona Virus</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="{{asset('assets/img/about/covid-19-0-alodokter.jpg')}}" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">COVID-19 adalah penyakit yang disebabkan oleh virus severe
                     acute respiratory syndrome coronavirus 2 (SARS-CoV-2). COVID-19 dapat menyebabkan 
                     gangguan sistem pernapasan, mulai dari gejala yang ringan seperti flu, hingga 
                     infeksi paru-paru, seperti pneumonia.</h4>
                </a>
                <p>
                  Kasus pertama penyakit ini terjadi di kota Wuhan, Cina, pada akhir Desember 2019. 
                  Setelah itu, COVID-19 menular antarmanusia dengan sangat cepat dan menyebar ke puluhan negara,
                   termasuk Indonesia, hanya dalam beberapa bulan.
                  Penyebarannya yang cepat membuat beberapa negara menerapkan
                   kebijakan untuk memberlakukan lockdown untuk mencegah penyebaran virus Corona. 
                   Di Indonesia, pemerintah menerapkan kebijakan Pembatasan Sosial Berskala Besar (PSBB)
                    untuk menekan penyebaran virus ini.</p>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Hadiansyah</strong>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/appear/jquery.appear.js')}}"></script>
  <script src="{{asset('assets/vendor/knob/jquery.knob.js')}}"></script>
  <script src="{{asset('assets/vendor/parallax/parallax.js')}}"></script>
  <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/nivo-slider/js/jquery.nivo.slider.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $("#example2").DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

</body>

</html>