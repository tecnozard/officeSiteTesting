<!DOCTYPE html>
<html lang="en" ng-app="adminApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
        }

        .bg-gradient-secondary {
            background: linear-gradient(135deg, #ff9966, #ff5e62);
        }

        .bg-gradient-info {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
        }

        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        h4 {
            font-size: 1.2rem;
        }
    </style>

</head>

<body ng-controller="AdminDashboardController">
@extends('components.admin.adminnavbar')
@section('content')
    <div class="content animate__animated animate__fadeIn">
        <h2 class="animate__animated animate__zoomIn text-center mb-4">Admin Dashboard</h2>

        <div class="greeting text-center fw-bold">@{{ greetingMessage }}</div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card p-4 shadow-sm rounded border-0 bg-gradient-primary text-white animate__animated animate__fadeInUp">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-briefcase fa-2x me-3"></i>
                        <div>
                            <h4 class="mb-2">Total Career Applications</h4>
                            <p class="fs-3 fw-bold">@{{ careerCount }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 shadow-sm rounded border-0 bg-gradient-secondary text-white animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope fa-2x me-3"></i>
                        <div>
                            <h4 class="mb-2">Total Contact Form </h4>
                            <p class="fs-3 fw-bold">@{{ contactCount }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card p-4 shadow-sm rounded border-0 bg-gradient-info text-white animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-user-graduate fa-2x me-3"></i>
                        <div>
                            <h4 class="mb-2">Total Internship Applications</h4>
                            <p class="fs-3 fw-bold">@{{ internshipCount }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    <script>
        var app = angular.module('adminApp', []);
        app.controller('AdminDashboardController', function($scope, $http) {
            $scope.careerCount = 0;
            $scope.contactCount = 0;
            $scope.internshipCount = 0;
            $scope.greetingMessage = "Loading...";

            $scope.loadDashboardCounts = function() {
                $http.get('/api/admin/dashboard')
                    .then(function(response) {
                        $scope.careerCount = response.data.career_count;
                        $scope.contactCount = response.data.contact_count;
                        $scope.internshipCount = response.data.internship_count;
                        $scope.greetingMessage = response.data.greeting;
                    }, function(error) {
                        console.error("Error fetching dashboard data: ", error);
                    });
            };
            $scope.loadDashboardCounts();
        });
    </script>
</body>

</html>
