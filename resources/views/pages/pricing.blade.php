@extends('master')

@section('cssinline')
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
@endsection

@section('content')
    <section class="pricing__hero">
        <div class="container">
            <div class="inner__container">
                <h6>pricing plan</h6>
                <h1>gudangin</h1>

                <p>Sama <strong style="color: #ffffff">gudangin</strong>, kamu hanya perlu membayar sesuai dengan kebutuhan
                    dan
                    besarnya usaha kamu saat
                    ini.</p>
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

    <section class="pricing__card">
        <div class="container">
            <div class="inner__container">
                <div class="d-sm-none d-block">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div class="d-flex justify-content-center">
                                        <div class="text-center">
                                            <span class="text-center">Starter</span>
                                            <h3 class="text-center">Rp 239,200</h3>
                                            <p class="text-center">Biaya bulanan</p>

                                            <ul class="text-left" style="margin-top: 2rem">
                                                <li>Handling, QC & packing fee</li>
                                                <li>Marketplace integration</li>
                                                <li>Terhubung ke toko hingga 5 Toko</li>
                                            </ul>

                                            <div style="margin-top: 25px">
                                                <button class="btn btn_swiper_primary">Coba Sekarang</button>
                                                <br>
                                                <span style="font-size: 12px;">atau <a href="#"
                                                        style="color: inherit;text-decoration: underline">Beli
                                                        Sekarang</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="bestt">
                                    <div class="d-flex justify-content-center">
                                        <div class="text-center">
                                            <div class="best_label">Best Value</div>
                                            <h5 style="color:#ffffff">Premium</h5>
                                            <h3 style="color:#ffffff">Rp 559,200</h3>
                                            <span style="color:#ffffff">Biaya bulanan</span>

                                            <ul class="text-left" style="margin-top: 2rem">
                                                <li>Handling, QC & packing fee</li>
                                                <li>Marketplace integration</li>
                                                <li>Terhubung ke toko hingga 5 Toko</li>
                                            </ul>

                                            <div style="margin-top: 25px">
                                                <button
                                                    style="padding: 8px; border-radius: 5px;border: 1px solid #fff; background:#f7761e; color: #fff;font-size: 12px;">Coba
                                                    Sekarang</button>
                                                <br>
                                                <span style="font-size: 12px;color:#ffffff">atau <a href="#"
                                                        style="color:#ffffff">Beli
                                                        Sekarang</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div>
                                    <div class="d-flex justify-content-center">
                                        <div class="text-center">
                                            <h5 style="color: #BF9000;">Business</h5>
                                            <h3>Rp 1,119,200</h3>
                                            <span>Biaya bulanan</span>

                                            <ul class="text-left" style="margin-top: 2rem">
                                                <li>Handling, QC & packing fee</li>
                                                <li>Marketplace integration</li>
                                                <li>Terhubung ke toko hingga 5 Toko</li>
                                            </ul>

                                            <div style="margin-top: 25px">
                                                <button
                                                    style="padding: 8px;font-size: 12px;border-radius: 5px;background: #BF9000; border: transparent">Coba
                                                    Sekarang</button>
                                                <br>
                                                <span style="font-size: 12px;">atau <a href="#" style="color: #BF9000;">Beli
                                                        Sekarang</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <div class="card d-sm-block d-none">
                    <div class="card-body">
                        <div class="row align-items-center text-center pricing__amount">
                            <div class="col-md-3 col-12 box_time">
                                <div class="time">
                                    1 Month
                                </div>
                                <div class="time">
                                    6 Month
                                </div>
                                <div class="time">
                                    1 Year
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <h5>Starter</h5>
                                <h3>Rp 239,200</h3>
                                <span>Biaya bulanan</span>
                                <div style="margin-top: 25px">
                                    <button>Coba Sekarang</button>
                                    <br>
                                    <span>atau <a href="#" style="color: #000000;">Beli Sekarang</a></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-12 bestt">
                                <div class="best_label">Best Value</div>
                                <h5 style="color:#ffffff">Premium</h5>
                                <h3 style="color:#ffffff">Rp 559,200</h3>
                                <span style="color:#ffffff">Biaya bulanan</span>
                                <div style="margin-top: 25px">
                                    <button style="border: 1px solid #fff; background:#f7761e; color: #fff ">Coba
                                        Sekarang</button>
                                    <br>
                                    <span style="color:#ffffff">atau <a href="#" style="color:#ffffff">Beli
                                            Sekarang</a></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <h5 style="color: #BF9000;">Business</h5>
                                <h3>Rp 1,119,200</h3>
                                <span>Biaya bulanan</span>
                                <div style="margin-top: 25px">
                                    <button style="background: #BF9000; border: transparent">Coba Sekarang</button>
                                    <br>
                                    <span>atau <a href="#" style="color: #BF9000;">Beli Sekarang</a></span>
                                </div>
                            </div>
                        </div>

                        <div class="row align-items-center text-center d-sm-none mb-4">
                            <div class="col-3">

                            </div>
                            <div class="col-3">
                                <h6>Starter</h6>
                            </div>
                            <div class="col-3">
                                <h6>Best Value</h6>
                            </div>
                            <div class="col-3">
                                <h6>Business</h6>
                            </div>
                        </div>

                        <div class="row align-items-center text-center pricing__grey">
                            <div class="col-3">
                                <h6 class="text-left">Handling, QC & Packing fee</h6>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="row align-items-center text-center"
                            style="padding: 1rem; margin-top: 10px; margin-bottom: 10px">
                            <div class="col-3">
                                <h6 class="text-left">Marketplace Integration</h6>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="col-3">
                                <i class="fas fa-check"></i>
                            </div>
                        </div>
                        <div class="row align-items-center text-center pricing__grey">
                            <div class="col-3">
                                <h6 class="text-left">Terhubung ke toko hingga</h6>
                            </div>
                            <div class="col-3">
                                <h6>5 Toko</h6>
                            </div>
                            <div class="col-3">
                                <h6>10 Toko</h6>
                            </div>
                            <div class="col-3">
                                <h6>100 Toko</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing__pack">
        <div class="container">
            <div class="inner__container">
                <h2>Packaging Cost per order</h2>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr class="text-center" style="font-size: 11px">
                                <td class="text-left"></td>
                                <td>Max. 17 x 9 x 6 cm</td>
                                <td>Max. 20,8 x 13,8 x 12,3 cm</td>
                                <td>Max. 30 x 25 x 20 cm</td>
                                <td>Max. 45 x 35 x 30 cm</td>
                                <td>Max. 50 x 50 x 50 cm</td>
                            </tr>
                            <tr class="text-center" style="background: #F7761E; color:#fff;font-family: gilroy-bold;">
                                <td class="text-left">PACKAGING TYPE</td>
                                <td>Super Kecil</td>
                                <td>Kecil</td>
                                <td>Sedang</td>
                                <td>Besar</td>
                                <td>Extra Besar</td>
                            </tr>
                            <tr class="text-center pricing__big">
                                <td class="text-left">Bubble Wrap</td>
                                <td>Rp1.300</td>
                                <td>Rp1.500</td>
                                <td>Rp2.000</td>
                                <td>Rp3.000</td>
                                <td>-</td>
                            </tr>
                            <tr class="text-center pricing__big">
                                <td class="text-left">Karton</td>
                                <td>Rp3.000</td>
                                <td>Rp3.500</td>
                                <td>Rp7.000</td>
                                <td>Rp13.000</td>
                                <td>-</td>
                            </tr>
                            <tr class="text-center pricing__big">
                                <td class="text-left">Kayu</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Rp260.000</td>
                                <td>Rp512.000</td>
                                <td>Rp774.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('pageJS')
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
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
@endsection
