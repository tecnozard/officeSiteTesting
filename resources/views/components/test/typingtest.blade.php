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
    <title>Data Entry Page</title>
    <style>
         body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            padding-top: 60px;
        }
        .typing-test-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;

        }
        .word-box {
            padding: 15px;
            margin-bottom: 20px;
            background: #e9ecef;
            border-radius: 8px;
            text-align: justify;
            font-size: 18px;
            line-height: 1.6;
        }
        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 2px solid #ced4da;
            border-radius: 5px;
            outline: none;
        }
        input[type="text"]:focus {
            border-color: #007bff;
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        @media (max-width: 576px) {
            .typing-test-container {
                padding: 20px;
            }
            .word-box {
                font-size: 16px;
            }
            .stats {
                flex-direction: column;
                text-align: center;
            }
        }
        @media (max-width: 1024px) {
    .typing-test-container {
        display: none;
    }

    .restricted-message {
        display: block;
        text-align: center;
        margin: 20% auto;
        font-size: 20px;
        font-weight: bold;
        color: red;
    }
}

@media (min-width: 1025px) {
    .restricted-message {
        display: none;
    }
}


    </style>
</head>
<body class="index-page" ng-app="TypingTestApp" ng-controller="TypingTestController">
@include('components.navbar')

<!-- Bootstrap Modal for Pop-up Message -->
<div class="modal fade" id="typingTestModal" tabindex="-1" aria-labelledby="typingTestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="typingTestModalLabel">Typing Test Instructions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>🕒 <strong>You have 60 seconds</strong> to type at least <strong>30 words</strong> with more than <strong>85% accuracy</strong>.</p>
        <p>🎯 <strong>Your result will be automatically sent</strong> once you complete the test.</p>
        <p>⌛ <strong>The timer starts as soon as you begin typing.</strong></p>
        <p>✨ <strong>All the best!</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Got it!</button>
      </div>
    </div>
  </div>
</div>

<div class="restricted-message">
    🚫 This test is only available on laptops.
</div>

<div class="container">
        <div class="typing-test-container">
            <h2>Typing Speed Test</h2>
            <p><strong>Attender:</strong> {{ $career->name }}</p> <!-- Display Attender Name -->
            <p ><strong>Attender:</strong> <span id="attender">{{ $career->id }}</span></p>




            <p>Type the paragraph below as fast and accurately as you can:</p>

            <div class="word-box">
                <p>@{{ currentWords }}</p>
            </div>

            <input type="text" ng-model="typedText" ng-keydown="startTimer()" ng-keyup="checkWord()" placeholder="Start typing here..." autofocus />

            <div class="stats">

                <p>⏳ Time Left: <strong>@{{ timeLeft }}</strong> sec</p>
                <p>📝 Words Typed: <strong>@{{ wordCount }}</strong></p>
                <p>🎯 Accuracy: <strong>@{{ accuracy }}%</strong></p>
            </div>

            <div ng-if="testCompleted">
                <h3 class="mt-3">@{{ message }}</h3>
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    document.addEventListener("copy", function (e) {
        e.preventDefault();

    });

    document.addEventListener("cut", function (e) {
        e.preventDefault();

    });

    document.addEventListener("paste", function (e) {
        e.preventDefault();

    });
});
document.addEventListener("contextmenu", function (e) {
    e.preventDefault();

});

  </script>
  <script>
  document.addEventListener("DOMContentLoaded", function () {
    var myModal = new bootstrap.Modal(document.getElementById("typingTestModal"));
    myModal.show();
  });
</script>
<script>
    // Disable page refresh using F5, Ctrl+R, and Ctrl+Shift+R
    document.addEventListener("keydown", function (event) {
        if (event.key === "F5" ||
            (event.ctrlKey && event.key === "r") ||
            (event.ctrlKey && event.shiftKey && event.key === "R")) {
            event.preventDefault();

        }
    });

    // Prevent refresh using browser navigation (back/forward button or closing tab)
    window.addEventListener("beforeunload", function (event) {
        event.preventDefault();

    });
</script>



</body>
</html>
