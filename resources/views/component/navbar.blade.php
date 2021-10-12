<div class="navbar_wrapper">
    <div class="container">
        <div class="landing_navbar">
            <div class="division">
                <div class="landing_nav_side_btn">
                    <button id="btn_sidebar">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="landing_nav_logo">
                    <a href="">
                        <img src="{{ asset('images/navbar_logo.svg') }}" alt="logo">
                    </a>
                </div>
                <div class="landing_nav_menu">
                    <ul>
                        <li>
                            <a href="" class="">Kenapa Gudangin?</a>
                        </li>
                        <li>
                            <a href=""
                                class="
                                {{-- {{ set_active_landing_page('featuresPage') }} --}}
                                ">Solusi</a>
                        </li>
                        <li>
                            <a href="" class="">Harga</a>
                        </li>
    
                    </ul>
                </div>
            </div>

            
            <div class="landing_nav_button">
                <button class="btn landing_getstart">Coba Gratis</button>
            </div>
        </div>
    </div>
</div>

<div class="landing_sidebar_menu" id="sidebarMenu">
    <ul>
        <li>
            <a href="" class="">Kenapa Gudangin?</a>
        </li>
        <li>
            <a href=""
                class="
                            {{-- {{ set_active_landing_page('featuresPage') }} --}}
                            ">Solusi</a>
        </li>
        <li>
            <a href="" class="">Harga</a>
        </li>

    </ul>
</div>



@section('pageJS')
    <script src="{{ asset('plugin/marquee-scroll/dist/grouploop-1.0.0.min.js') }}"></script>
    <script>
        $('#grouploop-1').grouploop({
            // animation speed
            velocity: 1.5,
            // false = from left to right
            forward: true,
            // default selectors
            childNode: ".item",
            childWrapper: ".item-wrap",
            // enable pause on hover
            pauseOnHover: true,
            // stick the first item
            stickFirstItem: true,
            // callback
            complete: null
        });

        $('#grouploop-2').grouploop({
            // animation speed
            velocity: 1.5,
            // false = from left to right
            forward: false,
            // default selectors
            childNode: ".item",
            childWrapper: ".item-wrap",
            // enable pause on hover
            pauseOnHover: true,
            // stick the first item
            stickFirstItem: true,
            // callback
            complete: null
        });
    </script>
@endsection
