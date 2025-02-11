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
        <p>Privacy Policy<br></p>
    </div>
    <div class="container">
        <div class="row gy-5">
            <div class="col-xl-7 d-flex order-2 order-xl-1" data-aos="fade-up" data-aos-delay="200">
                <div class="row align-self-center gy-5">
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-database-add"></i>
                        <div>
                            <h4>Information We Collect</h4>
                            <p>Personal details such as name, email address, and phone number provided through contact forms or registration.</p>
                            <p>Data related to your usage of our website for analytics and service improvement.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-graph-up-arrow"></i>
                        <div>
                            <h4>How We Use Your Information</h4>
                            <p>To provide, improve, and personalize our services.</p>
                            <p>To send important updates, offers, or promotional materials.</p>
                            <p>To address your queries or concerns efficiently.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-shield-lock"></i>
                        <div>
                            <h4>Data Protection</h4>
                            <p>We implement robust security measures to ensure your data is stored and processed securely. However, no method of transmission over the internet is 100% secure.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-share"></i>
                        <div>
                            <h4>Third-Party Sharing</h4>
                            <p>We do not sell, trade, or share your personal information with third parties without your consent, except where required by law.</p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-chat-right-dots"></i>
                        <div>
                            <h4>Your Rights</h4>
                            <p>You have the right to access, update, or delete your personal information by contacting us at <a href="mailto:privacy@tecnozard.com">privacy@tecnozard.com</a></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 icon-box">
                        <i class="bi bi-cookie"></i>
                        <div>
                            <h4>Cookies and Tracking</h4>
                            <p>Our website uses cookies to enhance your browsing experience. You can manage or disable cookies through your browser settings.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 d-flex align-items-center order-1 order-xl-2" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('img/privacy.png') }}" class="img-fluid" alt="Features Illustration">
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



