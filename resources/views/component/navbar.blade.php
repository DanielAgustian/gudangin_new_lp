<!-- <div class="navbar__wrapper">
    <div class="container">
        <div class="landing_navbar">
            <div class="division">
                <div class="landing_nav_logo">
                    <a href="{{ route('homePage') }}">
                        <img src="{{ asset('images/navbar_logo.svg') }}" alt="logo">
                    </a>
                </div>
                <div class="landing_nav_menu">
                    <ul class="{{set_hide_sidebar('landingPage')}}">
                        <li>
                            <a href="{{ route('fiturPage') }}" class="">Kenapa Gudangin? <i
                                    class="fas fa-chevron-down"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('faqPage') }}" class="">Solusi <i
                                    class="fas fa-chevron-down"></i></a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('pricingPage') }}"
                                class="{{ set_active_sidebar('pricingPage') }}">Harga</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            {{-- <div class="landing_nav_button">
                <button class="btn landing_getstart">Coba Gratis</button>
            </div> --}}
        </div>
    </div>
</div> -->
<nav class="navbar navbar-expand-lg navbar__wrapper navbar-light bg-white ">
  <div class="container d-flex justify-content-between">
    <div class="landing_nav_logo">
        <a href="{{ route('homePage') }}">
            <img src="{{ asset('images/navbar_logo.svg') }}" alt="logo">
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class=" nav-item">
            <a href="{{ route('homePage') }}" class="nav-link {{set_active_sidebar('homePage')}}">Home</a>
        </li>
        <li class=" nav-item">
            <a href="{{ route('aboutUsPage') }}" class="nav-link {{set_active_sidebar('aboutUsPage')}}">Tentang Kami</a>
        </li>
        <li class=" nav-item">
            <a href="{{ route('solusiPage') }}" class="nav-link {{set_active_sidebar('solusiPage')}}">Solusi</a>
        </li>
        <li class=" nav-item">
            <a href="{{ route('partnerPage') }}" class="nav-link {{set_active_sidebar('partnerPage')}}">Partner</a>
        </li>
        <li class=" nav-item">
            <a href="{{ route('contactUsPage') }}" class="nav-link {{set_active_sidebar('contactUsPage')}}">Hubungi Kami</a>
        </li>


     </ul>
    </div>
  </div>

</nav>
<!-- <nav class="navbar  navbar-expand-lg navbar-light bg-white">
  <div class="container-fluid">
    <div class="landing_nav_logo">
        <a href="{{ route('homePage') }}">
            <img src="{{ asset('images/navbar_logo.svg') }}" alt="logo">
        </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class=" nav-item">
            <a href="{{ route('homePage') }}" class="nav-link">Home</a>
        </li>
        <li class=" nav-item">
            <a href="{{ route('aboutUsPage') }}" class="nav-link">Tentang Kami</a>
        </li>
        <li class=" nav-item">
            <a href="" class="nav-link">Solusi</a>
        </li>
        <li class=" nav-item">
            <a href="{{ route('partnerPage') }}" class="nav-link">Partner</a>
        </li>
        <li class=" nav-item">
            <a href="" class="nav-link">Hubungi Kami</a>
        </li>


     </ul>
    </div>
  </div>
</nav> -->
<!-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown link
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</li> -->
 <!-- <div class="navbar__wrapper">
    <div class="container">
        <div class="landing_navbar">
            <div class="division justify-content-between ">
                <div class="landing_nav_logo">
                    <a href="{{ route('homePage') }}">
                        <img src="{{ asset('images/navbar_logo.svg') }}" alt="logo">
                    </a>
                </div>
                <div class="landing_nav_menu">
                    <ul class="{{set_hide_sidebar('landingPage')}}">
                      <li>
                          <a href="{{ route('homePage') }}" class="">Home</a>
                      </li>
                      <li>
                          <a href="{{ route('aboutUsPage') }}" class="">Tentang Kami</a>
                      </li>
                      <li>
                          <a href="" class="">Solusi</a>
                      </li>
                      <li>
                          <a href="{{ route('partnerPage') }}" class="">Partner</a>
                      </li>
                      <li>
                          <a href="" class="">Hubungi Kami</a>
                      </li>

                </div>
                <div class="landing-btn d-none">

                </div>
            </div>
            {{-- <div class="landing_nav_button">
                <button class="btn landing_getstart">Coba Gratis</button>
            </div> --}}
        </div>
    </div>
</div> -->
