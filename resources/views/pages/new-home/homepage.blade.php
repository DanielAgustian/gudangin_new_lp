@extends('master')
@section('cssinline')

  <link rel="stylesheet" href="{{asset('css/pages/lp.css')}}?v=0.0.2.8">
  <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
@endsection
@section('content')
    <section class="home__hero">
        <img src="{{ asset('images/ornament/hero-wave.svg') }}" alt="" class="home__hero_orn">
        <div class="container" style="position: relative; z-index: 3">
            <div class="inner__container">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-5 hero__left">
                        <div class="home__hero_left">
                            <h5>gudangin</h5>
                            <h1>Jualan <strong>Lebih Banyak</strong> Kirim <strong>Lebih Cepat</strong> Kemanapun Tetap
                                <strong>Lebih Hemat</strong>
                            </h1>
                            <h6>Gudangin hadir untuk memudahkan operasional bisnis online sesuai kebutuhanmu. Mulai dari manajemen gudang penyimpanan dan quality control, packing, pengiriman, manajemen stok barang, apapun jenis dan besarnya usahamu
                            </h6>
                            <button class="btn btn-try">Coba Gratis</button>
                            <button class="btn btn-white ml-4 btn-client">Klien Kami</button>
                        </div>
                    </div>
                    <div class="col-lg-7 hero__right mt-lg-0 mt-4">

                        <div class="swiper swiperBanner">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <img src="{{ asset('images/new-home/fulfillment.png') }}" alt="img">
                            </div>
                            <div class="swiper-slide">  <img src="{{ asset('images/new-home/marketplace-integration.png') }}" alt="img"></div>
                            <div class="swiper-slide">  <img src="{{ asset('images/new-home/tipbox.png') }}" alt="img"></div>

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
    <section class="home__fitur">

        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
            <div class="inner__container">
              <div style="height: 35px;">

              </div>
                <h2 class="text-center">Layanan <span>gudangin</span> untuk kamu</h2>

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-1.png') }}" alt="">
                                <h6>Integrasi toko online dari beberapa marketplace sekaligus</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-2.png') }}" alt="">
                                <h6>Agregasi SKU Produk, data orderan/transaksi, jumlah pembeli dan data pembeli</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-lg-0 mb-3">
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
    <section class="home__benefit">
        <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">
        <div class="container" style="position: relative; z-index: 3" data-aos="fade-up">
            <div class="inner__container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 home__benefit_left">
                        <h4>#gudanginAja</h4>
                        <h2>Dukungan <span>gudangin</span> untukmu</h2>

                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/new-home/dukungan-order.png') }}" alt="" class="dukungan-img">
                                <h5>Order Management</h5>
                                <h6>Kamu buka hape aja, kita yang atur proses orderannya! Dengan <span>gudangin</span> proses order jadi mudah!
                                </h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/new-home/dukungan-stock.png') }}" alt="" class="dukungan-img">
                                <h5>Product and Inventory Aggregation</h5>
                                <h6>Punya beberapa toko di beda-beda platform? Pusing karena barang suka habis karena susah hitungnya? Pusing stok opname? Tenang aja, <span>gudangin</span> bisa bantu kamu!
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 home__benefit_right">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/new-home/dukungan-one-stop.png') }}" alt="" class="dukungan-img">
                                <h5>One Stop Packing Management System</h5>
                                <h6>Aduh ngurus pengiriman, retur dll itu katanya bikin pusing. Pakai aja <span>gudangin</span>, kita yang atur packing dan pengiriman yang memusingkan itu!
                                </h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/new-home/dukungan-chat.png') }}" alt="" class="dukungan-img">
                                <h5>Integrated Chatting</h5>
                                <h6>Kelamaan balas chat di marketplace karena kebanyakan toko? Sudah tidak jaman!! Yuk pakai <span>gudangin</span>, tinggal buka websitenya dan chat ke semua marketplace! </h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img  src="{{ asset('images/new-home/dukungan-analytics.png') }}" alt="" class="dukungan-img">
                                <h5>Analytics</h5>
                                <h6>Mau tau performa tokomu untuk bulan ini? Mau tau apa yang mau diimprove? Pake <span>gudangin</span> aja, kita sudah punya sistem analytics yang canggih buat liat performa kamu kapan pun dan dimana pun! </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home__benefit home_mengapa" data-aos="fade-up">
      <div style="height: 35px;">

      </div>
        <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">

        <h1 style="font-weight: 700" class="mb-4 text-center">Mengapa <span>gudangin</span>?</h1>
        <!-- <div class="swiper swiperWhy">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              @component('component.why-card')
                @slot('url')
                  {{asset('images/client/gudangin.png')}}
                @endslot
                @slot('id')
                 1
                @endslot
                @slot('title')
                  Product and Inventory Aggregation
                @endslot
                @slot('details')
                  <p class="details">
                      Memudahkanmu untuk menghitung stok.
                  </p>
                  <ul class="details">
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                    <li>Setiap produk serupa yang terkoneksi</li>
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                  </ul>
                @endslot
              @endcomponent
            </div>
            <div class="swiper-slide">

              @component('component.why-card')
              @slot('url')
                {{asset('images/client/gudangin.png')}}
              @endslot
                @slot('id')
                 2
                @endslot
                @slot('title')
                Order Management
                @endslot
                @slot('details')
                <p class="details">
                    Memudahkanmu untuk memanage pesanan dari berbagai toko dengan berbagai e-commerce
                </p>
                  <ul class="details">
                    <li>Semue Pesanan akan muncul pada satu dashboard tanpa perlu login ke masing-masing toko</li>
                    <li>Pesananmu akan terkonfirmasi</li>
                    <li>Mengetahui update dan detail pesanan</li>

                  </ul>
                @endslot
              @endcomponent

            </div>
            <div class="swiper-slide">
              @component('component.why-card')
              @slot('url')
                {{asset('images/client/gudangin.png')}}
              @endslot
                @slot('id')
                 1
                @endslot
                @slot('title')
                  One Stop Packing Management
                @endslot
                @slot('details')
                <p class="details">
                    Pesananmu akan selesai dikemas dalam 5 menit dengan menitipkan barangmu di gudangin.
                </p>
                  <ul class="details">
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                    <li>Setiap produk serupa yang terkoneksi</li>
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                    <li>Produk yang sama dapat kamu taruh di platform e-commerce dan toko yang berbeda</li>
                  </ul>
                @endslot
              @endcomponent
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div> -->
        <div class="swiper swiperWhy">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur1.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset('images/landing-page/fitur_b1.png') }}" alt="gudangin">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="number mr-3">
                                        01
                                    </div>
                                    <div>
                                        <h5>
                                            Product & Inventory Aggregation
                                        </h5>
                                        <p class="muted">
                                            Integrasikan produk dan stok yang ada pada toko e-commercemu dan semuanya
                                            akan
                                            terhubung secara otomatis
                                        </p>
                                        <div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Produk yang sama dapat kamu taruh pada platform e-commerce
                                                    dan toko yang
                                                    berbeda
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Setiap produk serupa yang terkoneksi pada induk produk di
                                                    gudangin akan
                                                    memiliki jumlah yang sama
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Menambah, memperbaharui, dan mengatur produk pada
                                                    e-commerce yang berbeda dalam satu dashboard
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>
                                                <p>
                                                    Notifikasi untuk restok saat stok barang sudah menipis
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur2.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset('images/landing-page/fitur_b2.png') }}" alt="gudangin">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="number mr-3">
                                        02
                                    </div>
                                    <div>
                                        <h5>
                                            Order Management
                                        </h5>
                                        <p class="muted">
                                            Memudahkanmu untuk memanage pesanan dari berbagai toko dengan berbagai
                                            e-commerce
                                        </p>
                                        <div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Semua pesanan akan muncul pada satu dashboard tanpa perlu login ke
                                                    masing masing toko
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Pesanan akan terkonfirmasi secara otomatis
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Mengetahui update dan detail dari setiap pesanan dalam satu
                                                    dashboard
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur3.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset('images/landing-page/fitur_b3.png') }}" alt="gudangin">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="number mr-3">
                                        03
                                    </div>
                                    <div>
                                        <h5>
                                            One Stop Packing Management System
                                        </h5>
                                        <p class="muted">
                                            Pesananmu akan selesai dikemas dalam 5 menit dengan menitipkan barangmu di
                                            gudangin
                                        </p>
                                        <div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Pesanan akan terkonfirmasi selesai dikemas kurang dari 5 menit
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Meningkatkan statistik peringkat toko dengan pemrosesan pesanan yang
                                                    cepat
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Lacak pesanan pelanggan hanya dalam satu dashboard
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur4.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset('images/landing-page/fitur_b4.png') }}" alt="gudangin">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="number mr-3">
                                        04
                                    </div>
                                    <div>
                                        <h5>
                                            Integrated Chatting
                                        </h5>
                                        <p class="muted">
                                            Menghubungkanmu dengan semua pelanggan dari toko dan e-commerce yang berbeda
                                            dalam satu dashboard
                                        </p>
                                        <div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Semua obrolanmu dengan pelanggan dapat kamu akses di dalam satu
                                                    dashboard
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Tidak perlu login ke setiap toko untuk membalas chat satu per satu
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Meningkatkan statistik peringkat toko dengan pembalasan chat yang
                                                    cepat
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur5.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset('images/landing-page/fitur_b5.png') }}" alt="gudangin">
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-start">
                                    <div class="number mr-3">
                                        05
                                    </div>
                                    <div>
                                        <h5>
                                            Analytics
                                        </h5>
                                        <p class="muted">
                                            Analisa perkembangan setiap toko dari berbagai e-commerce berbeda dalam satu
                                            dashboard
                                        </p>
                                        <div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Statistik toko, produk, operasional, dan pembeli dapat Anda lihat
                                                    untuk
                                                    mengetahui perkembangan toko
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Data yang diperoleh dapat digunakan untuk meningkatkan performa dan
                                                    kinerja toko
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div style="height: 35px;">

        </div>
    </section>

    <section class="home__works">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div class="row">
                    <div class=" col-lg-4 home__works_left">
                        <h4>#gudanginAja</h4>
                        <h2>Lokasi <span>gudangin</span> di indonesia</h2>
                        <h6>Gudangin
                            hadir untuk memudahkan operasional bisnis online sesuai kebutuhanmu. yuk lihat jangkauan gudangin!</h6>

                    </div>
                    <div class=" col-lg-8">
                      <div class="w-100 position-relative">
                        <div class=" marker marker-jakarta" data-type='jakarta'  data-toggle="tooltip" data-html="true" data-placement="top" title="Ruko Crystal 8 No. 17 <br>Alam Sutera, Tangerang Selatan <br>Banten 15320">
                          <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <img src="{{asset('images/new-home/indo-map.png')}}" alt="" class="w-100">
                      </div>

                    </div>
                    <!-- <div class="col-lg-5 home__works_right">
                        <button class="sec" data-toggle="modal" data-target="#exampleModal">Pelajari
                            Sekarang</button>
                        <button class="prm">Gabung Sekarang</button>
                    </div> -->
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
    <section class="home__fitur home__category">
        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
            <div class="inner__container">
              <div style="height: 35px;">

              </div>


                <div class="row">
                    <div class="col-md-7 order-md-1 order-2">
                      <div class="row align-items-center">

                        @component('component.category-card')
                          @slot('fontawesome')
                            fas fa-heart
                          @endslot
                          @slot('color')
                            prim
                          @endslot
                          @slot('title')
                            Kecantikan

                          @endslot
                        @endcomponent

                        @component('component.category-card')
                          @slot('fontawesome')
                          fas fa-mobile-alt
                          @endslot
                          @slot('color')
                            prim
                          @endslot
                          @slot('title')
                            Elektronik dan Gadget
                          @endslot
                        @endcomponent
                        @component('component.category-card')
                          @slot('fontawesome')
                            fas fa-utensils
                          @endslot
                          @slot('color')
                            prim
                          @endslot
                          @slot('title')
                            Makanan dan Minuman

                          @endslot
                        @endcomponent
                          @component('component.category-card')
                            @slot('fontawesome')
                              fas fa-briefcase-medical
                            @endslot
                            @slot('color')
                              prim
                            @endslot
                            @slot('title')
                              Kesehatan
                            @endslot
                        @endcomponent
                        @component('component.category-card')
                          @slot('fontawesome')
                            fas fa-baby-carriage
                          @endslot
                          @slot('color')
                            prim
                          @endslot
                          @slot('title')
                            Ibu dan Anak
                          @endslot
                        @endcomponent
                        @component('component.category-card')
                          @slot('fontawesome')
                            fas fa-home
                          @endslot
                          @slot('color')
                            prim
                          @endslot
                          @slot('title')
                            Alat Rumah Tangga
                          @endslot
                        @endcomponent
                      </div>
                    </div>
                    <div class="col-md-5 order-md-2 order-1 mb-md-0 mb-4">
                        <h4>#gudanginAja</h4>
                      <h2>Apa aja  barang yang sudah ditangani <span>gudangin</span>?</h2>
                      <h6>Banyak banget barang yang sudah ditangani <span>gudangin</span>, dari sektor baju sampai makanan pun bisa! Kapan lagi ada perusahaan yang sefleksibel ini! </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="home__solution">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div class="row align-items-center">

                    <div class="col-lg-6 home__solution_right">
                        <h4>#gudanginAja</h4>
                        <h2>Klien yang sudah percaya ke <span>gudangin</span>!</h2>

                    </div>
                    <div class="col-lg-6 home__solution_left">
                        <img src="{{ asset('images/illustration/solution.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="home__problem section-klien" data-aos="fade-up">
      <div style="height: 50px;">

      </div>
        <h2 style="margin-bottom: 10px;">Siapa saja<span> klien <strong>gudangin</strong></span>?</h2>
        <div class="container">
          <div class="d-flex justify-content-center w-100">
            <p style="max-width: 800px; text-align: center" >Integritas kami merupakan hal yang paling krusial di bisnis.
              Oleh karena itu, klien-klien kami disini adalah bukti kami tetap menjaga integritas kami.</p>
          </div>
        </div>

        <div id="problem_group" style="overflow: hidden; margin-bottom: 15px">
            <div class="problem_wrap">

                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/bardi.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/acaraki.png')}}" alt="">
                        </div>
                    </div>
                </div>


                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/whw.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/delicute.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" >
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/WGM.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/gwiyomi.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/warisan.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/bardi.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/acaraki.png')}}" alt="">
                        </div>
                    </div>
                </div>


                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/whw.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/delicute.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" >
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/WGM.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/gwiyomi.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/warisan.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="problem_group-2" style="overflow: hidden; margin-bottom: 15px">
            <div class="problem_wrap">

                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/lasegar.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/lpcb.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/obida.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/siang-pure.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/sweet.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/lasegar.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/lpcb.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/obida.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/siang-pure.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('images/client/sweet.png')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div style="height: 50px;">

        </div>

    </section>








    <!-- <section class="home__footer" data-aos="fade-up">
        <div class="container">
            <div class="inner__container">
                <div class="card">
                    <div class="card-body">
                        <p>Kamu stay at home kembangin bisnisnya</p>
                        <h2>Biar Kami yang <span>kelola dan kembangkan</span> usaha online Anda!</h2>
                        <button data-toggle="modal" data-target="#exampleModal" class="btn">Coba Gratis <i
                                class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="home__benefit section-form " data-aos = "fade-up">
      <div style="height: 55px;">

      </div>
      <!-- <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn"> -->
      <div class="container">
        <h1 class="text-center mb-4" style="font-weight: 700" >Diskusi Dengan  <span> Team<strong> gudangin</strong></span></h1>
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
              <form class=" register__section" method="POST" action="{{route('makeDiscussion')}}" style="position: relative">
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
                                placeholder="Nomor Whatsapp Anda" required
                                onkeypress="clearError('errWa')" />
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
                                placeholder="Nama Perusahaan" style="border-right: transparent" required
                               />
                            <span id="errCompany" class="d-none" style="font-size: 12px; color: #FF0000">Nomor
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
                            <div class="input-group-prepend"><span class="input-group-text"><img src="{{ asset('images/icons/email.svg') }}" alt=""></span></div>
                            <!-- <input id="date" type="date" class="form-control" name="date"
                                placeholder="Silahkan masukkan tanggal yang diinginkan"
                                 /> -->
                                 <textarea name="message" rows="8" cols="25" class="form-control" placeholder="message" required></textarea>
                        </div>
                        <span id="errMessage" class="d-none" style="font-size: 12px; color: #FF0000">Pesan tidak boleh kosong</span>
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
                    <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdLM1UeAAAAANIPJEOY3Bo_7bysZ5pSdgMMkyc5"></div>
                    <button class="btn btn-prim btn-bigger mt-2" id="registerBtn" disabled
                        >Join Now</button>

                    <!-- <div class="text-center my-3">
                        <p>Sudah Punya Akun? <a href="">Log In</a></p>
                    </div> -->

                </div>
            </form>

          </div>
        </div>

      </div>
      <div style="height: 70px;">

      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body home__modal">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <div class="row justify-content-center">
                        <div class="col-lg-4 text-center">
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
                        <div class="col-lg-4 text-center">
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
                        <div class="col-lg-4 text-center">
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
    </div>

    <div class="modal fade" id="modalData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header justify-content-center" >
            <h5 class="modal-title text-center" style="color:#e36d1c"  id="modalLabel">Gudangin Area Jabodetabek</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>
          <div class="modal-body">
            <div class=" row align-items-center">
              <div class="col-md-6">
                <img src="{{ asset('images/navbar_logo.svg') }}" alt="" class="w-100">
              </div>
              <div class="col-md-6">
                <div class="alamat-modal mt-lg-0 mt-md-3">

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
            </div>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-primary btn-prim" style="border:none" data-dismiss="modal" aria-label="Close">Close</button>
          </div>
        </div>
      </div>
    </div>
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
    <script>
        var swiper = new Swiper(".swiperWhy", {
            slidesPerView: 3.5,
            spaceBetween: 30,
            centeredSlides: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                1440: {
                    slidesPerView: 3,
                },
                768: {
                    slidesPerView: 1.5,
                },
                425: {
                    slidesPerView: 1.25,
                },
                375: {
                    slidesPerView: 1.25,
                },
                320: {
                    slidesPerView: 1,
                },
                // when window width is <= 768px
            }
        });
    </script>
    <!-- <script>
      var swiper = new Swiper(".swiperWhy", {
        slidesPerView: 1,
        spaceBetween: 15,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop: true,
        autoplay: {
          delay: 10000,
        },
        breakpoints: {
    // when window width is >= 320px

        // when window width is >= 480px
        768: {
          slidesPerView: 2,
          spaceBetween: 30
        },
        // when window width is >= 640px
        996: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      }
      });
      section-form
    </script> -->
    <script type="text/javascript">
    $('.btn-client').click(function() {
          $('html, body').animate({
              scrollTop: ($(".section-klien").offset().top) - 160
          }, 1500);
      });
      $('.btn-try').click(function() {
            $('html, body').animate({
                scrollTop: ($(".section-form").offset().top) - 160
            }, 1500);
        });
    </script>
    <script type="text/javascript">
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
    <script type="text/javascript">
      $(function(){
        $('.marker').click(function(){
          //$('#modalData').modal('toggle');
        })
      })
    </script>
    <script type="text/javascript">
        function recaptchaCallback(){
            $('#registerBtn').removeAttr('disabled');
        }
    </script>
    <script>
        $('.register__section').on('submit', function(e){

          let errorEmail = false;
          let errorName = false;
          let errorPhone = false;
          let errorCompany = false;
          let errorMessage = false;

          let email = $('input[name="email"]').val() ?? "";
          let name = $('input[name="name"]').val() ;
          let phone = $('input[name="whatsapp"]').val();
          let company = $('input[name="company"]').val();
          let message = $('textarea[name="message"]').val();

          var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

          if (!email.match(mailformat) ) {
            console.log("wrong email");
            errorEmail = true;
            $('#errEmail').removeClass('d-none')

          }else{
            $('#errEmail').addClass('d-none');
          }

          if (name.length < 2) {
            console.log("name empty");
            errorName = true;
            $('#errName').removeClass('d-none');
          }else{
            $('#errName').addClass('d-none');
          }
          if (phone.length < 9 ) {
            console.log("phone error");
            errorPhone = true;
            $('#errWa').removeClass('d-none');
          }else{
            $('#errWa').addClass('d-none');
          }

          if (company.length< 3) {
            console.log("company error");
            errorCompany = true;
            $('#errCompany').removeClass('d-none');
          }else{
            $('#errCompany').addClass('d-none');
          }

        if (message.length < 3) {
          console.log("message empty");
          errorMessage = true;
          $('#errMessage').removeClass('d-none');
        }else{
          $('#errMessage').addClass('d-none');
        }


          if(errorName || errorEmail || errorPhone ||errorCompany || errorMessage){
            console.log("ONE OF THEM IS EMPTY/WRONG");
            e.preventDefault();
          }
        })

    </script>
@endsection
