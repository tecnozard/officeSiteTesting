<!DOCTYPE html>
<html lang="en" ng-app="internshipApp">

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
        .custom-input {
            border-radius: 10px;
            padding: 10px;
            border: 2px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .custom-input:focus {
            border-color: #3f51b5;
            outline: none;
        }

        .custom-radio {
            margin-right: 10px;
        }

        .custom-checkbox {
            margin-right: 10px;
        }

        .custom-input[type="file"] {
            background-color: #f4f7fc;
            border: 1px solid #ccc;
        }

        .custom-input[type="file"]:hover {
            border-color: #3f51b5;
        }
    </style>




</head>

<body class="index-page" ng-controller="InternshipController">
    @include('components.navbar')

    <div class="container mt-5" style="padding-top: 60px;">
        <div class="card p-5 shadow-xl rounded-lg" style="max-width: 750px; margin: auto; background-color: #f9f9f9; border: none;">
            <h3 class="text-center mb-5 text-dark" style="font-family: 'Montserrat', sans-serif; font-weight: 700; color: #4A90E2;">
                Internship Registration Form
            </h3>
            <form id="internshipForm" name="internshipForm" ng-submit="submitInternshipForm()">

                <!-- Personal Information -->
                <h5 class="text-info mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 600;">1. Personal Information</h5>
                <div class="form-group mb-3">
                    <label class="text-muted" for="fullName">Full Name</label>
                    <input type="text" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.full_name" placeholder="First Name Last Name" required>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="dob">Date of Birth</label>
                    <input type="date" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.dob" required>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="gender">Gender</label>
                    <select class="form-control border-0 shadow-sm rounded-3" ng-model="intern.gender" required>
                        <option value="">Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="email">Email Address</label>
                    <input type="email" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.email" placeholder="Enter your email" required>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="phone">Phone Number (WhatsApp Preferred)</label>
                    <input type="tel" class="form-control border-0 shadow-sm rounded-3"
                        ng-model="intern.phone"
                        placeholder="Enter your phone number"
                        maxlength="10"
                        pattern="\d{10}"
                        required
                        oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)">
                </div>

                <div class="form-group mb-3">
                    <label class="text-muted" for="altPhone">Alternative Phone Number (Optional)</label>
                    <input type="tel" class="form-control border-0 shadow-sm rounded-3"
                        ng-model="intern.alt_phone"
                        placeholder="Enter an alternative phone number"
                        maxlength="10"
                        pattern="\d{10}"
                        oninput="this.value = this.value.replace(/\D/g, '').slice(0, 10)">
                </div>

                <div class="form-group mb-3">
                    <label class="text-muted" for="currentAddress">Current Address</label>
                    <textarea class="form-control border-0 shadow-sm rounded-3" ng-model="intern.current_address" placeholder="Enter your current address" required></textarea>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="permanentAddress">Permanent Address</label>
                    <textarea class="form-control border-0 shadow-sm rounded-3" ng-model="intern.permanent_address" placeholder="Enter your permanent address"></textarea>
                </div>

                <!-- Educational Details -->
                <h5 class="text-info mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 600;">2. Educational Details</h5>
                <div class="form-group mb-3">
                    <label class="text-muted" for="college">College/University Name</label>
                    <input type="text" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.college" required>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="degree">Degree & Major</label>
                    <input type="text" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.degree" placeholder="e.g., B.Tech in Computer Science" required>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="year">Year of Study</label>
                    <select class="form-control border-0 shadow-sm rounded-3" ng-model="intern.year" required>
                        <option>1st Year</option>
                        <option>2nd Year</option>
                        <option>3rd Year</option>
                        <option>4th Year</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="graduationYear">Expected Graduation Year</label>
                    <input type="number" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.graduation_year" required>
                </div>

                <!-- Internship Preferences -->
                <h5 class="text-info mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 600;">3. Internship Preferences</h5>
                <label class="text-muted">Preferred Internship Type</label>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="internshipType" ng-model="intern.internship_type" value="Basic" required>
                        <label class="form-check-label">Basic (1 Month) - ₹1,499</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="internshipType" ng-model="intern.internship_type" value="Advanced">
                        <label class="form-check-label">Advanced (3 Months) - ₹4,999</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="internshipType" ng-model="intern.internship_type" value="Pro">
                        <label class="form-check-label">Pro (3-6 Months, Live Project) - ₹9,999</label>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="startDate">Start Date Preference</label>
                    <input type="date" class="form-control border-0 shadow-sm rounded-3" ng-model="intern.start_date" required>
                </div>
                <div class="form-group mb-3">
                    <label class="text-muted" for="experience">Prior Experience in AngularJS & Laravel PHP?</label>
                    <select class="form-control border-0 shadow-sm rounded-3" ng-model="intern.experience" required>
                        <option>Yes</option>
                        <option>No</option>
                    </select>
                </div>

                <!-- Payment & Documents -->
                <div class="form-group mb-3">
                    <label class="text-muted" for="paymentProof">Payment Confirmation Upload (PNG, JPG, JPEG, Max 1MB)</label>
                    <input type="file" id="paymentProof" class="form-control border-0 shadow-sm rounded-3" accept="image/png, image/jpg, image/jpeg" required>
                    <small id="paymentError" class="text-danger"></small>
                </div>

                <!-- Resume Upload -->
                <div class="form-group mb-3">
                    <label class="text-muted" for="resume">Resume Upload (PDF, Max 2MB)</label>
                    <input type="file" id="resume" class="form-control border-0 shadow-sm rounded-3" accept="application/pdf" required>
                    <small id="resumeError" class="text-danger"></small>
                </div>

                <!-- ID Proof Upload -->
                <div class="form-group mb-3">
                    <label class="text-muted" for="idProof">ID Proof Upload (Aadhar/PAN/College ID - PNG, JPG, JPEG, PDF, Max 2MB)</label>
                    <input type="file" id="idProof" class="form-control border-0 shadow-sm rounded-3" accept="image/png, image/jpeg, image/jpg, application/pdf" required>
                    <small id="idError" class="text-danger"></small>
                </div>

                <!-- Terms & Conditions -->
                <h5 class="text-info mb-4" style="font-family: 'Poppins', sans-serif; font-size: 1.1rem; font-weight: 600;">5. Terms & Conditions Agreement</h5>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I confirm that all details provided are true and correct.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I agree to the terms and conditions of the internship program.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">I understand that the internship fee is non-refundable.</label>
                </div>

                <!-- Submit Button -->
                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary shadow-sm rounded-3">Submit Application</button>
                </div>

            </form>
            <p ng-show="successMessage" style="color: green;">@{{ successMessage }}</p>
        </div>
    </div>








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
