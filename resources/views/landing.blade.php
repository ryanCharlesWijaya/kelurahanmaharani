<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kelurahan Maharani</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script>
    function switchStyle() {
  if (document.getElementById('styleSwitch').checked) {
    document.getElementById('gallery').classList.add("custom");
    document.getElementById('exampleModal').classList.add("custom");
  } else {
    document.getElementById('gallery').classList.remove("custom");
    document.getElementById('exampleModal').classList.remove("custom");
  }
}
</script>

  <style>
    /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
  </style>
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendor/venobox/venobox.css')}}" rel="stylesheet">
    <!-- <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet"> -->
    <link href="{{ asset('sass/app.scss') }}" rel="stylesheet"> -->
        <!-- Core js (includes jquery)-->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Presento - v1.1.1
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        
      <!-- Carousel markup: https://getbootstrap.com/docs/4.4/components/carousel/ -->
      <div id="carouselExample" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/image/1.jpeg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/2.jpeg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/3.jpeg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/image/4.jpeg">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="index.html">Smart Maharani<span>.</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#header">Beranda</a></li>
              <li><a href="#about">Tentang</a></li>
              <li><a href="#faq">Q&A</a></li> 
              <!--
              <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="blog.html">Blog</a></li> -->
              <!-- <li class="drop-down"><a href="">Drop Down</a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="drop-down"><a href="#">Deep Drop Down</a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li> -->
              <li><a href="#contact">Kontak</a></li>
            </ul>
          </nav><!-- .nav-menu -->

          <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>Selamat Datang di</h1>
              <h2>Portal Resmi Kelurahan Maharani</h2>
              <a href="#about" class="btn-get-started scrollto">Mulai</a>
            </div>
            
          </div>
          <div class="col-xl-12 h-100">
              <div class="row h-100">
                <div class="col-md-3 h-100" id="logo2-wrapper">
                  <img class="" id="logo2" src="/image/logo.png" alt="">
                </div>
                <img class="col-md-3 position-absolute" style="right: 0;" id="hero-image" src="/image/camat&lurah.png" alt="" srcset="">
              </div>
            </div>
        </div>
          
      </div>
    </div>
    
  </section><!-- End Hero -->
  <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-document-folder">
                 <svg id="icons"  enable-background="new 0 0 64 64"  viewBox="0 0 64 64"  xmlns="http://www.w3.org/2000/svg"><g><g><path d="m4.001 36c-.553 0-1-.447-1-1v-3.867c0-.553.447-1 1-1s1 .447 1 1v3.867c0 .553-.447 1-1 1z"/></g><g><path d="m18.001 36c-.553 0-1-.447-1-1v-4.5c0-.553.447-1 1-1s1 .447 1 1v4.5c0 .553-.447 1-1 1z"/></g><g><path d="m18.001 31.5c-.553 0-1-.447-1-1 0-3.584-2.916-6.5-6.501-6.5-3.584 0-6.499 2.916-6.499 6.5 0 .553-.447 1-1 1s-1-.447-1-1c0-4.687 3.813-8.5 8.499-8.5 4.688 0 8.501 3.813 8.501 8.5 0 .553-.447 1-1 1z"/></g><g><path d="m18.002 32.871c-.301 0-.598-.135-.795-.392-1.931-2.523-2.457-2.313-4.414-1.538-1.878.743-4.716 1.87-9.948 1.042-.545-.086-.918-.597-.831-1.143.086-.545.6-.92 1.144-.831 4.692.742 7.123-.223 8.899-.927 2.408-.954 4.024-1.362 6.738 2.181.336.438.253 1.066-.186 1.402-.181.139-.395.206-.607.206z"/></g><g><path d="m14 30.477c-.147 0-.298-.033-.439-.103-.496-.243-.7-.843-.457-1.338l2-4.072c.243-.496.841-.701 1.338-.457.496.243.7.843.457 1.338l-2 4.072c-.174.354-.53.56-.899.56z"/></g><g><path d="m2.001 47.996c-.553 0-1-.447-1-1 0-2.206 1.794-4 4-4 .553 0 1 .447 1 1s-.447 1-1 1c-1.103 0-2 .897-2 2 0 .553-.447 1-1 1z"/></g><g><path d="m8.001 45.002h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m2.001 52c-.553 0-1-.447-1-1v-4.004c0-.553.447-1 1-1s1 .447 1 1v4.004c0 .553-.447 1-1 1z"/></g><g><path d="m20.001 47.996c-.553 0-1-.447-1-1 0-1.103-.897-2-2-2-.553 0-1-.447-1-1s.447-1 1-1c2.206 0 4 1.794 4 4 0 .553-.447 1-1 1z"/></g><g><path d="m17.001 45.002h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m20.001 52c-.553 0-1-.447-1-1v-4.004c0-.553.447-1 1-1s1 .447 1 1v4.004c0 .553-.447 1-1 1z"/></g><g><path d="m8.001 45.002c-.553 0-1-.447-1-1v-2.684c0-.553.447-1 1-1s1 .447 1 1v2.684c0 .553-.447 1-1 1z"/></g><g><path d="m14.001 44.996c-.553 0-1-.447-1-1v-2.678c0-.553.447-1 1-1s1 .447 1 1v2.678c0 .553-.447 1-1 1z"/></g><g><path d="m11.001 42.992c-4.411 0-8-3.587-8-7.996 0-.553.447-1 1-1s1 .447 1 1c0 3.307 2.691 5.996 6 5.996s6-2.689 6-5.996c0-.553.447-1 1-1s1 .447 1 1c0 4.409-3.589 7.996-8 7.996z"/></g><g><path d="m45.999 36c-.553 0-1-.447-1-1v-8.004c0-.553.447-1 1-1s1 .447 1 1v8.004c0 .553-.447 1-1 1z"/></g><g><path d="m59.999 36c-.553 0-1-.447-1-1v-.293c0-.553.447-1 1-1s1 .447 1 1v.293c0 .553-.447 1-1 1z"/></g><g><path d="m43.999 47.996c-.553 0-1-.447-1-1 0-2.206 1.794-4 4-4 .553 0 1 .447 1 1s-.447 1-1 1c-1.103 0-2 .897-2 2 0 .553-.447 1-1 1z"/></g><g><path d="m49.999 45.002h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m43.999 52c-.553 0-1-.447-1-1v-4.004c0-.553.447-1 1-1s1 .447 1 1v4.004c0 .553-.447 1-1 1z"/></g><g><path d="m61.999 47.996c-.553 0-1-.447-1-1 0-1.103-.897-2-2-2-.553 0-1-.447-1-1s.447-1 1-1c2.206 0 4 1.794 4 4 0 .553-.447 1-1 1z"/></g><g><path d="m58.999 45.002h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m61.999 52c-.553 0-1-.447-1-1v-4.004c0-.553.447-1 1-1s1 .447 1 1v4.004c0 .553-.447 1-1 1z"/></g><g><path d="m49.999 45.002c-.553 0-1-.447-1-1v-2.684c0-.553.447-1 1-1s1 .447 1 1v2.684c0 .553-.447 1-1 1z"/></g><g><path d="m55.999 44.996c-.553 0-1-.447-1-1v-2.678c0-.553.447-1 1-1s1 .447 1 1v2.678c0 .553-.447 1-1 1z"/></g><g><path d="m52.999 42.992c-4.411 0-8-3.587-8-7.996 0-.553.447-1 1-1s1 .447 1 1c0 3.307 2.691 5.996 6 5.996s6-2.689 6-5.996c0-.553.447-1 1-1s1 .447 1 1c0 4.409-3.589 7.996-8 7.996z"/></g><g><path d="m20 59c-.553 0-1-.447-1-1 0-3.309 2.691-6 6-6 .553 0 1 .447 1 1s-.447 1-1 1c-2.206 0-4 1.794-4 4 0 .553-.447 1-1 1z"/></g><g><path d="m28 54h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m20 63c-.553 0-1-.447-1-1v-4c0-.553.447-1 1-1s1 .447 1 1v4c0 .553-.447 1-1 1z"/></g><g><path d="m44 59c-.553 0-1-.447-1-1 0-2.206-1.794-4-4-4-.553 0-1-.447-1-1s.447-1 1-1c3.309 0 6 2.691 6 6 0 .553-.447 1-1 1z"/></g><g><path d="m39 54h-3c-.553 0-1-.447-1-1s.447-1 1-1h3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m44 63c-.553 0-1-.447-1-1v-4c0-.553.447-1 1-1s1 .447 1 1v4c0 .553-.447 1-1 1z"/></g><g><path d="m28 54c-.553 0-1-.447-1-1v-3.936c0-.553.447-1 1-1s1 .447 1 1v3.936c0 .553-.447 1-1 1z"/></g><g><path d="m36 54c-.553 0-1-.447-1-1v-3.936c0-.553.447-1 1-1s1 .447 1 1v3.936c0 .553-.447 1-1 1z"/></g><g><path d="m31.999 51c-5.514 0-9.999-4.485-9.999-9.998 0-.553.447-1 1-1s1 .447 1 1c0 4.41 3.588 7.998 7.999 7.998 4.412 0 8.001-3.588 8.001-7.998 0-.553.447-1 1-1s1 .447 1 1c0 5.513-4.486 9.998-10.001 9.998z"/></g><g><path d="m23 42.051c-.553 0-1-.447-1-1v-6.051c0-.553.447-1 1-1s1 .447 1 1v6.051c0 .553-.447 1-1 1z"/></g><g><path d="m41 42.002c-.553 0-1-.447-1-1v-6.002c0-.553.447-1 1-1s1 .447 1 1v6.002c0 .553-.447 1-1 1z"/></g><g><path d="m41 36c-.553 0-1-.447-1-1 0-1.654-1.346-3-3-3-.553 0-1-.447-1-1s.447-1 1-1c2.757 0 5 2.243 5 5 0 .553-.447 1-1 1z"/></g><g><path d="m37 32c-.553 0-1-.447-1-1v-4c0-.553.447-1 1-1s1 .447 1 1v4c0 .553-.447 1-1 1z"/></g><g><path d="m37 28.014h-6c-.553 0-1-.447-1-1s.447-1 1-1h6c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m23 36c-.553 0-1-.447-1-1 0-4.963 4.037-9 9-9 .553 0 1 .447 1 1s-.447 1-1 1c-3.859 0-7 3.141-7 7 0 .553-.447 1-1 1z"/></g><g><g><path d="m40.999 39.025c-.192 0-.387-.056-.559-.171l-3-2.025c-.458-.31-.578-.931-.27-1.389.31-.458.929-.576 1.389-.27l3 2.025c.458.31.578.931.27 1.389-.193.287-.509.441-.83.441z"/></g><g><path d="m32.5 38c-3.612 0-6.687-1.008-6.815-1.051-.523-.175-.807-.74-.634-1.264.174-.523.739-.807 1.264-.635.029.011 2.908.95 6.185.95 3.178 0 5.04-.888 5.059-.897.493-.24 1.094-.037 1.337.457s.043 1.09-.449 1.336c-.092.044-2.261 1.104-5.947 1.104z"/></g><g><path d="m23.001 39.025c-.321 0-.637-.154-.83-.44-.309-.458-.188-1.079.27-1.389l3-2.025c.459-.307 1.079-.188 1.389.27.309.458.188 1.079-.27 1.389l-3 2.025c-.172.115-.367.17-.559.17z"/></g></g><g><path d="m61.999 30.996c-.553 0-1-.447-1-1 0-3.859-3.141-7-7-7-1.782 0-3.362.968-4.374 1.78-.432.346-1.06.276-1.406-.154-.346-.431-.276-1.061.154-1.406 1.81-1.452 3.755-2.22 5.626-2.22 4.963 0 9 4.037 9 9 0 .553-.447 1-1 1z"/></g><g><path d="m61.999 40.996c-.553 0-1-.447-1-1 0-3.859-3.141-7-7-7-.553 0-1-.447-1-1s.447-1 1-1c4.963 0 9 4.037 9 9 0 .553-.447 1-1 1z"/></g><g><path d="m45.999 32.996c-.553 0-1-.447-1-1s.447-1 1-1c1.103 0 2-.897 2-2 0-.553.447-1 1-1s1 .447 1 1c0 2.206-1.794 4-4 4z"/></g><g><path d="m45.999 28.01c-.553 0-1-.447-1-1 0-2.206 1.794-4 4-4 .553 0 1 .447 1 1s-.447 1-1 1c-1.103 0-2 .897-2 2 0 .553-.447 1-1 1z"/></g><g><path d="m51.999 32.996c-2.206 0-4-1.794-4-4 0-.553.447-1 1-1s1 .447 1 1c0 1.103.897 2 2 2 .553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m48.999 29.996c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m61.999 40.996c-.553 0-1-.447-1-1v-10c0-.553.447-1 1-1s1 .447 1 1v10c0 .553-.447 1-1 1z"/></g><g><path d="m53.999 32.996h-2c-.553 0-1-.447-1-1s.447-1 1-1h2c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m3.001 31.996c-.553 0-1-.447-1-1v-.496c0-.553.447-1 1-1s1 .447 1 1v.496c0 .553-.447 1-1 1z"/></g><g><path d="m29.999 54.994c-.149 0-.301-.033-.444-.104l-2-.994c-.494-.246-.696-.846-.45-1.341.245-.494.843-.698 1.341-.45l2 .994c.494.246.696.846.45 1.341-.175.351-.529.554-.897.554z"/></g><g><path d="m30.001 54.994c-.367 0-.721-.203-.896-.554-.247-.494-.046-1.095.448-1.341l2-.998c.497-.249 1.095-.045 1.341.448.247.494.046 1.095-.448 1.341l-2 .998c-.143.073-.296.106-.445.106z"/></g><g><path d="m34.001 54.994c-.368 0-.722-.203-.896-.555-.246-.495-.044-1.095.45-1.341l2-.994c.498-.248 1.096-.044 1.341.45.246.495.044 1.095-.45 1.341l-2 .994c-.144.072-.296.105-.445.105z"/></g><g><path d="m33.999 54.994c-.149 0-.302-.033-.445-.105l-2-.998c-.494-.246-.695-.847-.448-1.341.246-.493.846-.697 1.341-.448l2 .998c.494.246.695.847.448 1.341-.175.35-.529.553-.896.553z"/></g><g><path d="m53 46.994c-.189 0-.382-.054-.552-.167l-3.002-1.992c-.46-.305-.586-.926-.28-1.386.305-.46.924-.589 1.386-.28l3.002 1.992c.46.305.586.926.28 1.386-.192.29-.51.447-.834.447z"/></g><g><path d="m52.998 46.994c-.324 0-.642-.157-.834-.447-.306-.46-.18-1.081.28-1.386l3.002-1.992c.46-.309 1.081-.18 1.386.28.306.46.18 1.081-.28 1.386l-3.002 1.992c-.17.113-.362.167-.552.167z"/></g><g><path d="m11 46.998c-2.242 0-3.999-1.317-3.999-3 0-.553.447-1 1-1s1 .447 1 1c0 .408.778 1 1.999 1s2-.592 2-1c0-.553.447-1 1-1s1 .447 1 1c0 1.683-1.757 3-4 3z"/></g><g><g><g><path d="m37.499 9.986h-10.998c-.553 0-1-.447-1-1v-1.998c0-.421.264-.797.66-.94l5.499-1.988c.219-.08.461-.08.68 0l5.499 1.988c.396.144.66.52.66.94v1.998c0 .553-.447 1-1 1zm-9.998-2h8.998v-.296l-4.499-1.627-4.499 1.627z"/></g><g><path d="m37.498 17.986h-10.997c-.553 0-1-.447-1-1v-3c0-.553.447-1 1-1h10.997c.553 0 1 .447 1 1v3c0 .553-.447 1-1 1zm-9.997-2h8.997v-1h-8.997z"/></g><g><path d="m27.496 14.986c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m33.499 14.986c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m30.498 14.986c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m36.499 14.986c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g></g><g><g><path d="m48 3h-32c-.553 0-1-.447-1-1s.447-1 1-1h32c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m48 21h-32c-.553 0-1-.447-1-1s.447-1 1-1h32c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m48 16c-2.757 0-5-2.243-5-5s2.243-5 5-5c.553 0 1 .447 1 1s-.447 1-1 1c-1.654 0-3 1.346-3 3s1.346 3 3 3c.553 0 1 .447 1 1s-.447 1-1 1z"/></g><g><path d="m48 21c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m48 8c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m16.002 16c-.553 0-1-.447-1-1s.447-1 1-1c1.654 0 3-1.346 3-3s-1.346-3-3-3c-.553 0-1-.447-1-1s.447-1 1-1c2.757 0 5 2.243 5 5s-2.243 5-5 5z"/></g><g><path d="m16.002 21c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g><g><path d="m16.002 8c-.553 0-1-.447-1-1v-5c0-.553.447-1 1-1s1 .447 1 1v5c0 .553-.447 1-1 1z"/></g></g></g></g></svg>
              </i>
              <span data-toggle="counter-up">232</span>
              <p>Pengunjung</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;" xml:space="preserve"><g><g><path d="M160,344h-16c-4.418,0-8,3.582-8,8s3.582,8,8,8h16c4.418,0,8-3.582,8-8S164.418,344,160,344z"/></g></g><g><g><path d="M384,344H192c-4.418,0-8,3.582-8,8s3.582,8,8,8h192c4.418,0,8-3.582,8-8S388.418,344,384,344z"/></g></g><g><g><path d="M160,296h-16c-4.418,0-8,3.582-8,8s3.582,8,8,8h16c4.418,0,8-3.582,8-8S164.418,296,160,296z"/></g></g><g><g><path d="M384,296H192c-4.418,0-8,3.582-8,8s3.582,8,8,8h192c4.418,0,8-3.582,8-8S388.418,296,384,296z"/></g></g><g><g><path d="M160,248h-16c-4.418,0-8,3.582-8,8s3.582,8,8,8h16c4.418,0,8-3.582,8-8S164.418,248,160,248z"/></g></g><g><g><path d="M384,248H192c-4.418,0-8,3.582-8,8s3.582,8,8,8h192c4.418,0,8-3.582,8-8S388.418,248,384,248z"/></g></g><g><g><path d="M160,200h-16c-4.418,0-8,3.582-8,8s3.582,8,8,8h16c4.418,0,8-3.582,8-8S164.418,200,160,200z"/></g></g><g><g><path d="M384,200H192c-4.418,0-8,3.582-8,8s3.582,8,8,8h192c4.418,0,8-3.582,8-8S388.418,200,384,200z"/></g></g><g><g><path d="M160,152h-16c-4.418,0-8,3.582-8,8s3.582,8,8,8h16c4.418,0,8-3.582,8-8S164.418,152,160,152z"/></g></g><g><g><path d="M384,152H192c-4.418,0-8,3.582-8,8s3.582,8,8,8h192c4.418,0,8-3.582,8-8S388.418,152,384,152z"/></g></g><g><g><path d="M439.896,119.496c-0.04-0.701-0.177-1.393-0.408-2.056c-0.088-0.256-0.152-0.504-0.264-0.752 c-0.389-0.87-0.931-1.664-1.6-2.344l-112-112c-0.68-0.669-1.474-1.211-2.344-1.6c-0.248-0.112-0.496-0.176-0.744-0.264 c-0.669-0.23-1.366-0.37-2.072-0.416C320.328,0.088,320.176,0,320,0H96c-4.418,0-8,3.582-8,8v24H48c-4.418,0-8,3.582-8,8v432 c0,4.418,3.582,8,8,8h336c4.418,0,8-3.582,8-8v-40h40c4.418,0,8-3.582,8-8V120C440,119.824,439.912,119.672,439.896,119.496z M328,27.312L412.688,112H328V27.312z M376,464H56V48h32v376c0,4.418,3.582,8,8,8h280V464z M424,416H104V16h208v104 c0,4.418,3.582,8,8,8h104V416z"/></g></g><g><g><path d="M192,72h-48c-4.418,0-8,3.582-8,8v48c0,4.418,3.582,8,8,8h48c4.418,0,8-3.582,8-8V80C200,75.582,196.418,72,192,72z M184,120h-32V88h32V120z"/></g></g></svg>
              </i>
              <span data-toggle="counter-up">521</span>
              <p>Berkas Diunggah</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section>
  <main id="main">
  <section id="about" class="tabs">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-4">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">Sejarah Kelurahan Maharani</h4>
            </a>
          </li>
          <li class="nav-item col-4">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Visi Kelurahan Maharani</h4>
            </a>
          </li>
          <li class="nav-item col-4">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Misi Kelurahan Maharani</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>Kelurahan Maharani</h3>
                <p>
                adalah salah satu kelurahan di Kecamatan Rumbai Barat, Kota Pekanbaru, Provinsi Riau, Indonesia. Kelurahan ini dibentuk dari wilayah Kelurahan Palas dalam pemekaran wilayah di Kota Pekanbaru tahun 2016.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('image/4.jpeg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('image/1.jpeg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('image/2.jpeg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/tabs-4.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- ======= About Section ======= -->
    <!-- <section class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Voluptatem dignissimos provident quasi</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div> -->
    <!-- </section>  End About Section -->

    <!-- ======= Counts Section ======= -->
    
    <!-- End Counts Section -->

    <!-- ======= Tabs Section ======= -->
    <!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-computer"></i>
              <h4><a href="#">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Dolor Sitema</a></h4>
              <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="icofont-image"></i>
              <h4><a href="#">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="icofont-settings"></i>
              <h4><a href="#">Nemo Enim</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="icofont-earth"></i>
              <h4><a href="#">Magni Dolore</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#">Eiusmod Tempor</a></h4>
              <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri</h2>
        </div>

        <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" id="gallery" data-toggle="modal" data-target="#exampleModal" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img id="myImg" src="{{asset('image/8.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-target="#carouselExample" data-slide-to="1" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('image/1.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('image/3.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{asset('image/4.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('image/5.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{asset('image/6.jpeg')}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimoni Masyarakat</h2>
          <p>Pendapat masyarakat mengenai pelayanan kelurahan Maharani</p>
        </div>
      </div>

      <div class="container-fluid">

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pertanyaan</h2>
        </div>

        <ul class="faq-list" data-aos="fade-up">
        <?php foreach ($questions as $key => $data){ ?>
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq1">
              <?= $data->question ?>
              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-parent=".faq-list">
              <p>
               <?= $data->answer ?>
              </p>
            </div>
          </li>
          <?php } ?>
        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Team Section ======= -->
    

          <!-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div> -->

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Hubungi kami melalui kontak di bawah ini</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 368.16 368.16" style="enable-background:new 0 0 368.16 368.16;" xml:space="preserve"><g><g><g><path d="M184.08,0c-74.992,0-136,61.008-136,136c0,24.688,11.072,51.24,11.536,52.36c3.576,8.488,10.632,21.672,15.72,29.4 l93.248,141.288c3.816,5.792,9.464,9.112,15.496,9.112s11.68-3.32,15.496-9.104l93.256-141.296 c5.096-7.728,12.144-20.912,15.72-29.4c0.464-1.112,11.528-27.664,11.528-52.36C320.08,61.008,259.072,0,184.08,0z M293.8,182.152c-3.192,7.608-9.76,19.872-14.328,26.8l-93.256,141.296c-1.84,2.792-2.424,2.792-4.264,0L88.696,208.952 c-4.568-6.928-11.136-19.2-14.328-26.808C74.232,181.816,64.08,157.376,64.08,136c0-66.168,53.832-120,120-120 c66.168,0,120,53.832,120,120C304.08,157.408,293.904,181.912,293.8,182.152z"/><path d="M184.08,64.008c-39.704,0-72,32.304-72,72c0,39.696,32.296,72,72,72c39.704,0,72-32.304,72-72 C256.08,96.312,223.784,64.008,184.08,64.008z M184.08,192.008c-30.872,0-56-25.12-56-56s25.128-56,56-56s56,25.12,56,56 S214.952,192.008,184.08,192.008z"/></g></g></g></svg>
                  </i>
                  <h3>Alamat Kantor</h3>
                  <p>Jl. Tengku Bey, Maharatu, Kec. Rumbai, Kota Pekanbaru, Riau 28264</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106 C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787 L338.213,256L482,112.212V399.787z"/></g></g></svg>
                  </i>
                  <h3>Alamat Email</h3>
                  <p>smartmaharani@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.6 482.6" style="enable-background:new 0 0 482.6 482.6;" xml:space="preserve"><g><path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2c2.3,0.1,4.5,0.2,6.8,0.2 c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14 c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8 c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8 c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8 c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4 c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2 c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6 c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4 c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8 c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6 c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2 c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2 c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5 C28.039,146.4,24.139,124.3,25.739,104.2z"/></g></svg>
                  </i>
                  <h3>Nomor Telepon</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="mailto:smartmaharani@gmail.com" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama anda..." data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email anda..." data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan Anda"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <div id="footer">
    <div class="container">
      <div class="row">
        <div id="footer-links" class="col-lg-4 pt-5 pb-5">
          <h1>Smart Maharani<span style="color: #F2A02D;">.</span></h1>
          <p>Website resmi kelurahan Maharani, Kecamatan Rumbai Barat, Kota Pekanbaru, Riau</p>
        </div>
        <div id="footer-links" class="col-md-2 pt-5 pb-5">
          <h1>link</h1>
          <ul class="pl-3" style="list-style:none;">
            <li class="">
              <a href="#" style="color:white;">Beranda</a>
            </li>
            <li class="pt-2">
              <a href="#about" style="color:white;">Tentang</a>
            </li>
            <li class="pt-2">
              <a href="#faq" style="color:white;">Q&A</a>
            </li>
            <li class="pt-2">
              <a href="#contact" style="color:white;">kontak</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 pt-5 pb-5" id="social-media">
          <h1>Sosial media</h1>
          <a href="">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="169.063px" height="169.063px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;" xml:space="preserve"><g><path d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752 c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407 c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752 c17.455,0,31.656,14.201,31.656,31.655V122.407z"/><path d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561 C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561 c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/><path d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78 c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78 C135.661,29.421,132.821,28.251,129.921,28.251z"/></g></svg>
          </a>
          <a href="" style="margin-left: 0.8vw;">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M452,0H60C26.916,0,0,26.916,0,60v392c0,33.084,26.916,60,60,60h392c33.084,0,60-26.916,60-60V60 C512,26.916,485.084,0,452,0z M472,452c0,11.028-8.972,20-20,20H338V309h61.79L410,247h-72v-43c0-16.975,13.025-30,30-30h41v-62 h-41c-50.923,0-91.978,41.25-91.978,92.174V247H216v62h60.022v163H60c-11.028,0-20-8.972-20-20V60c0-11.028,8.972-20,20-20h392 c11.028,0,20,8.972,20,20V452z"/></g></g></svg>
          </a>
        </div>
        <div id="footer-links" class="col-lg-3 pt-5 pb-5">
          <h1>Terima Kasih</h1>
          <p>Sudah berkunjung ke website kami.</p>
        </div>
      </div>
      <div class="col-md-12 pb-2 text-center">
          <h5>Copyright&copy Kelurahan Maharani</h5>
        </div>
    </div>
  </div>
  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div> -->

    <!-- <div class="container d-md-flex py-4"> -->

      <!-- <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
        </div>
        <div class="credits"> -->
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div> -->
  <!-- </footer>End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up">
  <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492.002 492.002" style="enable-background:new 0 0 492.002 492.002;" xml:space="preserve"><g><g><path d="M484.136,328.473L264.988,109.329c-5.064-5.064-11.816-7.844-19.172-7.844c-7.208,0-13.964,2.78-19.02,7.844 L7.852,328.265C2.788,333.333,0,340.089,0,347.297c0,7.208,2.784,13.968,7.852,19.032l16.124,16.124 c5.064,5.064,11.824,7.86,19.032,7.86s13.964-2.796,19.032-7.86l183.852-183.852l184.056,184.064 c5.064,5.06,11.82,7.852,19.032,7.852c7.208,0,13.96-2.792,19.028-7.852l16.128-16.132 C494.624,356.041,494.624,338.965,484.136,328.473z"/></g></g></svg>

  </i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('vendor/aos/aos.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
