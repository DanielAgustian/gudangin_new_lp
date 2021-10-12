@extends('master')

@section('landing-content')

    <div class="home-hero">
        <img src="{{ asset('images/waveElement.png') }}" class="background-image">
        <div class="container">
            <div class="container-child">
                <h1>Jualan Lebih Banyak,<br>Kirim Lebih Cepat Kemanapun,<br>Tetap Lebih Hemat</h1>
                <h5><span class="orange-color">gudangin </span>urus semua orderan tokomu <span class="black-color">siap
                        kirim dalam waktu 5 menit!</span></h5>
                <button class="button-orange mt-3">COBA GRATIS</button>
            </div>

        </div>
    </div>

    <div class="home-contents">
        <img src="{{ asset('images/waveElement-2.png') }}" alt="" class="img-bg-1">
        <img src="{{ asset('images/waveElement-3.png') }}" alt="" class="img-bg-2">

        <div class="home-division">

            <div class="container mb-50">
                <div class="container-child">
                    <h3 class="title-division text-center">Kami paham permasalahanmu jalanin bisnis online</h3>

                </div>

            </div>
            <div class="promo-carousel" id="grouploop-1">

                <div class="item-wrap">
                    <div class="item active">
                        <p>Admin berulang-ulang login-logout dari satu marketplace ke marketplace lain untuk membalas chat /
                            pertanyaan pelanggan</p>
                    </div>
                    <div class="item">
                        <p>Omzet usaha belum cukup untuk menambah infrastruktur seperti rak-rak apalagi penambahan gudang
                        </p>
                    </div>
                    <div class="item">
                        <p>Habis waktu berjam-jam dalam sehari untuk pengemasan (packing) dan mencetak berlembar-lembar resi
                            dan label</p>
                    </div>
                </div>

            </div>
            <div class="promo-carousel" id="grouploop-2">

                <div class="item-wrap">
                    <div class="item active">
                        <p>Input secara manual, sering terjadi selisih stok saat stok opname</p>
                    </div>
                    <div class="item">
                        <p>Nambah barang /toko = nambah admin. Biaya operasional naik terus seiring dengan naiknya omzet</p>
                    </div>

                    <div class="item">
                        <p>Admin berulang-ulang login-logout dari satu marketplace ke marketplace lain untuk membalas chat /
                            pertanyaan pelanggan</p>

                    </div>
                </div>

            </div>
        </div>

        <div class="home-division">
            <div class="container">
                <div class="container-child">
                    <h5 class="text-explain-title">Mau Cepat, Mudah, Praktis menjalankan usaha online?</h5>
                    <h3 class="title-division">Sini biar <span>gudangin</span> yang urusin <br class="responsive-br"> tanpa
                        perlu keringetan!</h3>
                    <p class="p-explain">gudangin hadir untuk memudahkan operasional bisnis online sesuai kebutuhanmu.
                        Mulai dari manajemen gudang penyimpanan dan quality controlnya, packing, pengiriman, manajemen stok
                        barang, apapun jenis dan besarnya usahamu. Jadi kamu bisa fokus ke pengembangan bisnis dan inovasi
                        produk</p>
                    <a href="" class="link">
                        <p>Pelajari lebih lanjut mengenai Cara Kerja gudangin <img
                                src="{{ asset('images/icons/arrow-right.svg') }}" alt=""></p>
                    </a>
                </div>

            </div>

        </div>

        <div class="home-division" id="benefit-gudangin">
            <div class="container">
                <div class="container-child">
                    <div class="box">
                        <h3 class="title-division">
                            Benefit <span>gudangin</span> untukmu
                        </h3>
                        <div class="row">
                            <div class="col-lg-2 col-sm-3">
                                <div class="flex-number-box">
                                    <div class="number-box">
                                        <img src="{{ asset('images/icons/number-bg.png') }}" alt="">
                                        <p>1</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-10 col-sm-9">
                                <p class="title-child">5 menit maksimal!</p>
                                <p class="p-explain">Lamanya waktu yang diperlukan oleh sistem automasi untuk memproses
                                    orderan dari saat terjadi di marketplace hingga tahap siap di pick-up kurir
                                </p>
                            </div>
                            <div class="col-lg-2 col-sm-3">
                                <div class="flex-number-box">
                                    <div class="number-box">
                                        <img src="{{ asset('images/icons/number-bg.png') }}" alt="">
                                        <p>2</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-10 col-sm-9">
                                <p class="title-child">100% orderan terproses</p>
                                <p class="p-explain">Tanpa input manual, keterlambatan maupun kesalahan pemrosesan
                                    orderan
                                    yang disebabkan oleh human-error terminimalisir
                                </p>
                            </div>
                            <div class="col-lg-2 col-sm-3">
                                <div class="flex-number-box">
                                    <div class="number-box">
                                        <img src="{{ asset('images/icons/number-bg.png') }}" alt="">
                                        <p>3</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-10 col-sm-9">
                                <p class="title-child">80%-90% peningkatan efisiensi pemrosesan pesanan</p>
                                <p class="p-explain">90% pengurangan penggunaan space ruangan untuk operasional toko
                                    dan
                                    80% penghematan biaya (upah) admin untuk operasional toko
                                </p>
                            </div>
                            <div class="col-lg-2 col-sm-3">
                                <div class="flex-number-box">
                                    <div class="number-box">
                                        <img src="{{ asset('images/icons/number-bg.png') }}" alt="">
                                        <p>4</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-10 col-sm-9">
                                <p class="title-child">Efektivitas managemen stok</p>
                                <p class="p-explain">Manajemen Stok yang lebih rapih dan terkontrol, karena inbound dan
                                    outbound terjadi secara real-time
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-division" id="fitur-gudangin">
            <div class="container">
                <div class="container-child">
                    <h3 class="title-division text-center">Fiturnya <span>gudangin</span></h3>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box">
                                <img src="{{ asset('images/icons/products-icon-13.png') }}" alt="icon">

                                <p class="title-child">Integrasi toko online dari beberapa marketplace sekaligus</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box">
                                <img src="{{ asset('images/icons/products-icon-13.png') }}" alt="icon">

                                <p class="title-child">Agregasi SKU Produk, data orderan/transaksi, jumlah pembeli dan
                                    data
                                    pembeli</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="box text-center">
                                <img src="{{ asset('images/icons/products-icon-13.png') }}" alt="icon">

                                <p class="title-child">Agregasi chat dari beberapa marketplace sehingga admin tidak perlu
                                    lagi login-logout banyak akun</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="home-division">

            <div class="container">
                <div class="stay-at-home-container">
                    <h5 class="text-explain-title"> Kamu stay at home kembangin bisnisnya</h5>
                    <h3 class="title-division">
                        Biar Kami yang urusin <br>
                        Pick, Pack, Ship Dagangan kamu!
                    </h3>
                    <div class="flex">
                        <button class="button-orange">Ayo mulai, GRATIS!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


@section('pageJS')
    <script src="{{ asset('plugin/marquee-scroll/dist/grouploop-1.0.0.min.js') }}"></script>
    <script>
        $('#grouploop-1').grouploop({
            // animation speed
            velocity: 1,
            // false = from left to right
            forward: true,
            // default selectors
            childNode: ".item",
            childWrapper: ".item-wrap",
            // enable pause on hover
            pauseOnHover: true,
            // stick the first item
            stickFirstItem: false,
            // callback
            complete: null
        });

        $('#grouploop-2').grouploop({
            // animation speed
            velocity: 1,
            // false = from left to right
            forward: false,
            // default selectors
            childNode: ".item",
            childWrapper: ".item-wrap",
            // enable pause on hover
            pauseOnHover: true,
            // stick the first item
            stickFirstItem: false,
            // callback
            complete: null
        });
    </script>
@endsection
