<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>Mobster - One page app template</title>

  <link rel="shortcut icon" href="{{asset('assets/favicon.png" type="image/x-icon')}}">

  <link rel="stylesheet" href="{{asset('assets/css/maicons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.css')}}">

  <link rel="stylesheet" href="{{asset('assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">

  <link rel="stylesheet" href="{{asset('assets/css/mobster.css')}}">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-floating">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../assets/favicon.png" alt="" width="40">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
        <li class="nav-item dropdown active">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item active" href="{{route('index1')}}">Homepage 1</a>
          <a class="dropdown-item" href="{{route('index2')}}">Homepage 2</a>
          </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('updates')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="updates.html">What's New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.html">Contact</a>
        </li>
      </ul>
      <div class="ml-auto my-2 my-lg-0">
        <button class="btn btn-dark rounded-pill">Download Now</button>
      </div>
    </div>
  </div>
</nav>
{{-- for content sect{{asset( --}}
@yield('content')

<div class="page-footer-section bg-dark fg-white">
    <div class="container">
      <div class="row mb-5 py-3">
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="mb-3">Pages</h5>
          <ul class="menu-link">
            <li><a href="#" class="">Features</a></li>
            <li><a href="#" class="">Customers</a></li>
            <li><a href="#" class="">Pricing</a></li>
            <li><a href="#" class="">GDPR</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="mb-3">Company</h5>
          <ul class="menu-link">
            <li><a href="#" class="">About</a></li>
            <li><a href="#" class="">Team</a></li>
            <li><a href="#" class="">Leadership</a></li>
            <li><a href="#" class="">Careers</a></li>
            <li><a href="#" class="">HIRING!</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <h5 class="mb-3">Contact</h5>
          <ul class="menu-link">
            <li><a href="#" class="">Contact Us</a></li>
            <li><a href="#" class="">Office Location</a></li>
            <li><a href="#" class="">hello@mobster.com</a></li>
            <li><a href="#" class="">support@macodeid.com</a></li>
            <li><a href="#" class="">+808 11233 900</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <h5 class="mb-3">Subscribe</h5>
          <p>Get some offers, news, or update features of application</p>
          <form method="POST">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Your email..">
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary"><span class="mai-send"></span></button>
              </div>
            </div>
          </form>
  
          <!-- Social Media Button -->
          <div class="mt-4">
            <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-facebook"></span></a>
            <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-twitter"></span></a>
            <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-instagram"></span></a>
            <a href="#" class="btn btn-fab btn-primary fg-white"><span class="mai-logo-google"></span></a>
          </div>
        </div>
      </div>
    </div>
  
    <hr>
  
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 py-2">
          <img src="../assets/favicon-light.png" alt="" width="40">
          <!-- Please don't remove or modify the credits below -->
          <p class="d-inline-block ml-2">Copyright &copy; <a href="https://www.macodeid.com/" class="fg-white fw-medium">MACode ID</a>. All rights reserved</p>
        </div>
        <div class="col-12 col-md-6 py-2">
          <ul class="nav justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link">Terms of Use</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Privacy Policy</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Cookie Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
  
  <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
  
  <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
  
  <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
  
  <script src="{{asset('assets/js/mobster.js')}}"></script>
  
  </body>
  </html>  