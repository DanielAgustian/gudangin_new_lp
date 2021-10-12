<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lorem Ipsum">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Gudangin</title>
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}"> --}}

    <!-- Styles -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,900&display=swap' rel='stylesheet'>
    {{-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="landing_container">
        @include('component.navbar')
        @yield('landing-content')


    </div>


    <!-- Javascripts -->
    <script src="{{ asset('plugin/jquery/jquery-3.4.1.min.js') }}"></script>
    {{-- <script src="{{ asset('plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script> --}}


    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".navbar_wrapper");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });
    </script>
    
    <script>
        console.log("testing click");
        var toggle = false;
        $(document).ready(function() {
            $("#btn_sidebar").click(function() {
                toggle = !toggle;
                var sidebar = document.getElementById("sidebarMenu");

                if (toggle) {

                    sidebar.style.width = "250px";
                    $('#sidebarMenu').css('background-color', 'rgba(255,255, 255, 1)');
                } else {
                    sidebar.style.width = "0px";
                    $('#sidebarMenu').css('background-color', 'rgba(255, 255,255, 0)');

                }
            });
        });
    </script>
    @yield('pageJS')
</body>


</html>
