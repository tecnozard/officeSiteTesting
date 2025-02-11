
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

<section id="alt-features" class="alt-features section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Last updated : 12th JAN 2025</h2>
        <p>Terms and condition<br></p>
    </div>
    <div class="container">
        <div class="row gy-5">
            <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">
                <div class="row align-self-center gy-5">
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-file-text"></i>
                        <div>
                            <h4>Acceptance of Terms</h4>
                            <p>By using our website and services, you acknowledge that you have read, understood, and agree to be bound by these terms.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-gear"></i>
                        <div>
                            <h4>Use of Services</h4>
                            <p>You agree to use our services only for lawful purposes and in compliance with all applicable laws and regulations.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-clipboard-check"></i>
                        <div>
                            <h4>Intellectual Property</h4>
                            <p>All content, logos, trademarks, and materials on our website are the property of Tecnozard Private Limited and are protected by applicable intellectual property laws. Unauthorized use is strictly prohibited.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-clipboard-check"></i>
                        <div>
                            <h4>Limitation of Liability</h4>
                            <p>Tecnozard Private Limited shall not be held liable for any direct, indirect, incidental, or consequential damages resulting from your use of our services.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-credit-card-2-front"></i>
                        <div>
                            <h4>Modifications</h4>
                            <p>These terms shall be governed by the laws of India. Any disputes arising shall be subject to the exclusive jurisdiction of the courts in Chennai, Tamil Nadu.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-bank"></i>
                        <div>
                            <h4>Governing Law</h4>
                            <p>Recognized for integrity, reliability, and innovation by leading organizations across sectors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('img/terms.png') }}" class="img-fluid" alt="Features Illustration">
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



