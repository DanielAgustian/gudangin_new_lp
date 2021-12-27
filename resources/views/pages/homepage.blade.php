@extends('master')

@section('content')
    <section class="home__hero">
        <img src="{{ asset('images/ornament/hero-wave.svg') }}" alt="" class="home__hero_orn">
        <div class="container" style="position: relative; z-index: 3">
            <div class="inner__container">
                <div class="row align-items-center">
                    <div class="col-lg-6 hero__left">
                        <div class="home__hero_left">
                            <h5>gudangin</h5>
                            <h1>Jualan <strong>Lebih Banyak</strong> Kirim <strong>Lebih Cepat</strong> Kemanapun Tetap
                                <strong>Lebih Hemat</strong>
                            </h1>
                            <h6>urus semua orderan tokomu <br>
                                siap kirim dalam waktu 5 menit!
                            </h6>
                            <button class="btn">Coba Gratis <i class="fas fa-chevron-right"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6 hero__right">
                        <div class="home__hero_right">
                            <img src="{{ asset('images/illustration/hero.png') }}" alt="">
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

    <section class="home__problem" data-aos="fade-up">
        <h2>Kami paham <span><strong>permasalahanmu</strong></span> <br> <span>jalanin bisnis online</span></h2>

        <div id="problem_group" style="overflow: hidden; margin-bottom: 15px">
            <div class="problem_wrap">
                <div class="problem_item">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Nambah barang /toko = nambah admin.</span><br>Biaya operasional naik terus seiring
                                dengan
                                naiknya omzet
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Habis waktu berjam-jam dalam sehari</span><br>untuk pengemasan (packing) dan mencetak
                                berlembar-lembar
                                resi & label
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                Input secara manual, sering terjadi <span>selisih stok</span> saat stok opname
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Nambah barang /toko = nambah admin.</span><br>Biaya operasional naik terus seiring
                                dengan
                                naiknya omzet
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Habis waktu berjam-jam dalam sehari</span><br>untuk pengemasan (packing) dan mencetak
                                berlembar-lembar
                                resi & label
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                Input secara manual, sering terjadi <span>selisih stok</span> saat stok opname
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="problem_group-2" style="overflow: hidden; margin-bottom: 15px">
            <div class="problem_wrap">
                <div class="problem_item">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                Admin <span>berulang-ulang login-logout</span>
                                dari satu marketplace ke marketplace lain untuk membalas chat / pertanyaan pelanggan
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Omzet usaha belum cukup</span> untuk menambah infrastruktur seperti rak-rak apalagi
                                penambahan
                                gudang
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Nambah barang /toko = nambah admin.</span><br>Biaya operasional naik terus seiring
                                dengan
                                naiknya omzet
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                Admin <span>berulang-ulang login-logout</span>
                                dari satu marketplace ke marketplace lain untuk membalas chat / pertanyaan pelanggan
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Omzet usaha belum cukup</span> untuk menambah infrastruktur seperti rak-rak apalagi
                                penambahan
                                gudang
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="problem_item" style="margin-top: 50px">
                    <div class="card">
                        <div class="card-body">
                            <h6>
                                <span>Nambah barang /toko = nambah admin.</span><br>Biaya operasional naik terus seiring
                                dengan
                                naiknya omzet
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home__solution">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div class="row align-items-center">
                    <div class="col-lg-6 home__solution_left">
                        <img src="{{ asset('images/illustration/solution.png') }}" alt="">
                    </div>
                    <div class="col-lg-6 home__solution_right">
                        <h4>#gudanginAja</h4>
                        <h2>Sini biar <span>gudangin</span> yang urusin tanpa perlu keringetan!</h2>
                        <div class="home__solution_list">
                            <div class="solution_list_item">
                                <div class="sl_num">
                                    <img src="{{ asset('images/icons/1.svg') }}" alt="">
                                </div>
                                <div class="sl_text">
                                    <h6>Proses <span>lebih cepat</span></h6>
                                </div>
                            </div>
                            <div class="solution_list_item">
                                <div class="sl_num">
                                    <img src="{{ asset('images/icons/2.svg') }}" alt="">
                                </div>
                                <div class="sl_text">
                                    <h6>Jalani usaha <span>lebih mudah</span></h6>
                                </div>
                            </div>
                            <div class="solution_list_item">
                                <div class="sl_num">
                                    <img src="{{ asset('images/icons/3.svg') }}" alt="">
                                </div>
                                <div class="sl_text">
                                    <h6>Atur usaha onlinemu dengan <span>lebih praktis</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home__works">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div class="row">
                    <div class="col-lg-7 home__works_left">
                        <h4>#gudanginAja</h4>
                        <h2>Gimana sih <span>cara kerja gudangin?</span></h2>
                        <h6>Gudangin
                            hadir untuk memudahkan operasional bisnis online sesuai kebutuhanmu. Mulai dari manajemen gudang
                            penyimpanan dan quality controlnya, packing, pengiriman, manajemen stok barang, apapun jenis dan
                            besarnya usahamu.
                            Jadi kamu bisa fokus ke pengembangan bisnis dan inovasi produk</h6>
                    </div>
                    <div class="col-lg-5 home__works_right">
                        <button class="sec" data-toggle="modal" data-target="#exampleModal">Pelajari
                            Sekarang</button>
                        <button class="prm">Gabung Sekarang</button>
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

    <section class="home__fitur">
        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
            <div class="inner__container">
                <h2>Ini yang <span>gudangin</span> lakukan untuk kamu</h2>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-1.png') }}" alt="">
                                <h6>Integrasi toko online dari beberapa marketplace sekaligus</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/illustration/fitur-2.png') }}" alt="">
                                <h6>Agregasi SKU Produk, data orderan/transaksi, jumlah pembeli dan data pembeli</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
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
                    <div class="col-lg-6 home__benefit_left">
                        <h4>#gudanginAja</h4>
                        <h2>Benefit <span>gudangin</span> untukmu</h2>

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
            </div>
        </div>
    </section>

    <section class="home__footer" data-aos="fade-up">
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
@endsection


@section('pageJS')
    <script src="{{ asset('plugin/marquee-scroll/dist/grouploop-1.0.3.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

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
@endsection
