
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
  <title>Tecnozard |</title>
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

<body class="index-page">
@include('components.navbar')

<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="row gy-4">
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-building"></i>
                            <h3>Registered Address</h3>
                            <p>No-23, Sethalai Nagara Street</p>
                            <p>Murugabakam,</p>
                            <p>Pondicherry, Pincode:605004</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Office Address</h3>
                            <p>No-25, Kamalam Nagar,</p>
                            <p>Thirupapuliyur,</p>
                            <p>Cuddalore, Pincode:607002</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="400">
                            <i class="bi bi-person-lines-fill"></i>
                            <h3>Contact Us</h3>
                            <p>contact@tecnozard.com</p>
                            <p>+919600641464</p>
                            <p>+917094962247</p>
                            <p>+917010035195</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="500">
                            <i class="bi bi-clock"></i>
                            <h3>Open Hours</h3>
                            <p>Monday - Saturday</p>
                            <p>9:00AM - 06:00PM</p>
                        </div>
                    </div>
                </div>
            </div>
<div class="col-lg-6" ng-app="contactApp" ng-controller="ContactController">
    <form ng-submit="submitForm()" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" ng-model="contact.name" class="form-control" placeholder="Your Name" required>
            </div>
            <div class="col-md-6">
                <input type="email" ng-model="contact.email" class="form-control" placeholder="Your Email" required>
            </div>
            <div class="col-12">
                <input type="text" ng-model="contact.subject" class="form-control" placeholder="Subject" required>
            </div>
            <div class="col-12">
                <textarea class="form-control" ng-model="contact.message" rows="6" placeholder="Message" required></textarea>
            </div>
            <div class="col-12 text-center">
                <div class="alert alert-success" ng-show="successMessage">@{{ successMessage }}</div>
                <div class="alert alert-danger" ng-show="errorMessage">@{{ errorMessage }}</div>
                <div class="loading" ng-show="loading">Loading...</div>
                <button type="submit" ng-disabled="loading">Send Message</button>
            </div>
        </div>
    </form>
</div>




        </div>
    </div>
</section>

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





















