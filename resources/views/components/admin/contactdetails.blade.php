<!DOCTYPE html>
<html lang="en" ng-app="contactApp">
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
    <title>Contact Submissions</title>

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

            margin-left: 90px !important;
        }

        h2 {
            text-align: center;
            font-weight: bold;
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
            width: 100%;
            border-collapse: collapse;
            background: white;
            font-size: 12px;
        }

        th {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            font-size: 1.1rem;
            padding: 12px;
        }

        tbody tr {
            transition: all 0.3s ease-in-out;
        }

        tbody tr:hover {
            background: rgba(0, 0, 255, 0.1);
            transform: scale(1.02);
        }

        td {
            padding: 10px;
            word-break: break-word;
        }
    </style>
</head>
<body ng-controller="ContactController">
    @extends('components.admin.adminnavbar')

    @section('content')
    <div class="container">
        <h2 class="animate__animated animate__fadeInDown">Contact Submissions</h2>

        <div class="table-container animate__animated animate__fadeInUp">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="contact in contacts">
                        <td>@{{ contact.id }}</td>
                        <td>@{{ contact.name }}</td>
                        <td>@{{ contact.email }}</td>
                        <td>@{{ contact.subject }}</td>
                        <td>@{{ contact.message }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endsection

    <script>
        var app = angular.module('contactApp', []);

        app.controller('ContactController', function($scope, $http) {
            $http.get('/api/contacts')
                .then(function(response) {
                    $scope.contacts = response.data;
                })
                .catch(function(error) {
                    console.error('Error fetching contact data:', error);
                });
        });
    </script>

</body>
</html>
