<!DOCTYPE html>
<html lang="en" ng-app="adminApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular-route.min.js"></script>
    <style>
        body { font-family: Arial, sans-serif; }
        .login-container { width: 300px; margin: 100px auto; padding: 20px; border: 1px solid #ddd; }
        input { width: 100%; padding: 8px; margin: 10px 0; }
        button { width: 100%; padding: 8px; background: blue; color: white; border: none; }
        .error { color: red; }
    </style>
</head>
<body ng-controller="LoginController">

    <div class="login-container">
        <h2>Admin Login</h2>
        <form ng-submit="login()">
            <input type="email" ng-model="admin.email" placeholder="Email" required>
            <input type="password" ng-model="admin.password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

    </div>

    <script>
        var app = angular.module('adminApp', []);

        app.controller("LoginController", function ($scope, $http) {
    $scope.login = function () {
        var data = {
            email: "admin@example.com",  // Hardcoded email
            password: "password123"     // Hardcoded password
        };

        $http.post("http://tecnozard.test/api/admin/login", data, {
            headers: {
                "Content-Type": "application/json"
            }
        })
        .then(function (response) {
            console.log("Login Successful:", response.data);
            window.location.href = "/admindashbord";
        })
        .catch(function (error) {
            console.error("Login Failed:", error);
        });
    };
});

    </script>

</body>
</html>
