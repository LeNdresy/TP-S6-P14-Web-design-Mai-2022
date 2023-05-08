<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BackOffice</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/ia.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

   <!-- CKEditor -->
    <script src="{{asset('assets/ckeditor5-build-classic/ckeditor.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/ckeditor5-build-classic/sample/css/sample.css')}}" media="screen">

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
        <img src="{{asset('assets/img/ia.jpg')}}" alt="">
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

      <li class="nav-item">
        <a class="nav-link " href="go-to-back">
          <i class="bi bi-folder-plus"></i>
          <span>Ajouter contenu</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-folder-plus"></i>
          <span>Lister</span>
        </a>
      </li>

    </ul>
    
  </aside><!-- End Sidebar-->

  <main id="main" class="main">
  @if(isset($result))
    @if($result == 1)
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Contenu créé avec succès!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if($result == 2)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Erreur!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
  @endif
    <div class="pagetitle">
      <h1>Créer un contenu</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Blog</a></li>
          <li class="breadcrumb-item active">Ajouter</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un contenu</h5>

              <!-- Floating Labels Form -->
              <form class="row g-3" method="post" action="add-new-article" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="floatingName" name="nom" placeholder="Titre"  required>
                    <label for="floatingName">Titre</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State" name="categorie" required>
                        @foreach($categorie as $cat)
                        <option value="{{$cat['id']}}">{{$cat['typecategorie']}}</option> 
                        @endforeach
                    </select>
                    <label for="floatingSelect">Catégorie</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="State" name="alaune" required>
                        <option value="0">Aucun</option> 
                        <option value="1">A la une</option> 
                    </select>
                    <label for="floatingSelect">Statut</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                      <input type="date" class="form-control" id="floatingName" name="date" required>
                    <label for="floatingName">Date de création</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                      <input type="text" class="form-control" id="floatingName" name="producteur" required>
                    <label for="floatingName">Producteur</label>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-floating">
                      <input type="file" class="form-control" id="floatingName" name="photo" required>
                    <label for="floatingName">Photo</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea class="form-control" placeholder="Contenu" id="contenu" style="height: 100px;" name="contenu" ></textarea>
                   </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="Ajouter">Ajouter</button>
                  <button type="reset" class="btn btn-secondary">Annuler</button>
                </div>
              </form><!-- End floating Labels Form -->

            </div>
          </div>

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
  <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

  <script>
    ClassicEditor
	.create( document.querySelector( '#contenu' ), {
	    // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
	} )
	.then( editor => {
	    window.editor = editor;
	} )
	.catch( err => {
	   console.error( err.stack );
	} );
</script>

</body>

</html>