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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Theme Styles -->
    <link href="{{ asset('/css/pages/register.css') }}" rel="stylesheet" type="text/css">

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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N2KDD6F" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <div class="register__wrapper">
        <div class="container-fluid">
            <div class="row" style="min-height: 100vh">
                <div class="col-lg-5 img__section"
                    style="background: #FFF5EB; display: flex; justify-content: center; align-items: center">
                    <img src="{{ asset('images/illustration/gudang.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7 register__section" style="position: relative">

                    <img src="{{ asset('images/landing-page/background_modal.png') }}" alt="" class="bg__img">
                    <div class="register__form_wrapper">

                        <img src="{{ asset('images/navbar_logo.svg') }}" alt="" class="register__logo">
                        <h3>Register</h3>

                        {{-- <form action=""> --}}

                        <div class="form-group">
                            <label>Nomor Whatsapp</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">+62</span></div>
                                <input type="text" class="form-control" name="whatsapp"
                                    placeholder="Silahkan masukkan Nomor Whatsapp Anda" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Alamat E-mail</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/email.svg') }}" alt="">
                                    </span></div>
                                <input type="text" class="form-control" name="whatsapp"
                                    placeholder="Silahkan masukkan Alamat Email Anda" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kode OTP</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/otp.svg') }}" alt="">
                                    </span></div>
                                <input type="text" class="form-control" name="whatsapp" placeholder="Email Kode OTP"
                                    style="border-right: transparent" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"
                                        style="border-left: transparent; color: #0027F4; cursor: pointer">
                                        Kirim
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/password.svg') }}" alt="">
                                    </span></div>
                                <input type="text" class="form-control" name="whatsapp" placeholder="Password"
                                    style="border-right: transparent" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"
                                        style="border-left: transparent; color: #B8B8B8; cursor: pointer">
                                        <i class="fas fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label>Kata Sandi</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/password.svg') }}" alt="">
                                    </span></div>
                                <input type="text" class="form-control" name="whatsapp"
                                    placeholder="Silahkan masukkan Kata Sandi Anda" />
                            </div>
                        </div> --}}

                        {{-- </form> --}}

                        <div class="register__syarat">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    style="height: unset; margin-top: 0.2rem">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Dengan mendaftar, Saya setuju dengan <a href="">terms and conditions</a> dan <a
                                        href="">privacy policy Gudangin</a>
                                </label>
                            </div>
                        </div>

                        <button class="btn">Register</button>

                        <div class="text-center my-3">
                            <p>Sudah Punya Akun? <a href="">Log In</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    @yield('pageJS')
</body>


</html>
