@extends('master')

@section('cssinline')
    <link href="{{ asset('/css/pages/contact-us.css') }}?v=0.1.7 " rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('/css/pages/new-style.css') }}?v=0.4.7" rel="stylesheet" type="text/css"> -->
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
    <section class="pricing__hero faq" style="z-index: 3;">
        <div class="container text-left">
            <h1>Hubungi Kami</h1>

            <p style="color: white">
                Butuh informasi tambahan mengenai <strong>gudangin</strong>? Hubungi disini.
            </p>
        </div>
        <div class="custom-shape-divider-bottom-1636602785">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1636602786">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>

        <div class="custom-shape-divider-bottom-1636602787">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <section class="home__benefit section-form " data-aos="fade-up">
        <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">
        <div style="height: 55px;">

        </div>
        <!-- <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn"> -->
        <div class="container">
            <!-- <h1 class="text-center mb-4" style="font-weight: 700" >Diskusi Dengan  <span> Team<strong> gudangin</strong></span></h1> -->
            <div class="row ">

                <div class="col-md-6">
                    <div class="card shadow" style="background: white;">
                        <div class="card-body">
                            <form class=" register__section form-contact" method="POST"
                                action="{{ route('contactUsPost') }}" style="position: relative">
                                @csrf
                                <!-- <img src="{{ asset('images/landing-page/background_modal.png') }}" alt="" class="bg__img"> -->
                                <div class="register__form_wrapper">

                                    <!-- <img src="{{ asset('images/navbar_logo.svg') }}" alt="" class="register__logo"> -->
                                    <h5 class="mt-6 text-center">Berminat Untuk Berdiskusi?</h5>
                                    <div class="form-group">
                                        <label>Nama <span style="color:red;">*</span> </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <i class="fas fa-user" style="margin-left: 3px;"></i>
                                                </span></div>
                                            <input type="text" class="form-control" name="name" id="userEmail"
                                                placeholder="Silahkan masukkan Alamat Nama Anda" required
                                                onkeypress="clearError('errEmail')" />
                                        </div>
                                        <span id="errName" class="d-none"
                                            style="font-size: 12px; color: #FF0000">Nama
                                            Harus
                                            diisi dengan format yang
                                            benar</span>
                                    </div>
                                    <div class="form-group">
                                        <label>Email <span style="color:red;">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </span></div>
                                            <input type="email" class="form-control" name="email" id="userEmail"
                                                placeholder="Silahkan masukkan Alamat Email Anda" required
                                                onkeypress="clearError('errEmail')" />
                                        </div>
                                        <span id="errEmail" class="d-none"
                                            style="font-size: 12px; color: #FF0000">Email
                                            Harus
                                            diisi dengan format yang
                                            benar</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Nomor Whatsapp <span style="color:red;">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">+62</span></div>
                                            <input id="whatsapp" type="number" class="form-control" name="whatsapp"
                                                placeholder="Silahkan masukkan Nomor Whatsapp Anda" required
                                                onkeypress="clearError('errWa')" />
                                        </div>
                                        <span id="errWa" class="d-none"
                                            style="font-size: 12px; color: #FF0000">Nomor
                                            Whatsapp Harus
                                            diisi dengan format yang
                                            benar</span>
                                    </div>


                                    <div class="form-group">
                                        <label>Nama Perusahaan <span style="color:red;">*</span></label>
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">
                                                    <!-- <img src="{{ asset('images/icons/password.svg') }}" alt=""> -->
                                                    <i class="fas fa-building" style="margin-left: 4px;"></i>
                                                </span></div>
                                            <input id="input-perusahaan" type="text" class="form-control" name="company"
                                                placeholder="Nama Perusahaan" style="border-right: transparent" required />

                                        </div>
                                        <span id="errCompany" class="d-none"
                                            style="font-size: 12px; color: #FF0000">Nomor
                                            Nama Perusahaan Harus
                                            diisi </span>
                                    </div>


                                    <!-- <div class="register__syarat">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="ckBox"
                                  style="height: unset; margin-top: 0.2rem">
                              <label class="form-check-label" for="ckBox">
                                  Dengan mendaftar, Saya setuju dengan <a href="">terms and conditions</a> dan <a
                                      href="">privacy policy Gudangin</a>
                              </label>
                          </div>
                      </div> -->
                                    <div class="g-recaptcha" data-callback="recaptchaCallback"
                                        data-sitekey="6LdLM1UeAAAAANIPJEOY3Bo_7bysZ5pSdgMMkyc5"></div>

                                    <button class="btn btn-prim btn-bigger mt-2" id="registerBtn" disabled>Coba
                                        Gratis</button>

                                    <!-- <div class="text-center my-3">
                          <p>Sudah Punya Akun? <a href="">Log In</a></p>
                      </div> -->

                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15864.764093506465!2d106.6514294!3d-6.2385354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce2a00aeec086f67!2sYOKESEN!5e0!3m2!1sen!2sid!4v1646816084802!5m2!1sen!2sid"
                        class="map-data" style="border:0;" allowfullscreen="" loading="lazy"
                        class=""></iframe>
                    <div class="h-100 w-100 position-relative">
                        <div class="box-1 rounded d-flex justify-content-center align-items-center">
                            <div class="alamat-contact mt-lg-0">
                                <h3 style="color: white">Gudangin Head Office</h3>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Ruko Crystal 8 No. 17 <br>
                                        Alam Sutera, Tangerang Selatan <br>
                                        Banten 15320
                                    </p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <i class="fas fa-envelope"></i>
                                    <p>contact@gudangin.id
                                    </p>
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <i class="fas fa-phone"></i>
                                    <p>Telepon: +62-8778-4397-649<br>
                                        Whatsapp: +62-8138-8886-435
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box-2 shadow rounded p-4">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div style="height: 70px;">

        </div>
    </section>
@endsection

@section('pageJS')
    <!-- <script src="{{ asset('tocify/jquery-1.8.3.min.js') }}"></script>
        <script src="{{ asset('tocify/jquery-ui-1.9.1.custom.min.js') }}"></script>
        <script src="{{ asset('tocify/jquery.tocify.js') }}"></script>
        <script>
            var total = 700
            //Executes your code when the DOM is ready.  Acts the same as $(document).ready().
            $(function() {
                var toc = $("#toc").tocify({
                    selectors: "h2,h3"
                }).data("toc-tocify");
            });

            if (screen.width > 500) {
                $(window).scroll(function(event) {

                    var scroll = $(window).scrollTop();
                    // Do something
                    if (scroll > 470) {
                        $("#toc").addClass("position-fixed")
                        $("#toc").removeClass("position-absolute")
                        $("#toc").css("top", "100px")
                    } else {
                        $("#toc").removeClass("position-fixed")
                        $("#toc").addClass("position-absolute")
                        $("#toc").css("top", "0")
                    }
                });
            } else {
                $("#toc").addClass("position-relative")
                $("#toc").removeClass("position-fixed")
                $("#toc").removeClass("position-absolute")
            }
        </script> -->
    <script src="{{ asset('plugin/marquee-scroll/dist/grouploop-1.0.3.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        AOS.init();
        // $('#exampleModal').modal('show')
    </script>
    <script>
        $('.form-contact').on('submit', function(e) {

            let errorEmail = false;
            let errorName = false;
            let errorPhone = false;
            let errorCompany = false;

            let email = $('input[name="email"]').val() ?? "";
            let name = $('input[name="name"]').val();
            let phone = $('input[name="whatsapp"]').val();
            let company = $('input[name="company"]').val();

            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if (!email.match(mailformat)) {
                console.log("wrong email");
                errorEmail = true;
                $('#errEmail').removeClass('d-none')

            } else {
                $('#errEmail').addClass('d-none');
            }

            if (name.length < 2) {
                console.log("name empty");
                errorName = true;
                $('#errName').removeClass('d-none');
            } else {
                $('#errName').addClass('d-none');
            }
            if (phone.length < 9) {
                console.log("phone error");
                errorPhone = true;
                $('#errWa').removeClass('d-none');
            } else {
                $('#errWa').addClass('d-none');
            }

            if (company.length < 3) {
                console.log("company error");
                errorCompany = true;
                $('#errCompany').removeClass('d-none');
            } else {
                $('#errCompany').addClass('d-none');
            }




            if (errorName || errorEmail || errorPhone || errorCompany) {
                console.log("ONE OF THEM IS EMPTY/WRONG");
                e.preventDefault();
            }
        })
    </script>
    <script type="text/javascript">
        function recaptchaCallback() {
            $('#registerBtn').removeAttr('disabled');
        }
    </script>
@endsection
