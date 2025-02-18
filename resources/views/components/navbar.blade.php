
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="/" class="logo d-flex align-items-center me-auto">

        <img src="{{ asset('img/Tecnozard v1.png') }}" style="width: 200px; height: 100px;" alt="">

      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home<br></a></li>
          <!-- <li><a href="#about">About</a></li> -->

          <li class="dropdown"><a ><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
             <ul>

              <li class="dropdown"><a ><span>IT SERVICES</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ route('webapplicationpage') }}">Web Application </a></li>
                  <li><a href="{{ route('digitalmarketing') }}">Digital Marketing</a></li>
                  <li><a href="{{ route('internshipdetails') }}">Internship Training</a></li>
                  <li><a href="{{ route('project') }}">Final Year Project</a></li>
                  <li><a >Cloud Computing <span class="coming-soon">Coming Soon</span></a></li>
                  <li><a >Software Development <span class="coming-soon">Coming Soon</span></a></li>
                  <li><a >AI Solutions <span class="coming-soon">Coming Soon</span></a></li>
                </ul>
              </li>

              <li class="dropdown"><a ><span>NON-IT SERVICES</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ route('data-entry') }}" >Data Entry</a></li>
                  <li><a >Human Resources <span class="coming-soon">Coming Soon</span></a></li>
                  <!-- <li><a href="#">Customer Support</a></li> -->


                </ul>
              </li>

            </ul>
          </li>

          <li><a href="{{ route('careerspage') }}">Careers</a></li>
          <li><a href="{{ route('contactpage') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>



    </div>
  </header>

