
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="" class="logo d-flex align-items-center me-auto">

        <img src="{{ asset('img/Tecnozard v1.png') }}" style="width: 200px; height: 100px;" alt="">

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
          <!-- <li><a href="#about">About</a></li> -->
          <!-- <li><a  ng-click="teampage()" href="/teams">Team</a></li> -->
          <li class="dropdown"><a href=""><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
             <ul>

              <li class="dropdown"><a href=""><span>IT SERVICES</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="/web-application">Web Application </a></li>
                  <li><a href="/digital_marketing">Digital Marketing</a></li>
                  <li><a href="/internshipdetials">Internship Training</a></li>
                  <li><a href="/project">Final Year Project</a></li>
                  <li><a href="">Cloud Computing <span class="coming-soon">Coming Soon</span></a></li>
                  <li><a href="">Software Development <span class="coming-soon">Coming Soon</span></a></li>
                  <li><a href="">AI Solutions <span class="coming-soon">Coming Soon</span></a></li>
                </ul>
              </li>

              <li class="dropdown"><a href=""><span>NON-IT SERVICES</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="">Data Entry</a></li>
                  <li><a href="">Human Resources <span class="coming-soon">Coming Soon</span></a></li>
                  <!-- <li><a href="#">Customer Support</a></li> -->


                </ul>
              </li>

            </ul>
          </li>

          <li><a href="/careerspage">careers</a></li>
          <li><a href="/contact">contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>



    </div>
  </header>
  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h3 data-aos="fade-up">"Transforming Your Future with <b> IT</b> & <b>Non-IT</b> Solutions"</h3>
            <p data-aos="fade-up" data-aos-delay="100">"Whether it's harnessing the power of technology or optimizing your non-technical operations, we provide a diverse range of services that meet all your business needs."</p>

          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="{{ asset('img/hero-img.png') }}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section>
    <!-- /Hero Section -->
    <div ng-view></div>
