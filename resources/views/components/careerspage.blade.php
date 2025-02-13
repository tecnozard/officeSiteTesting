<!DOCTYPE html>
<html lang="en">

<head>
<!DOCTYPE html>
<html lang="en" >

<head>

  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tecnozard</title>
  <meta name="description" content="Innovation & Excellence - Harnessing the power of technology to deliver high-impact, scalable solutions for your business.">
  <meta name="keywords" content="Tecnozard">
  <meta property="og:title" content="Tecnozard Private Limited">
  <meta property="og:description" content="Innovation & Excellence - Harnessing the power of technology to deliver high-impact, scalable solutions for your business.">
  <meta property="og:image" content="https://tecnozard.com/assets/img/TZ logo.png">
  <meta property="og:url" content="https://www.tecnozard.com">
  <meta property="og:type" content="website">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Tecnozard Private Limited">
  <meta name="twitter:description" content="Innovation & Excellence - Harnessing the power of technology to deliver high-impact, scalable solutions for your business.">
  <meta name="twitter:image" content="https://tecnozard.com/assets/img/TZ logo.png">




  <!-- Favicons -->
  <link href="{{ asset('img/TZ logo.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>


  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="index-page" >
@include('components.navbar')
<!-- internship Section -->
<section id="internship" class="internship section" style="padding-top: 70px;">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <!-- <span>Job Openings</span> -->
  <h2>Job Openings</h2>
  <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
</div><!-- End Section Title -->

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

   <ul class="internship-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-itjos">IT Jobs </li>
       <li data-filter=".filter-nonitjos">Non-IT Jobs</li>
      <!--<li data-filter=".filter-branding">Branding</li>
      <li data-filter=".filter-books">Books</li> -->
    </ul>

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-nonitjos">
        <img src="{{asset('img/job/data_entryjob.jpg')}}" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Data Entry</h4>
          <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->

          <a href="/career" style="font-size: 20px;" title="More Details" class="details-link"><i class="bi bi-link-45deg" ></i>Apply</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-itjos">
        <img src="{{asset('img/job/internship.avif')}}" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Internship Training</h4>
          <a href="/internshipdetails" style="font-size: 20px;" title="More Details" class="details-link"><i class="bi bi-link-45deg" ></i>Apply</a>
        </div>
      </div>

      <!-- <div class="col-lg-4 col-md-6 internship-item isotope-item filter-branding">
        <img src="assets/img/internship/branding-1.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Branding 1</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/branding-1.jpg" title="Branding 1" data-gallery="internship-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-books">
        <img src="assets/img/internship/books-1.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Books 1</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/books-1.jpg" title="Branding 1" data-gallery="internship-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-app">
        <img src="assets/img/internship/app-2.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>App 2</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/app-2.jpg" title="App 2" data-gallery="internship-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-product">
        <img src="assets/img/internship/product-2.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Product 2</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/product-2.jpg" title="Product 2" data-gallery="internship-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-branding">
        <img src="assets/img/internship/branding-2.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Branding 2</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/branding-2.jpg" title="Branding 2" data-gallery="internship-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-books">
        <img src="assets/img/internship/books-2.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Books 2</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/books-2.jpg" title="Branding 2" data-gallery="internship-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-app">
        <img src="assets/img/internship/app-3.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>App 3</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/app-3.jpg" title="App 3" data-gallery="internship-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-product">
        <img src="assets/img/internship/product-3.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Product 3</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/product-3.jpg" title="Product 3" data-gallery="internship-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-branding">
        <img src="assets/img/internship/branding-3.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Branding 3</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/branding-3.jpg" title="Branding 2" data-gallery="internship-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 internship-item isotope-item filter-books">
        <img src="assets/img/internship/books-3.jpg" class="img-fluid" alt="">
        <div class="internship-info">
          <h4>Books 3</h4>
          <p>Lorem ipsum, dolor sit amet consectetur</p>
          <a href="assets/img/internship/books-3.jpg" title="Branding 3" data-gallery="internship-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="internship-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
        </div>
      </div> -->

    </div><!-- End internship Container -->

  </div>

</div>

</section><!-- /internship Section -->




     @include('components.footer')





  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>


