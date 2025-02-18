<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="/" class="d-flex align-items-center">
                    <span class="sitename">TECNOZARD</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>No-25, Kamalam Nagar,</p>
                    <p>Thirupapuliyur,</p>
                    <p>Cuddalore, Pincode:607002</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+919600641464</span></p>
                    <p><strong>Email:</strong> <span><a href="mailto:contact@tecnozard.com">contact@tecnozard.com</a></span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                    <!-- <li><i class="bi bi-chevron-right"></i> <a href="">About us</a></li> -->
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('contactpage') }}">Contact</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('careerspage') }}">Career</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('termspage') }}">Terms and Condition</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('privacypage') }}">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('webapplicationpage') }}"> Web Development</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('project') }}"> Final Year Project</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('digitalmarketing') }}"> Digital Marketing</a></li>
                    <li><i class="bi bi-chevron-right"></i><a href="{{ route('internshipdetails') }}"> Internship</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Follow Us</h4>
                <p>Stay in the loop with us. Follow us for exclusive insights!</p>
                <div class="social-links d-flex">
                    <a href="https://x.com/tecnozardpvtltd"><i class="bi bi-twitter-x"></i></a>
                    <a href="https://www.facebook.com/people/Tecnozard-Private-Limited/61568089974772/"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/tecnozard_pvt_ltd"><i class="bi bi-instagram"></i></a>
                    <a href="https://www.linkedin.com/company/tecnozard-private-limited"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.youtube.com/@TecnoZardPrivateLimited" target="_blank"><i class="bi bi-youtube"></i></a>

                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-2">
    <img src="{{ asset('img/Tecnozard v1.png') }}" style="width: 100px; height: 50px;" alt="">
    <p>© <span id="year"></span> <span>Copyright</span> <strong class="px-1 sitename">TecnoZard</strong> <span>All Rights Reserved</span></p>

<script>
  // Get the current year dynamically
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

    </div>
</footer>
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

