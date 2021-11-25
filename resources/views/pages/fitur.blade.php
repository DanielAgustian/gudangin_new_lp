@extends('master')

@section('content')
    <section class="pricing__hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h1>gudangin</h1>

                    <p>
                        Jualan Lebih Banyak, <br>
                        Kirim Lebih Cepat <br>
                        Kemanapun Tetap Lebih Hemat
                    </p>
                </div>
                <div class="col-md-6 col-12">

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

    <section class="home__problem fitur">
        <h2>Fitur <span>gudangin</span></h2>
        <p class="text-center">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus <br> sit amet luctus venenatis, lectus
            magna fringilla urna, porttitor
        </p>
        <div id="problem_group">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur1.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset("images/landing-page/fitur_b1.png") }}" alt="gudangin">
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
                                            Integrasikan produk dan stok yang ada pada toko e-commercemu dan semuanya akan
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
                <div class="col-lg-6 col-12">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur2.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset("images/landing-page/fitur_b2.png") }}" alt="gudangin">
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
                                                    Mengetahui update dan detail dari setiap pesanan dalam satu dashboard
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur3.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset("images/landing-page/fitur_b3.png") }}" alt="gudangin">
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
                <div class="col-lg-6 col-12">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur4.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset("images/landing-page/fitur_b4.png") }}" alt="gudangin">
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
                                                    Tidak perlu login ke setiap toko untuk membalas chat satu
                                                    per satu
                                                </p>
                                            </div>
                                            <div class="d-flex">
                                                <dot class="mr-2"></dot>

                                                <p>
                                                    Meningkatkan statistik peringkat toko dengan pembalasan chat yang cepat
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="fitur__item">
                        <div class="position-absolute corner__box" style="z-index: 1">
                            <img src="{{ asset('images/landing-page/fitur5.png') }}" alt="gudangin">
                        </div>
                        <div class="card position-relative">
                            <div class="bg__card_corner">
                                <img src="{{ asset("images/landing-page/fitur_b5.png") }}" alt="gudangin">
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
                                                    Statistik toko, produk, operasional, dan pembeli dapat Anda lihat untuk
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
        </div>
    </section>

    <section class="home__footer fitur" style="margin-top: 3rem">
        <div class="container">
            <div class="inner__container">
                <div class="card">
                    <div class="card-body">
                        <p>Kamu stay at home kembangin bisnisnya</p>
                        <h2>Biar Kami yang <span>kelola dan kembangkan</span> usaha online Anda!</h2>
                        <button class="btn">Coba Gratis <i class="fas fa-chevron-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pageJS')

@endsection
