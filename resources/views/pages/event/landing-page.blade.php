@extends('master')

@section('cssinline')
    <link rel="stylesheet" href="{{ asset('css/pages/lp.css') }}?v=0.0.2.8">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .home__fitur .card-body img {
            max-height: 180px;
            /* height: 100%; */
        }

    </style>
@endsection

@section('content')
    <section class="home__hero">
        <img src="{{ asset('images/ornament/hero-wave.svg') }}" alt="" class="home__hero_orn">
        <div class="container" style="position: relative; z-index: 3">
            <div class="inner__container">
                <div class="row align-items-center">
                    <div class="col-lg-6 hero__left">
                        <div class="home__hero_left">
                            {{-- <h5>gudangin</h5> --}}
                            <h1>Jualan <strong>Lebih Banyak</strong> Kirim <strong>Lebih Cepat</strong> Kemanapun Tetap
                                <strong>Lebih Hemat</strong>
                            </h1>
                            <h6>Gudangin hadir untuk memudahkan operasional bisnis online kamu sesuai kebutuhan. Mulai dari
                                manajemen gudang penyimpanan, quality control, packing, pengiriman, manajemen stok barang,
                                apapun jenis dan besarnya usaha online kamu.

                            </h6>
                            <button class="btn btn-join">Join Now</button>
                            <button class="btn btn-white ml-4 btn-client">Our Client</button>
                        </div>
                    </div>
                    <div class="col-lg-6 hero__right">
                        {{-- <div class="home__hero_right">
                            <img src="{{ asset('images/banner-lp.png') }}?v=1.0.0" alt="">
                        </div> --}}
                        <div class="swiper swiperBanner">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ asset('images/banner-lp.png') }}?v=1.0.0" alt="">
                                </div>
                                <div class="swiper-slide"><img src="{{ asset('images/banner-lp.png') }}?v=1.0.0" alt="">
                                </div>
                                <div class="swiper-slide"> <img src="{{ asset('images/banner-lp.png') }}?v=1.0.0"
                                        alt=""></div>

                            </div>
                            <!-- <div class="swiper-button-next"></div>
                                  <div class="swiper-button-prev"></div> -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
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
    <div style="background-color: white; height: 30px"></div>
    <section class="home__fitur">
        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
            <div class="inner__container">
                <div style="height: 25px;">

                </div>
                <h2 class="text-center">Mengapa Bisnismu Harus Menggunakan <span>Gudangin</span>?</h2>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-1.png') }}" alt="">
                                <h6>Integrasi toko online dari beberapa marketplace sekaligus</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-2.png') }}" alt="">
                                <h6>Agregasi SKU Produk, data orderan/transaksi, jumlah pembeli dan data pembeli</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-3.png') }}" alt="">
                                <h6>Agregasi chat dari beberapa marketplace sehingga admin tidak perlu lagi login-logout
                                    banyak akun</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__benefit" style=" background-color: transparent !important;">
        {{-- <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn"> --}}
        <div class="container" style="position: relative; z-index: 3" data-aos="fade-up">
            <div class="inner__container">
                <div style="height: 55px;">

                </div>
                <div class="row">
                    <div class="col-lg-6 home__benefit_left">

                        {{-- <h4>#gudanginAja</h4> --}}
                        <h2>Benefit <span>Gudangin</span> Bagi <br>Bisnis Onlinemu </h2>

                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/icons/benefit-1.png') }}" alt="">
                                <h5>5 menit maksimal!</h5>
                                <h6>Lamanya waktu yang diperlukan oleh sistem automasi untuk memproses orderan dari saat
                                    terjadi di marketplace hingga tahap siap di pick-up kurir
                                </h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/icons/benefit-2.png') }}" alt="">
                                <h5>80%-90% peningkatan efesiensi pemrosesan pesanan</h5>
                                <h6>90% pengurangan penggunaan space ruangan untuk operasional toko dan 80% penghematan
                                    biaya
                                    (upah) admin untuk operasional toko
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 home__benefit_right">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/icons/benefit-3.png') }}" alt="">
                                <h5>100% orderan terproses</h5>
                                <h6>Tanpa input manual, keterlambatan maupun kesalahan pemrosesan orderan yang disebabkan
                                    oleh human-error terminimalisir
                                </h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/icons/benefit-4.png') }}" alt="">
                                <h5>Efektivitas managemen stok</h5>
                                <h6>Manajemen Stok yang lebih rapih dan terkontrol, karena inbound dan outbound terjadi
                                    secara real-time</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 55px;">

                </div>
            </div>
        </div>
    </section>
    <section class="home__solution section-klien" style="background-color: white">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div style="height: 55px;">

                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6 home__solution_left">
                        <img src="{{ asset('images/illustration/solution-2.png') }}" alt="">
                    </div>
                    <div class="col-lg-6  home__solution_right">
                        {{-- <h4 class="mt-5">#gudanginAja</h4> --}}
                        <h2 class=" text-center">Siapa Saja Yang Menggunakan <span>Gudangin</span>?</h2>
                        <div class="divider-15">

                        </div>
                        <div class="row justify-content-around">
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/WGM.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/WHW2_1.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/logo-warisan.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/acaraki.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/bardi.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/lpcb.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/lasegar.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/obida.png') }}" alt="" class="img-klien">
                            </div>
                            <div class="col-lg-3 col-md-4 col-5 mb-4">
                                <img src="{{ asset('images/client/siang-pure.png') }}" alt="" class="img-klien">
                            </div>
                        </div>
                    </div>
                </div>
                <div style="height: 55px;">

                </div>
            </div>
        </div>
    </section>
    <section class="home__works">
        <div class="container" data-aos="fade-up">

            <div class="inner__container">

                <div class="row align-items-center">
                    <div class="col-lg-5 home__works_left">
                        {{-- <h4>#gudanginAja</h4> --}}
                        <h2>Apa Kata Mereka Tentang <span>Gudangin</span>?</h2>
                        <h6>Integritas kami merupakan hal yang paling krusial di bisnis. Oleh karena itu, klien-klien kami
                            disini adalah bukti kami tetap menjaga integritas kami. </h6>
                    </div>
                    <div class="col-lg-7 home__works_right">
                        <!-- <button class="sec" data-toggle="modal" data-target="#exampleModal">Pelajari
                                            Sekarang</button>
                                        <button class="prm">Gabung Sekarang</button> -->
                        <div class="swiper w-100 mySwiper">
                            <div class="swiper-wrapper">
                                <!-- <div class="swiper-slide">
                                              <div class="card rounded shadow">
                                                <div class="card-body">
                                                  <div class="d-flex justify-content-center">
                                                    <img src="" alt="" class="img-client">
                                                  </div>
                                                  <h5 style="font-weight: 700" class="text-center mb-0"></h5>
                                                  <h5 class="text-center"></h5>
                                                  <p style="color:#e36d1c" class="text-center">

                                                  </p>
                                                </div>
                                              </div>
                                            </div> -->

                                @component('component.testi-card')
                                    @slot('img')
                                        https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500
                                    @endslot
                                    @slot('name')
                                        Bambang Adi
                                    @endslot
                                    @slot('jabatan')
                                        Manager Operasional PT. ABC
                                    @endslot
                                    @slot('details')
                                        Terima kasih untuk para team Gudangin yang
                                        telah membantu dalam mengembangkan dan
                                        mengelola bisnis online saya sehingga omset
                                        penjualan produk saya semakin meningkat.
                                    @endslot
                                @endcomponent
                                @component('component.testi-card')
                                    @slot('img')
                                        https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500
                                    @endslot
                                    @slot('name')
                                        Bambang Adi
                                    @endslot
                                    @slot('jabatan')
                                        Manager Operasional PT. ABC
                                    @endslot
                                    @slot('details')
                                        Terima kasih untuk para team Gudangin yang
                                        telah membantu dalam mengembangkan dan
                                        mengelola bisnis online saya sehingga omset
                                        penjualan produk saya semakin meningkat.
                                    @endslot
                                @endcomponent
                                @component('component.testi-card')
                                    @slot('img')
                                        https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500
                                    @endslot
                                    @slot('name')
                                        Bambang Adi
                                    @endslot
                                    @slot('jabatan')
                                        Manager Operasional PT. ABC
                                    @endslot
                                    @slot('details')
                                        Terima kasih untuk para team Gudangin yang
                                        telah membantu dalam mengembangkan dan
                                        mengelola bisnis online saya sehingga omset
                                        penjualan produk saya semakin meningkat.
                                    @endslot
                                @endcomponent
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="custom-shape-divider-bottom-1636615399">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>








    <section class="home__footer" data-aos="fade-up">
        <div style="height: 35px;">

        </div>
        <div class="container">
            <div class="inner__container">
                <div class="card">
                    <div class="card-body">
                        <p>Kamu stay at home kembangin bisnisnya</p>
                        <h2>Biar kami yang <span>kelola dan kembangkan</span> usaha online anda!</h2>
                        <button class="btn btn-join">Join Now<i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__benefit section-form " data-aos="fade-up">
        {{-- <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn"> --}}



        <div class="container">
            <h2 style="font-weight: 800" class="text-center mb-4">Berminat Untuk Diskusi Dengan <span>Account
                    Executive</span> Kami?</h2>

            <div class="row ">
                <div class="col-md-6">
                    <div class="home__modal px-3 left_form">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 text-center">
                                <img class="mt-4" src="{{ asset('images/icons/step1.png') }}" alt="">

                                <div class="card">
                                    <div class="card-body">
                                        <p>Penggabungan semua toko lintas Marketplace di Indonesia dalam 1 sistem</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p>Agregasi Stok SKU.
                                            Orderan masuk akan otomatis terupdate saat terjadi penjualan di tiap marketplace
                                        </p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p>Agregasi Chat dari semua marketplace</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <p>Otomatisasi Order List</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6  text-center">
                                <img class="mt-4" src="{{ asset('images/icons/step2.png') }}" alt="">
                                <div class="card">
                                    <div class="card-body text-left">
                                        <strong>
                                            <p>One Stop Order</p>
                                        </strong>
                                        <p>Management System</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-left">
                                        <strong>
                                            <p>Stock Aggregation</p>
                                        </strong>
                                        <p>integrated to major Marketplace in Indonesia</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body text-left">
                                        <strong>
                                            <p>Chat Center</p>
                                        </strong>
                                        <p>Integrated to major Marketplace in Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6  text-center">
                                <img class="mt-4" src="{{ asset('images/icons/step3.png') }}" alt="">
                                <div class="card">
                                    <div class="card-body">
                                        <p>Hyperlocal Fulfillment System</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset('images/ornament/modal-orn.png') }}" alt="" class="modal_orn">
                    </div>

                </div>
                <div class="col-md-6">
                    <form class=" register__section" method="POST" action="{{ route('makeDiscussion') }}"
                        style="position: relative">
                        @csrf
                        <!-- <img src="{{ asset('images/landing-page/background_modal.png') }}" alt="" class="bg__img"> -->
                        <div class="register__form_wrapper">

                            <!-- <img src="{{ asset('images/navbar_logo.svg') }}" alt="" class="register__logo"> -->
                            <h5 class="mt-6 text-center">Diskusi dengan <span>Account Executive Kami </span></h5>
                            <div class="form-group">
                                <label>Nama <span style="color:red">*</span> </label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <i class="fas fa-user" style="margin-left: 3px;"></i>
                                        </span></div>
                                    <input type="text" class="form-control" name="name" id="userName"
                                        placeholder="Silahkan masukkan Alamat Nama Anda" required
                                        onkeypress="clearError('errEmail')" />
                                </div>
                                <span id="errName" class="d-none" style="font-size: 12px; color: #FF0000">Nama
                                    Harus
                                    diisi dengan format yang
                                    benar</span>
                            </div>
                            <div class="form-group">
                                <label>Email <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <img src="{{ asset('images/icons/email.svg') }}" alt="">
                                        </span></div>
                                    <input type="email" class="form-control" name="email" id="userEmail"
                                        placeholder="Silahkan masukkan Alamat Email Anda" required
                                        onkeypress="clearError('errEmail')" />
                                </div>
                                <span id="errEmail" class="d-none" style="font-size: 12px; color: #FF0000">Email
                                    Harus
                                    diisi dengan format yang
                                    benar</span>
                            </div>

                            <div class="form-group">
                                <label>Nomor Whatsapp <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">+62</span></div>
                                    <input id="whatsapp" type="number" class="form-control" name="whatsapp"
                                        placeholder="Nomor Whatsapp Anda" required onkeypress="clearError('errWa')" />
                                </div>
                                <span id="errWa" class="d-none" style="font-size: 12px; color: #FF0000">Nomor
                                    Whatsapp Harus
                                    diisi dengan format yang
                                    benar</span>
                            </div>


                            <div class="form-group">
                                <label>Nama Perusahaan <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">
                                            <!-- <img src="{{ asset('images/icons/password.svg') }}" alt=""> -->
                                            <i class="fas fa-building" style="margin-left: 4px;"></i>
                                        </span></div>
                                    <input id="input-perusahaan" type="text" class="form-control" name="company"
                                        placeholder="Nama Perusahaan" style="border-right: transparent" required />
                                    <span id="errCompany" class="d-none"
                                        style="font-size: 12px; color: #FF0000">Nomor
                                        Nama Perusahaan Harus
                                        diisi </span>
                                </div>
                                <!-- <span id="errPass" class="d-none" style="font-size: 12px; color: #FF0000">Masukkan
                                    Kata
                                    Sandi</span> -->
                            </div>
                            <div class="form-group">
                                <label>Message <span style="color:red">*</span></label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><img
                                                src="{{ asset('images/icons/email.svg') }}" alt=""></span></div>
                                    <!-- <input id="date" type="date" class="form-control" name="date"
                                        placeholder="Silahkan masukkan tanggal yang diinginkan"
                                         /> -->
                                    <textarea name="message" rows="8" cols="25" class="form-control" placeholder="message" required></textarea>
                                </div>
                                <span id="errMessage" class="d-none" style="font-size: 12px; color: #FF0000">Pesan
                                    tidak boleh kosong</span>
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
                            <button class="btn btn-prim btn-bigger mt-2" id="registerBtn" disabled>Join Now</button>

                            <!-- <div class="text-center my-3">
                                <p>Sudah Punya Akun? <a href="">Log In</a></p>
                            </div> -->

                        </div>
                    </form>

                </div>
            </div>

        </div>

    </section>
    <div style="height: 50px; background-color: white">

    </div>
    <!-- Modal -->
    <!-- <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body home__modal">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    <div class="row justify-content-center">
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <img class="mt-4" src="{{ asset('images/icons/step1.png') }}" alt="">

                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Penggabungan semua toko lintas Marketplace di Indonesia dalam 1 sistem</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Agregasi Stok SKU.
                                                        Orderan masuk akan otomatis terupdate saat terjadi penjualan di tiap marketplace</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Agregasi Chat dari semua marketplace</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Otomatisasi Order List</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <img class="mt-4" src="{{ asset('images/icons/step2.png') }}" alt="">
                                            <div class="card">
                                                <div class="card-body text-left">
                                                    <strong>
                                                        <p>One Stop Order</p>
                                                    </strong>
                                                    <p>Management System</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body text-left">
                                                    <strong>
                                                        <p>Stock Aggregation</p>
                                                    </strong>
                                                    <p>integrated to major Marketplace in Indonesia</p>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body text-left">
                                                    <strong>
                                                        <p>Chat Center</p>
                                                    </strong>
                                                    <p>Integrated to major Marketplace in Indonesia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 text-center">
                                            <img class="mt-4" src="{{ asset('images/icons/step3.png') }}" alt="">
                                            <div class="card">
                                                <div class="card-body">
                                                    <p>Hyperlocal Fulfillment System</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <img src="{{ asset('images/ornament/modal-orn.png') }}" alt="" class="modal_orn">
                                </div>
                            </div>
                        </div>
                    </div> -->
@endsection


@section('pageJS')
    <script src="{{ asset('plugin/marquee-scroll/dist/grouploop-1.0.3.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        AOS.init();
        // $('#exampleModal').modal('show')
    </script>
    <script>
        $("#problem_group").grouploop({
            velocity: 0.5,
            forward: true,
            childNode: ".problem_item",
            childWrapper: ".problem_wrap",
            pauseOnHover: false,
            stickFirstItem: false
        })

        $("#problem_group-2").grouploop({
            velocity: 0.5,
            forward: false,
            childNode: ".problem_item",
            childWrapper: ".problem_wrap",
            pauseOnHover: false,
            stickFirstItem: false
        })
    </script>

<script>
    var swiper = new Swiper(".swiperBanner", {
        // cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
        },
        loop: true,
        autoplay: {
            delay: 10000,
        },
    });
</script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
            },
            loop: true,
            autoplay: {
                delay: 15000,
            },
        });
    </script>
    <!-- Logic for Click Button Join Now -->
    <script type="text/javascript">
        $('.btn-join').click(function() {
            $('html, body').animate({
                scrollTop: ($(".section-form").offset().top) - 180
            }, 2500);
        });
        $('.btn-client').click(function() {
            $('html, body').animate({
                scrollTop: ($(".section-klien").offset().top) - 75
            }, 1500);
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script type="text/javascript">
        function recaptchaCallback() {
            $('#registerBtn').removeAttr('disabled');
        }
    </script>
    <script>
        $('.register__section').on('submit', function(e) {

            let errorEmail = false;
            let errorName = false;
            let errorPhone = false;
            let errorCompany = false;
            let errorMessage = false;

            let email = $('input[name="email"]').val() ?? "";
            let name = $('input[name="name"]').val();
            let phone = $('input[name="whatsapp"]').val();
            let company = $('input[name="company"]').val();
            let message = $('textarea[name="message"]').val();

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

            if (message.length < 3) {
                console.log("message empty");
                errorMessage = true;
                $('#errMessage').removeClass('d-none');
            } else {
                $('#errMessage').addClass('d-none');
            }


            if (errorName || errorEmail || errorPhone || errorCompany || errorMessage) {
                console.log("ONE OF THEM IS EMPTY/WRONG");
                e.preventDefault();
            }
        })
    </script>
@endsection
