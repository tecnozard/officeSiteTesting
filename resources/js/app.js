import 'bootstrap';
/**
* Template Name: FlexStart
* Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
* Updated: Nov 01 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
    "use strict";

    /**
     * Apply .scrolled class to the body as the page is scrolled down
     */
    function toggleScrolled() {
      const selectBody = document.querySelector('body');
      const selectHeader = document.querySelector('#header');
      if (!selectHeader.classList.contains('scroll-up-sticky') && !selectHeader.classList.contains('sticky-top') && !selectHeader.classList.contains('fixed-top')) return;
      window.scrollY > 100 ? selectBody.classList.add('scrolled') : selectBody.classList.remove('scrolled');
    }

    document.addEventListener('scroll', toggleScrolled);
    window.addEventListener('load', toggleScrolled);

    /**
     * Mobile nav toggle
     */
    const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

    function mobileNavToogle() {
      document.querySelector('body').classList.toggle('mobile-nav-active');
      mobileNavToggleBtn.classList.toggle('bi-list');
      mobileNavToggleBtn.classList.toggle('bi-x');
    }
    if (mobileNavToggleBtn) {
      mobileNavToggleBtn.addEventListener('click', mobileNavToogle);
    }

    /**
     * Hide mobile nav on same-page/hash links
     */
    document.querySelectorAll('#navmenu a').forEach(navmenu => {
      navmenu.addEventListener('click', () => {
        if (document.querySelector('.mobile-nav-active')) {
          mobileNavToogle();
        }
      });

    });

    /**
     * Toggle mobile nav dropdowns
     */
    document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
      navmenu.addEventListener('click', function(e) {
        e.preventDefault();
        this.parentNode.classList.toggle('active');
        this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
        e.stopImmediatePropagation();
      });
    });

    /**
     * Scroll top button
     */
    let scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
      if (scrollTop) {
        window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
      }
    }
    scrollTop.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
    window.addEventListener('load', aosInit);

    /**
     * Initiate glightbox
     */
    const glightbox = GLightbox({
      selector: '.glightbox'
    });

    /**
     * Initiate Pure Counter
     */
    new PureCounter();

    /**
     * Frequently Asked Questions Toggle
     */
    document.querySelectorAll('.faq-item h3, .faq-item .faq-toggle').forEach((faqItem) => {
      faqItem.addEventListener('click', () => {
        faqItem.parentNode.classList.toggle('faq-active');
      });
    });

    /**
     * Init isotope layout and filters
     */
    document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
      let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
      let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
      let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

      let initIsotope;
      imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
        initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
          itemSelector: '.isotope-item',
          layoutMode: layout,
          filter: filter,
          sortBy: sort
        });
      });

      isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
        filters.addEventListener('click', function() {
          isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
          this.classList.add('filter-active');
          initIsotope.arrange({
            filter: this.getAttribute('data-filter')
          });
          if (typeof aosInit === 'function') {
            aosInit();
          }
        }, false);
      });

    });

    /**
     * Init swiper sliders
     */
    function initSwiper() {
      document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
        let config = JSON.parse(
          swiperElement.querySelector(".swiper-config").innerHTML.trim()
        );

        if (swiperElement.classList.contains("swiper-tab")) {
          initSwiperWithCustomPagination(swiperElement, config);
        } else {
          new Swiper(swiperElement, config);
        }
      });
    }

    window.addEventListener("load", initSwiper);

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     */
    window.addEventListener('load', function(e) {
      if (window.location.hash) {
        if (document.querySelector(window.location.hash)) {
          setTimeout(() => {
            let section = document.querySelector(window.location.hash);
            let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
            window.scrollTo({
              top: section.offsetTop - parseInt(scrollMarginTop),
              behavior: 'smooth'
            });
          }, 100);
        }
      }
    });

    /**
     * Navmenu Scrollspy
     */
    let navmenulinks = document.querySelectorAll('.navmenu a');

    function navmenuScrollspy() {
      navmenulinks.forEach(navmenulink => {
        if (!navmenulink.hash) return;
        let section = document.querySelector(navmenulink.hash);
        if (!section) return;
        let position = window.scrollY + 200;
        if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
          document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
          navmenulink.classList.add('active');
        } else {
          navmenulink.classList.remove('active');
        }
      })
    }
    window.addEventListener('load', navmenuScrollspy);
    document.addEventListener('scroll', navmenuScrollspy);

  })();

 document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("year").textContent = new Date().getFullYear();

  });


//cereer page code

var app = angular.module('careerApp', []);

// Directive to handle file input
app.directive('fileModel', ['$parse', function ($parse) {
    return {
        restrict: 'A',
        link: function (scope, element, attrs) {
            var model = $parse(attrs.fileModel);
            var modelSetter = model.assign;

            element.bind('change', function () {
                scope.$apply(function () {
                    modelSetter(scope, element[0].files[0]);
                });
            });
        }
    };
}]);

app.controller('CareerController', function ($scope, $http) {
    $scope.successMessage = ""; // Initialize success message
    $scope.career = {};

    $scope.submitApplication = function () {
        if (!$scope.career.resume) {
            alert('Please upload a resume before submitting.');
            return;
        }

        var formData = new FormData();
        formData.append('name', $scope.career.name || '');
        formData.append('email', $scope.career.email || '');
        formData.append('position', $scope.career.position || '');
        formData.append('experience', $scope.career.experience || '');
        formData.append('resume', $scope.career.resume);

        console.log('Submitting form:', Object.fromEntries(formData)); // Debugging output

        $http.post('/api/career/store', formData, {
            transformRequest: angular.identity,
            headers: { 'Content-Type': undefined }
        }).then(function (response) {
            $scope.successMessage = "Form submitted successfully!";
            
            // Reset the form
             // Reset model
            $scope.career = {}; // Clear form
            document.getElementById('careerForm').reset(); // Reset HTML form
            // Hide the message after 3 seconds
        setTimeout(() => {
            $scope.successMessage = "";
            $scope.$apply(); // Apply changes to UI
        }, 3000);
        }).catch(function (error) {
            alert('Error submitting application');
            console.error('Submission Error:', error);
        });
    };
});

//date formate for internship



var app = angular.module('internshipApp', []);

app.controller('InternshipController', function ($scope, $http) {
    $scope.successMessage = ""; // Initialize success message
    $scope.intern = {}; // Initialize form data

    $scope.submitInternshipForm = function () {
        if ($scope.internshipForm.$valid) {
            var formData = new FormData(); // ✅ Declare formData before using it

            // Function to format date to d-m-Y
            function formatDateToDMY(date) {
                if (!date) return '';
                const d = new Date(date);
                const day = String(d.getDate()).padStart(2, '0');
                const month = String(d.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                const year = d.getFullYear();
                return `${day}-${month}-${year}`;
            }

            // ✅ Convert and append properly formatted dates
            formData.append('dob', formatDateToDMY($scope.intern.dob));
            formData.append('start_date', formatDateToDMY($scope.intern.start_date));

            // Append other form fields
            formData.append('full_name', $scope.intern.full_name);
            formData.append('gender', $scope.intern.gender);
            formData.append('email', $scope.intern.email);
            formData.append('college', $scope.intern.college);
            formData.append('degree', $scope.intern.degree);
            formData.append('year', $scope.intern.year);
            formData.append('internship_type', $scope.intern.internship_type);
            formData.append('phone', $scope.intern.phone);
            formData.append('alt_phone', $scope.intern.alt_phone);
            formData.append('current_address', $scope.intern.current_address);
            formData.append('permanent_address', $scope.intern.permanent_address);
            formData.append('graduation_year', $scope.intern.graduation_year);
            formData.append('experience', $scope.intern.experience);

            // Check if files exist before appending them to formData
            var resumeFile = document.getElementById('resume')?.files[0];
            var paymentProofFile = document.getElementById('paymentProof')?.files[0];
            var id_proofFile = document.getElementById('idProof')?.files[0];

            if (resumeFile && paymentProofFile) {
                formData.append('resume', resumeFile);
                formData.append('paymentProof', paymentProofFile);
                formData.append('id_proof', id_proofFile);
            } else {
                alert('Files are required.');
                return;
            }



            // Send request
            $http.post('/api/internships/create', formData, {
                headers: { 'Content-Type': undefined },
            }).then(function (response) {
                $scope.successMessage = "Form submitted successfully!";
                alert('Form submitted successfully!');

                // Reset the form
              $scope.internship = {};  // Reset model
              document.getElementById('internshipForm').reset(); // Reset HTML form
               // Hide the message after 3 seconds
                setTimeout(() => {
                $scope.successMessage = "";
                $scope.$apply(); // Apply changes to UI
                }, 3000);
            }, function (error) {
                alert('Error submitting form.');

            });
        } else {
            alert('Please fill in all required fields.');
        }
    };
});





//admin login
var app = angular.module("adminApp", []);

app.controller("LoginController", function ($scope, $http) {
    $scope.admin = {};
    $scope.isLoading = false;
    $scope.errorMessage = "";

    $scope.login = function () {
        $scope.isLoading = true;
        $scope.errorMessage = "";

        $http.post("/api/admin/login", $scope.admin)
            .then(function (response) {
                alert("Login Successful");
                localStorage.setItem("adminToken", response.data.token);
                window.location.href = "/admindashbord";// Redirect to admin panel
            })
            .catch(function (error) {
                $scope.errorMessage = error.data.message;
            })
            .finally(function () {
                $scope.isLoading = false;
            });
    };
});





var app = angular.module('contactApp', []);

app.controller('ContactController', function ($scope, $http, $timeout) {
    $scope.contact = {};
    $scope.loading = false;
    $scope.successMessage = '';
    $scope.errorMessage = '';

    $scope.submitForm = function () {
        $scope.loading = true;
        $scope.successMessage = '';
        $scope.errorMessage = '';

        $http.post('/api/contact', $scope.contact)
            .then(function (response) {
                $scope.successMessage = "Your message has been sent. Thank you!";
                $scope.contact = {}; // Clear form fields

                // Hide success message after 3 seconds
                $timeout(function () {
                    $scope.successMessage = '';
                }, 3000);
            })
            .catch(function (error) {
                $scope.errorMessage = "Failed to send message. Please try again.";

                // Hide error message after 3 seconds
                $timeout(function () {
                    $scope.errorMessage = '';
                }, 3000);
            })
            .finally(function () {
                $scope.loading = false;
            });
    };
});


