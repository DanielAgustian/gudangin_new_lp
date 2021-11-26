<div class="navbar__wrapper">
    <div class="container">
        <div class="landing_navbar">
            <div class="division">
                <div class="landing_nav_logo">
                    <a href="{{ route('homePage') }}">
                        <img src="{{ asset('images/navbar_logo.svg') }}" alt="logo">
                    </a>
                </div>
                <div class="landing_nav_menu">
                    <ul>
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
</div>
