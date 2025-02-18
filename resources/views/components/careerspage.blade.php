<head>
    <!DOCTYPE html>
    <html lang="en" ng-app="JobApp">

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


        <style>
            /* Job Card Styling */
.job-card {
    border-radius: 12px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
    overflow: hidden;
    background: #fff;
}

.job-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
}

/* Image Styling */
.job-image img {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    height: 300px;
    object-fit: cover;
}

/* Category Badge */
.category-badge {
    display: inline-block;
    padding: 5px 12px;
    font-size: 14px;
    font-weight: bold;
    border-radius: 5px;
    color: black;
}

/* Category Colors */
/* .filter-it { background: #007bff; } IT Jobs - Blue */
/* .filter-non-it { background: #28a745; } Non-IT Jobs - Green */

/* Apply Button */
.apply-btn {
    width: 100%;
    border-radius: 8px;
    transition: 0.3s;
}

.apply-btn:hover {
    background-color: #0056b3;
}

        </style>

    </head>

<body class="index-page" ng-controller="JobController">
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
    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
        <div class="col-lg-4 col-md-6 internship-item isotope-item"
             ng-class="formatCategory(job.category)"
             ng-repeat="job in jobs">

            <div class="card job-card">
                <div class="job-image">
                    <img ng-src="@{{ '/storage/' + job.photo }}" class="card-img-top img-fluid" alt="@{{ job.title }}">
                </div>

                <div class="card-body text-center">
                    <h5 class="card-title">@{{ job.title }}</h5>

                    <span class="badge category-badge" ng-class="formatCategory(job.category)">
                        @{{ job.category }}
                    </span>

                    <a ng-href="@{{ job.title.toLowerCase() === 'internship' ? '/internshipdetails' : '/career' }}"
                       class="btn btn-primary mt-3 apply-btn">
                        <i class="bi bi-link-45deg"></i> Apply Now
                    </a>
                </div>
            </div>

        </div>
    </div><!-- End internship Container -->
</div>


    </section><!-- /internship Section -->




    @include('components.footer')




    <script>
        var app = angular.module('JobApp', []);

        app.controller('JobController', function ($scope, $http) {
    $http.get('/api/jobs').then(function (response) {
        console.log('API Response:', response.data);
        $scope.jobs = response.data;
    }, function (error) {
        console.error('Error fetching jobs:', error);
    });

    // Function to format category for CSS class
    $scope.formatCategory = function (category) {
        if (!category) return ''; // Handle undefined category
        return 'filter-' + category.replace(/\s+/g, '').toLowerCase();
    };
});

    </script>
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
