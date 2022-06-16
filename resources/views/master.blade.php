<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Gudangin urus semua orderan tokomu siap kirim dalam waktu 5 menit, jualan lebih banyak, kirim lebih cepat kemanapun, tetap lebih hemat." />
    <meta name="keywords"
        content="cloud warehouse, marketplace integration, manajemen gudang penyimpanan, quality control packing, manajemen stok barang, agregasi chat marketplace" />
    <meta name="robots" content="index, follow" />
    <meta name="author" content="Gudangin.id" />
    <meta name="google-site-verification" content="TlSlz4I9mVi94EWXzd_O2XWndckv1Y5xC-MnRuZl6Es" />

    <!-- Title -->
    <title>Gudangin | Cloud Warehouse | Marketplace Integration</title>

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">


    <!-- Styles -->
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Theme Styles -->
    <link href="{{ asset('/css/custom.css') }}?v=1.01.3" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/pages/footer.css') }}?v=1.2.4" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/pages/navbar.css') }}?v=1.1.1">
    <link href="{{ asset('/css/pages/new-style.css') }}?v=0.6.1" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/pages/lp.css')}}?v=0.0.2.9">
    <style media="screen">
    @media screen and (max-width: 996px) {
      .home__benefit_orn{
        width: 100%;
      }
    }

    </style>
    @yield('cssinline')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-212565341-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-212565341-1');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-N2KDD6F');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Facebook Pixel Code -->
    <!-- <script type="text/javascript">
    !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '262143422740140');
        fbq('track', 'PageView');
    </script> -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '5879286915421976');
        fbq('track', 'PageView');
    </script>
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2KDD6F" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Facebook Pixel Code -->
    <!-- <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=262143422740140&ev=PageView&noscript=1"
          /></noscript> -->
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=5879286915421976&ev=PageView&noscript=1"
    /></noscript>
    <!-- End FB Pixel Code -->

    @include('component.navbar')
    <a class="btn-wa" data-toggle="tooltip" data-placement="left" title="Kami Siap Membantu Anda">
      <i class="fab fa-whatsapp"></i>
    </a>
    @yield('content')

    @include('component.footer')
    <div class="">

    </div>

    <!-- Javascripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js">

    </script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $('.btn-wa').on('click', function() {
            var y = Math.random();
            if (y < 0.5) {
                y = 0
            } else {
                y = 1
            }
            let wa = [6281388886435, 6281388886435]
            window.open(
                `https://wa.me/${wa[y]}?text=Halo%2C%20aku%20mau%20bertanya%20tentang%20Layanan%20di%20Gudangin`
            )
        })
    </script>
    @if (Session::has('successMsg'))
      <script>
          console.log('success');
          Swal.fire(
              'Success!',
              'Account executive kami akan segera menghubungi Anda, terima kasih!',
              'success'
          );
      </script>

    @endif
    @if (Session::has('errorCapcha'))
        <script>

            Swal.fire(
                'Gagal',
                'Capcha kamu kosong!',
                'error'
            );
        </script>
    @endif
    @yield('pageJS')
</body>


</html>
