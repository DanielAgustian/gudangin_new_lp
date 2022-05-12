<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
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

                        <div class="form-group">
                            <label>Nomor Whatsapp</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">+62</span></div>
                                <input id="whatsapp" type="text" class="form-control" name="whatsapp"
                                    placeholder="Silahkan masukkan Nomor Whatsapp Anda"
                                    onkeypress="clearError('errWa')" />
                            </div>
                            <span id="errWa" class="d-none" style="font-size: 12px; color: #FF0000">Nomor
                                Whatsapp Harus
                                diisi dengan format yang
                                benar</span>
                        </div>

                        <div class="form-group">
                            <label>Alamat E-mail</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/email.svg') }}" alt="">
                                    </span></div>
                                <input type="email" class="form-control" name="email" id="userEmail"
                                    placeholder="Silahkan masukkan Alamat Email Anda"
                                    onkeypress="clearError('errEmail')" />
                            </div>
                            <span id="errEmail" class="d-none" style="font-size: 12px; color: #FF0000">Email
                                Harus
                                diisi dengan format yang
                                benar</span>
                        </div>

                        <div class="form-group">
                            <label>Kode OTP</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/otp.svg') }}" alt="">
                                    </span></div>
                                <input type="text" class="form-control" name="whatsapp" placeholder="Email Kode OTP"
                                    style="border-right: transparent" id="kodeOTP" onkeypress="clearError('errOTP')" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"
                                        style="border-left: transparent; color: #0027F4; cursor: pointer"
                                        onclick="sendOTP()">
                                        Kirim
                                    </span>
                                </div>
                            </div>
                            <span id="errOTP" class="d-none" style="font-size: 12px; color: #FF0000">Masukkan
                                Kode
                                OTP</span>
                        </div>

                        <div class="form-group">
                            <label>Kata Sandi</label>
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text">
                                        <img src="{{ asset('images/icons/password.svg') }}" alt="">
                                    </span></div>
                                <input id="input-password" type="password" class="form-control" name="whatsapp"
                                    placeholder="Password" style="border-right: transparent"
                                    onkeypress="clearError('errPass')" />
                                <div class="input-group-append">
                                    <span class="input-group-text cursor-pointer"
                                        style="border-left: transparent; color: #B8B8B8; cursor: pointer"
                                        id="togglePassword" onclick="togglePassword('input-password')">
                                        <i class="fas fa-eye-slash"></i>
                                    </span>
                                </div>
                            </div>
                            <span id="errPass" class="d-none" style="font-size: 12px; color: #FF0000">Masukkan
                                Kata
                                Sandi</span>
                        </div>

                        <div class="register__syarat">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ckBox"
                                    style="height: unset; margin-top: 0.2rem">
                                <label class="form-check-label" for="ckBox">
                                    Dengan mendaftar, Saya setuju dengan <a href="">terms and conditions</a> dan <a
                                        href="">privacy policy Gudangin</a>
                                </label>
                            </div>
                        </div>

                        <button class="btn" disabled id="registerBtn"
                            onclick="postRegister()">Register</button>

                        <div class="text-center my-3">
                            <p>Sudah Punya Akun? <a href="">Log In</a></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Javascripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.4/dist/sweetalert2.all.min.js"
        integrity="sha256-BkUgaETbff6QynrhYiY+ZltDJW+2F9xFD0tEyHJd+UQ=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#whatsapp').mask('000-0000-00000');
            $('#kodeOTP').mask('000000');
        });

        function togglePassword(elmID) {
            let password = document.getElementById(elmID);
            if (password.type === "password") {
                password.type = "text";
                $(".fas").removeClass(" fa-eye-slash")
                $(".fas").addClass("fa-eye")
            } else {
                password.type = "password";
                $(".fas").removeClass("fa-eye")
                $(".fas").addClass("fa-eye-slash")
            }
        }

        $('#ckBox').click(function() {
            $('#registerBtn').prop('disabled', !$(this).prop('checked'));
        });
    </script>

    <script>
        const sendOTP = () => {
            let email = document.getElementById('userEmail').value
            $.ajax({
                url: `{{ env('API_URL') }}send-otp`,
                headers: {
                    'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>',
                    'Authorization': "Bearer {{ Session::get('token') }}",
                    'Jwt-Key': '{{ env('API_KEY') }}'
                },
                data: {
                    email: email
                },
                type: 'post',
                success: function(data) {
                    // console.log(data)
                    if (data.status == 'success') {
                        Swal.fire({
                            title: 'Kode OTP Berhasil Dikirim!',
                            text: `Silahkan cek email dan masukkan kode OTP`,
                            icon: 'success',
                        })
                    }
                }
            })
        }

        const postRegister = () => {
            let whatsapp = document.getElementById('whatsapp').value
            let email = document.getElementById('userEmail').value
            let otp = document.getElementById('kodeOTP').value
            let password = document.getElementById('input-password').value

            if (whatsapp == "" || email == "" || otp == "" || password == "") {
                whatsapp == "" ? $('#errWa').removeClass('d-none') : ""
                email == "" ? $('#errEmail').removeClass('d-none') : ""
                otp == "" ? $('#errOTP').removeClass('d-none') : ""
                password == "" ? $('#errPass').removeClass('d-none') : ""
            } else {
                $.ajax({
                    url: `{{ env('API_URL') }}register`,
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>',
                        'Authorization': "Bearer {{ Session::get('token') }}",
                        'Jwt-Key': '{{ env('API_KEY') }}'
                    },
                    data: {
                        email: email,
                        password: password,
                        password_confirmation: password,
                        whatsapp: whatsapp,
                        otp: otp
                    },
                    type: 'post',
                    success: function(data) {
                        // console.log(data)
                        window.location.replace(
                            `https://dashboard.gudangin.id/get-data-user?tk=${data.token}`);
                    },
                    error: function(err) {
                        // console.log(err)
                        if (err.responseJSON.whatsapp) {
                            Swal.fire({
                                title: 'Oops!',
                                text: `${err.responseJSON.whatsapp[0]}`,
                                icon: 'warning',
                            })
                        } else if (err.responseJSON.email) {
                            Swal.fire({
                                title: 'Oops!',
                                text: `${err.responseJSON.email[0]}`,
                                icon: 'warning',
                            })
                        } else if (err.responseJSON.status) {
                            Swal.fire({
                                title: 'Oops!',
                                text: `${err.responseJSON.message}`,
                                icon: 'warning',
                            })
                        }
                    }
                })
            }
        }

        const clearError = (id) => {
            $(`#${id}`).addClass('d-none')
        }
    </script>
</body>


</html>
