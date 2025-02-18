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

app.controller('CareerController', function ($scope, $http,$timeout) {
    $scope.successMessage = "";
    $scope.career = {};
    $scope.isSubmitting = false; // New variable to track button state

    // Function to capture the file input
    $scope.uploadResume = function (element) {
        const file = element.files[0];
        if (file) {
            const maxSize = 2 * 1024 * 1024; // 2MB in bytes
            if (file.size > maxSize) {
                document.getElementById('careerResumeError').textContent = "File size exceeds 2MB. Please upload a smaller file.";
                element.value = ""; // Clear file input
                $scope.career.resume = null;
            } else {
                document.getElementById('careerResumeError').textContent = "";
                $scope.career.resume = file;
            }
        }
        $scope.$apply(); // Apply changes to UI
    };

    $scope.submitApplication = function () {

        if (!$scope.career.resume) {
            alert('Please upload a resume before submitting.');
            return;
        }
        $scope.isSubmitting = true; // Disable button on click

        var formData = new FormData();
        formData.append('name', $scope.career.name || '');
        formData.append('email', $scope.career.email || '');
        formData.append('position', $scope.career.position || '');
        formData.append('experience', $scope.career.experience !== undefined && $scope.career.experience !== null ? $scope.career.experience : 0);
        formData.append('resume', $scope.career.resume);

        console.log('Submitting form:', Object.fromEntries(formData)); // Debugging output

        $http.post('/api/career/store', formData, {
            transformRequest: angular.identity,
            headers: { 'Content-Type': undefined }
        }).then(function (response) {
            $scope.successMessage = "Form submitted successfully!";


            // Reset the form
            $scope.career = {}; // Clear form
            document.getElementById('careerForm').reset(); // Reset HTML form

            // Hide the message after 3 seconds
            setTimeout(() => {
                $scope.successMessage = "";
                $scope.$apply(); // Apply changes to UI
            }, 3000);
            $scope.isSubmitting = false; // Re-enable button
        }).catch(function (error) {
            alert('Error submitting application');
            console.error('Submission Error:', error);
            $scope.isSubmitting = false; // Re-enable button
        });
    };
});


//date formate for internship



var app = angular.module('internshipApp', []);
app.controller('InternshipController', function ($scope, $http, $timeout) {
    $scope.isSubmitting = false;
    $scope.successMessage = ""; // Initialize success message
    $scope.intern = {}; // Initialize form dat
    $scope.submitInternshipForm = function () {
        if ($scope.internshipForm.$valid) {
            $scope.isSubmitting = true;
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
                formData.append('payment_proof', paymentProofFile);
                formData.append('id_proof', id_proofFile);
            } else {
                alert('Files are required.');
                return;
            }
            // Send request
            $http.post('/api/internships/create', formData, {
                headers: { 'Content-Type': undefined },
            }).then(function (response) {
                $scope.isSubmitting = false;
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
                $scope.isSubmitting = false;
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


//nav bar
document.addEventListener("DOMContentLoaded", function () {
    // Get the current page URL path (without query params)
    let currentPath = new URL(window.location.href).pathname;

    // Select all nav links
    let navLinks = document.querySelectorAll("#navmenu ul li a");

    // Remove 'active' class from all links before applying
    navLinks.forEach(link => link.classList.remove("active"));

    let isServicePage = false; // Flag to check if any service page is active

    // Loop through links and set active class
    navLinks.forEach(link => {
        let linkPath = new URL(link.href, window.location.origin).pathname;

        if (linkPath === currentPath) {
            link.classList.add("active");

            // Check if the link is inside the Services dropdown
            if (link.closest(".dropdown")) {
                isServicePage = true;
            }
        }
    });

    // If any service page is active, highlight the Services menu
    if (isServicePage) {
        document.querySelector(".dropdown > a").classList.add("active");
    }
});





//speedtest
var app = angular.module("TypingTestApp", []);
app.controller("TypingTestController", function ($scope, $http, $interval) {
    $scope.career_id = parseInt(document.getElementById('attender').innerText, 10);
    $scope.typedText = "";
    $scope.currentWords = ""; // Ensure it's initialized
    $scope.wordCount = 0;
    $scope.correctWords = 0;
    $scope.totalWords = 0;
    $scope.timeLeft = 60;
    $scope.timerStarted = false;
    $scope.testCompleted = false;


    let timer;

    // Function to generate random words
    function generateParagraph() {
        const paragraphs = [
          "Typing is an essential skill in today's digital world. Whether you're writing emails, creating documents, or coding, the ability to type quickly and accurately can significantly improve productivity. Many people rely on typing tests to measure their speed and accuracy. Regular practice with meaningful paragraphs helps enhance muscle memory and reduce errors. It's important to focus on correct finger placement and avoid looking at the keyboard while typing. Developing good habits early can make a huge difference in long-term efficiency. A structured typing test provides users with real-world content, making the learning process more engaging and useful.",

          "Technology has transformed communication, making it faster and more accessible than ever. In the past, sending letters took days or even weeks, but now, emails and instant messages are delivered within seconds. Social media platforms allow people to stay connected regardless of distance. Businesses rely on technology to improve efficiency and reach a global audience. Online education has also gained popularity, enabling students to learn from anywhere in the world. However, the increasing dependence on digital communication has also raised concerns about privacy and security. It is essential to balance the benefits of technology with responsible usage.",

          "The internet is one of the greatest inventions of modern times. It has revolutionized the way people access information, conduct business, and communicate with others. Search engines provide instant answers to almost any question, making research more efficient. Online shopping has changed the retail industry, offering convenience and a vast selection of products. Streaming services allow users to watch movies, listen to music, and enjoy entertainment on demand. However, excessive internet usage can lead to distractions and reduced productivity. To make the most of the internet, users should practice moderation and focus on meaningful activities.",

          "Success is often the result of dedication, hard work, and perseverance. Many people face challenges on their journey to achieving their goals, but those who remain determined and adaptable are more likely to succeed. Learning from failures is a crucial part of personal growth. People who embrace challenges as opportunities for improvement often develop resilience and problem-solving skills. Setting clear goals and maintaining a positive mindset are essential strategies for success. Additionally, surrounding yourself with supportive and motivated individuals can help keep you inspired. No matter how difficult the journey may seem, persistence always leads to progress.",

          "Reading is a valuable habit that can enhance knowledge and improve cognitive skills. People who read regularly develop better vocabulary, comprehension, and critical thinking abilities. Books provide insights into different cultures, historical events, and scientific discoveries. Fiction allows readers to experience different perspectives and develop empathy. In today's fast-paced world, digital devices make reading more accessible through e-books and audiobooks. However, spending too much time on social media and entertainment apps can reduce reading habits. Setting aside dedicated time for reading each day can help cultivate a lifelong passion for learning and personal development."
        ];

        // Select a random paragraph
        $scope.currentWords = paragraphs[Math.floor(Math.random() * paragraphs.length)];
      }

      generateParagraph(); // Call the function when the page loads

    // Function to start the timer
    $scope.startTimer = function () {
      if (!$scope.timerStarted) {
        $scope.timerStarted = true;
        timer = $interval(function () {
          if ($scope.timeLeft > 0) {
            $scope.timeLeft--;
          } else {
            $scope.endTest();
            $interval.cancel(timer);
          }
        }, 1000);
      }
    };

    // Function to check word correctness
    $scope.checkWord = function () {
      let typedWords = $scope.typedText.trim().split(" ");
      let correct = 0;
      let total = typedWords.length;

      let generatedWordsArray = $scope.currentWords.split(" ");

      typedWords.forEach((word, index) => {
        if (word === generatedWordsArray[index]) {
          correct++;
        }
      });

      $scope.wordCount = total;
      $scope.correctWords = correct;
      $scope.totalWords = total;
      $scope.accuracy = total > 0 ? Math.round((correct / total) * 100) : 0;
    };

    // Function to end the test
    $scope.endTest = function () {
      $scope.testCompleted = true;
      if ($scope.wordCount >= 30 && $scope.accuracy >= 85) {
        $scope.message = "Team will contact you.";
        saveToDatabase(true);
        
      } else {
        $scope.message = "Test completed. Try again!";
        saveToDatabase(false);

      }
    };

    // Function to save test results
    function saveToDatabase(isSelected) {
      let data = {
        career_id: $scope.career_id,
        words_typed: $scope.wordCount,
        accuracy: $scope.accuracy,
        is_selected: isSelected ? 1 : 0,
      };

      $http.post("/api/save-typing-test", data)
        .then(function (response) {
          console.log("Data saved successfully:", response.data);
        })
        .catch(function (error) {
          console.error("Error saving data:", error);
        });
    }

  });
//disable right click

document.addEventListener("contextmenu", (event) => event.preventDefault());

document.addEventListener("keydown", (event) => {
    if (
        event.key === "F12" ||
        (event.ctrlKey && event.shiftKey && event.key === "I") ||
        (event.ctrlKey && event.shiftKey && event.key === "J") ||
        (event.ctrlKey && event.key === "U") ||
        (event.ctrlKey && event.key === "S") ||
        (event.ctrlKey && event.shiftKey && event.key === "C")
    ) {
        event.preventDefault();
    }

});













