@extends('master')

@section('content')
    <section class="fitur__hero">
        <div class="container">
            <div class="inner__container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2>gudangin</h2>
                        <h6>Jualan Lebih Banyak, <br>
                            Kirim Lebih Cepat <br>
                            Kemanapun Tetap Lebih Hemat
                        </h6>
                    </div>
                    <div class="col-lg-6"></div>
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

    <section class="fitur__desc">
        <h2>Fitur <span>gudangin</span></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna
            fringilla urna, porttitor</p>
    </section>

    <section class="fitur__item">

        <div id="pinContainer">
            <section class="panel one">
                <div class="card">
                    <div class="card-body">
                        <div class="fitem__img">
                            <img src="{{ asset('images/icons/fitur-1.png') }}" alt="">
                        </div>
                        <div class="d-flex">
                            <div class=" fitem_num">01</div>
                            <div class="">
                                <h5>Product & Inventory Aggregation</h5>
                                <h6>Integrasikan produk dan stok yang ada pada toko e-commercemu dan semuanya akan
                                    terhubung secara
                                    otomatis</h6>
                                <ul>
                                    <li>Produk yang sama dapat kamu taruh pada platform e-commerce dan toko yang berbeda
                                    </li>
                                    <li>Setiap produk serupa yang terkoneksi pada induk produk di gudangin akan memiliki
                                        jumlah yang
                                        sama
                                    </li>
                                    <li>Menambah, memperbaharui, dan mengatur produk pada
                                        e-commerce yang berbeda dalam satu dashboard
                                    </li>
                                    <li>Notifikasi untuk restok saat stok barang sudah menipis
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="panel two">
                <div class="card">
                    <div class="card-body">
                        <div class="fitem__img">
                            <img src="{{ asset('images/icons/fitur-2.png') }}" alt="">
                        </div>
                        <div class="d-flex">
                            <div class=" fitem_num">02</div>
                            <div class="">
                                <h5>Order Management</h5>
                                <h6>Memudahkanmu untuk memanage pesanan dari berbagai toko dengan berbagai e-commerce
                                </h6>
                                <ul>
                                    <li>Semua pesanan akan muncul pada satu dashboard tanpa perlu login ke masing masing
                                        toko</li>
                                    <li>Pesanan akan terkonfirmasi secara otomatis</li>
                                    <li>Mengetahui update dan detail dari setiap pesanan dalam satu dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="panel three">
                <div class="card">
                    <div class="card-body">
                        <div class="fitem__img">
                            <img src="{{ asset('images/icons/fitur-3.png') }}" alt="">
                        </div>
                        <div class="d-flex">
                            <div class="fitem_num">03</div>
                            <div>
                                <h5>One Stop Packing Management System</h5>
                                <h6>Pesananmu akan selesai dikemas dalam 5 menit dengan menitipkan barangmu di gudangin
                                </h6>
                                <ul>
                                    <li>Pesanan akan terkonfirmasi selesai dikemas kurang dari 5 menit
                                    </li>
                                    <li>Meningkatkan statistik peringkat toko dengan pemrosesan pesanan yang cepat
                                    </li>
                                    <li>Lacak pesanan pelanggan hanya dalam satu dashboard
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="panel four">
                <div class="card">
                    <div class="card-body">
                        <div class="fitem__img">
                            <img src="{{ asset('images/icons/fitur-4.png') }}" alt="">
                        </div>
                        <div class="d-flex">
                            <div class=" fitem_num">04</div>
                            <div class="">
                                <h5>Integrated Chatting </h5>
                                <h6>Menghubungkanmu dengan semua pelanggan dari toko dan e-commerce yang berbeda dalam
                                    satu dashboard</h6>
                                <ul>
                                    <li>Semua obrolanmu dengan pelanggan dapat kamu akses di dalam satu dashboard
                                    </li>
                                    <li>Tidak perlu login ke setiap toko untuk membalas chat satu
                                        per satu
                                    </li>
                                    <li>Meningkatkan statistik peringkat toko dengan pembalasan chat yang cepat
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="panel four">
                <div class="card">
                    <div class="card-body">
                        <div class="fitem__img">
                            <img src="{{ asset('images/icons/fitur-5.png') }}" alt="">
                        </div>
                        <div class="d-flex">
                            <div class=" fitem_num">05</div>
                            <div class="">
                                <h5>Analytics</h5>
                                <h6>Analisa perkembangan setiap toko dari berbagai e-commerce berbeda dalam satu
                                    dashboard</h6>
                                <ul>
                                    <li>Statistik toko, produk, operasional, dan pembeli dapat Anda lihat untuk
                                        mengetahui perkembangan toko
                                    </li>
                                    <li>Data yang diperoleh dapat digunakan untuk meningkatkan performa dan kinerja toko
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <section class="home__footer" style="background: #fffaf8">
            <div class="container">
                <div class="inner__container">
                    <div class="card" style="background: #E36D1C;">
                        <div class="card-body">
                            <p>Kamu stay at home kembangin bisnisnya</p>
                            <h2>Biar Kami yang <span>kelola dan kembangkan</span> usaha online Anda!</h2>
                            <button class="btn">Coba Gratis <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>



@endsection

@section('pageJS')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>


    <script>
        gsap.registerPlugin(ScrollTrigger);

        let sections = gsap.utils.toArray(".panel");

        gsap.to(sections, {
            xPercent: -100 * (sections.length - 1),
            ease: "none",
            scrollTrigger: {
                trigger: "#pinContainer",
                pin: true,
                scrub: 1,
                // base vertical scrolling on how wide the container is so it feels more natural.
                end: "+=3500",
            }
        });
    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> --}}

    {{-- <script>
        $(function() {

            var controller = new ScrollMagic.Controller();
            var wipeAnimation = new TimelineMax()
                // animate to second

                .to("#slideContainer", 1, {
                    x: "-40%"
                })
                // animate to third

                .to("#slideContainer", 2, {
                    x: "-80%"
                })
                // animate to forth

                .to("#slideContainer", 1, {
                    x: "-120%"
                })

                .to("#slideContainer", 1, {
                    x: "-160%"
                })

                .to("#slideContainer", 1, {
                    x: "-200%"
                })

            var scene = new ScrollMagic.Scene({
                    triggerElement: "#pinContainer",
                    triggerHook: "onLeave",
                    duration: "400%"
                })
                .setPin("#pinContainer")
                .setTween(wipeAnimation)
                .addIndicators()
                .addTo(controller);


        }())
    </script> --}}
@endsection
