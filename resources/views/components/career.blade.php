<!DOCTYPE html>
<html lang="en" ng-app="careerApp">

<head>
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

<body class="index-page" ng-controller="CareerController">
    @include('components.navbar')

    <div class="container mt-5" style="padding-top: 40px;">
        <div class="card p-4 shadow-lg" style="max-width: 600px; width: 100%; margin: auto; border-radius: 15px;">
            <h3 class="text-center text-dark mb-4" style="font-family: 'Roboto', sans-serif; font-weight: 700;">Career Application</h3>
            <form id="careerForm" ng-submit="submitApplication()">
                <!-- Name -->
                <div class="mb-4">
                    <label class="form-label text-dark" style="font-weight: 600;">Full Name</label>
                    <input type="text" class="form-control p-3 border-0 rounded-pill" ng-model="career.name" placeholder="Enter your full name" required>
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label class="form-label text-dark" style="font-weight: 600;">Email Address</label>
                    <input type="email" class="form-control p-3 border-0 rounded-pill" ng-model="career.email" placeholder="Enter your email" required>
                </div>

                <!-- Position -->
                <div class="mb-4">
                    <label class="form-label text-dark" style="font-weight: 600;">Position Applied For</label>
                    <input type="text" class="form-control p-3 border-0 rounded-pill" ng-model="career.position" placeholder="Enter job position" required>
                </div>

                <!-- Experience -->
                <div class="mb-4">
                    <label class="form-label text-dark" style="font-weight: 600;">Years of Experience</label>
                    <input type="number" class="form-control p-3 border-0 rounded-pill" ng-model="career.experience" placeholder="Enter years of experience" required>
                </div>

                <!-- Resume Upload -->
                <div class="mb-4">
                    <label class="form-label text-dark" style="font-weight: 600;">Upload Resume (PDF, Max 2MB)</label>
                    <input type="file" id="careerResume" class="form-control p-3 border-0 rounded-pill" accept="application/pdf" required>
                    <small id="careerResumeError" class="text-danger"></small>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-gradient p-3 rounded-pill" style="background: linear-gradient(45deg, #6a11cb, #2575fc); border: none; color: white; font-weight: 600; transition: background 0.3s ease;">
                        <i class="bi bi-send icon"></i> Submit Application
                    </button>
                </div>

            </form>
            <p ng-show="successMessage" style="color: green;">@{{ successMessage }}</p>
        </div>
    </div>

    <!-- Add Custom Styles (if needed) -->
    <style>
        .btn-gradient:hover {
            background: linear-gradient(45deg, #2575fc, #6a11cb);
        }

        .form-control:focus {
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.25);
            border: 1px solid #2575fc;
        }

        .card {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
        }
    </style>



    <!-- Bootstrap 5 JS and Icons (for button icon) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>


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
