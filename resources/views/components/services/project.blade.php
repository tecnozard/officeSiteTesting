<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
    <title>Final Year Project</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        body {
            background: linear-gradient(90deg, #fff1eb 0%, #ace0f9 100%);
            color: #222;
            overflow-x: hidden;
        }
        .project-main {
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 50px 10%;
        }
        .project-image img {
            width: 100%;
            max-width: 600px;
            border-radius: 12px;
            transform: scale(0.9);
            animation: fadeInUp 1.5s ease-in-out forwards;
        }
        .project-content {
            max-width: 600px;
            opacity: 0;
            animation: fadeInRight 1.5s ease-in-out forwards;
        }
        .project-content h2 {
            font-size: 32px;
            font-weight: 600;
            color: #d91e18;
        }
        .project-content p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
            margin: 15px 0;
        }
        .project-content ul {
            list-style: none;
            padding: 0;
        }
        .project-content ul li {
            font-size: 18px;
            color: #444;
            padding: 8px 0;
            position: relative;
            padding-left: 30px;
            opacity: 0;
            animation: fadeInLeft 1s ease-in-out forwards;
        }
        .project-content ul li::before {
            content: "✔";
            color: #ff5733;
            font-size: 22px;
            position: absolute;
            left: 0;
            top: 2px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #d91e18;
            color: #fff;
            font-size: 18px;
            text-decoration: none;
            border-radius: 50px;
            transition: 0.3s ease-in-out;
            opacity: 0;
            animation: fadeInUp 1.5s ease-in-out forwards;
        }
        .btn:hover {
            background: #a51410;
            transform: scale(1.1);
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .project-main {
                flex-direction: column;
                text-align: center;
                padding: 30px;
            }
            .project-content ul li {
                text-align: left;
            }
            .btn {
                margin-top: 15px;
            }
        }
    </style>
</head>
<body class="index-page">
@include('components.navbar')

    <div class="project-main">
        <div class="project-image">
            <img src="{{ asset('img/services/project.png') }}" alt="Final Year Project">
        </div>
        <div class="project-content">
            <h2>Final Year Project</h2>
            <p>Develop a cutting-edge web application for your final year project, utilizing the latest technologies in web development.</p>

            <h3>Project Features:</h3>
            <ul>
                <li>Angular for Frontend</li>
                <li>PHP for Backend</li>
                <li>MySQL Database</li>
                <li>JWT Authentication</li>
                <!-- <li>Razorpay Payment Gateway</li> -->
                <li>Responsive UI with Bootstrap</li>
                <!-- <li>Secure API Endpoints</li> -->
            </ul>

            <a href="/contact" class="btn">Contact Us</a>
        </div>
    </div>
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
</html>
