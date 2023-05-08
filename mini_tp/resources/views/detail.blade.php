<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IA-Détails</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{secure_url('assets/img/ia.jpg')}}" rel="icon">
  <link href="{{secure_url('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{secure_url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{secure_url('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{secure_url('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{secure_url('assets/img/ia.jpg')}}" alt="">
        <span class="d-none d-lg-block">IABlog</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- Barre de Navigation (Message, Notification...) -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        @if(session()->has('admin'))
        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="log-out">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        @endif
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= (liste gauche)-->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    </ul>
    
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      @if($ia)
      <h1>{{$ia->nom}}</h1>
      @endif
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">IA</a></li>
          <li class="breadcrumb-item active">Détail</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          @if($ia)
          <div class="col-md-12">
          <!-- Card with an image on top -->
          <div class="card">
            <img src="{{secure_url('assets/img')}}/{{$ia->photo}}" class="card-img-top" alt="..." width="200" height="300">
            <div class="card-body">
              <h2 class="card-title">{{$ia->typecategorie}}</h2>
              <p class="card-text"><h3>{!!$ia->contenu!!}</h3></p>
              <p class="card-text">Lancée le : <b>{{$ia->datecreation}}</b></p>
              <p class="card-text">Produit par : <b>{{$ia->producteur}}</b></p>
              <p class="card-text"><a href="/" class="btn btn-primary">Retour</a></p>
            </div>
          </div><!-- End Card with an image on top -->          
          </div>
          @endif

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">         

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Ndresy</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{secure_url('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{secure_url('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{secure_url('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{secure_url('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{secure_url('assets/js/main.js')}}"></script>

</body>

</html>