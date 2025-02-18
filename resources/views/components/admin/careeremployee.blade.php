<!DOCTYPE html>
<html lang="en" ng-app="careerApp">
<head>
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career Applications</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Animate.css for animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-size: 14px;
        }

        .container {
            margin-top: px;
            margin-left: 90px !important;
        }

        h2 {
            font-weight: bold;
            text-align: center;
            color: #333;
            animation: fadeInDown 1s ease-in-out;
        }

        .table-container {
            overflow-x: auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background: white;
            font-size: 12px;
        }

        th {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            font-size: 1.1rem;
            padding: 12px;
            text-align: center;
        }

        tbody tr {
            transition: all 0.3s ease-in-out;
            text-align: center;
        }

        tbody tr:hover {
            background: rgba(0, 0, 255, 0.1);
            transform: scale(1.02);
        }

        .btn-download {
            background: linear-gradient(135deg, #ff9966, #ff5e62);
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease-in-out;
        }

        .btn-download:hover {
            background: linear-gradient(135deg, #ff5e62, #ff9966);
            transform: scale(1.1);
        }
    </style>
</head>
<body ng-controller="CareerController">

@extends('components.admin.adminnavbar')
@section('content')

    <div class="container">
        <h2 class="animate__animated animate__fadeInDown">Career Applications</h2>

        <div class="table-container animate__animated animate__fadeInUp">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Experience</th>
                        <th>Resume</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="career in careers">
                        <td>@{{ career.id }}</td>
                        <td>@{{ career.name }}</td>
                        <td>@{{ career.email }}</td>
                        <td>@{{ career.position }}</td>
                        <td>@{{ career.experience }} years</td>
                        <td>
                            <a ng-href="@{{ career.resume }}" target="_blank" class="btn-download">
                                <i class="fas fa-download"></i> Download
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    @endsection

    <script>
        var app = angular.module('careerApp', []);

        app.controller('CareerController', function($scope, $http) {
            $http.get('/api/admin/careers')
                .then(function(response) {
                    $scope.careers = response.data;
                })
                .catch(function(error) {
                    console.error('Error fetching career data:', error);
                });
        });
    </script>

</body>
</html>
