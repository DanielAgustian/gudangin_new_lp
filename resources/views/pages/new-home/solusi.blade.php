@extends('master')

@section('cssinline')
    <link href="{{ asset('/css/pages/solusi.css') }}?v=0.2.5" rel="stylesheet" type="text/css">
    <!-- <link href="{{ asset('/css/pages/new-style.css') }}?v=0.4.8" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/pages/lp.css')}}?v=0.0.2.9">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
      />
@endsection

@section('content')
    <section class="pricing__hero faq" style="z-index: 3;">
        <div class="container text-left">
            <h1>Solusi gudangin</h1>

            <p style="color: white">
                Gudangin menjadi solusi bagi bisnis anda.
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
    <section class="home__benefit home__category">
      <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">
        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
          <div style="height:35px;">

          </div>
          <h6 style="font-weight: 300" class="text-center">Apa itu <span>Cloud Warehouse</span> ?</h6>
          <h2 class="text-center"> <strong>Cloud Warehouse</strong></h2>
          <p style="text-align:justify" class="text-center mb-2">Cloud Warehouse <span>gudangin</span> akan mengintegrasikan data stok barang di seluruh lokasi gudang yang terintegrasi dengan toko-toko dari beberapa platform marketplace, dan memastikan stok barang selalu tersedia untuk memenuhi kebutuhan konsumen akhir (pelanggan), sekaligus pencatatan database konsumen akhir (pelanggan) bagi para pemilik brand (Principal) di seluruh Indonesia.</p>

          <div class="row mt-4 justify-content-center">
            <div class="col-lg-5 col-md-8">
              <img src="{{ asset('images/solusi/cloud-warehouse.png') }}" alt="" class="w-100">
            </div>
            <div class="col-lg-7">
              <h5 style="color: #808080; font-weight: 700" class="text-center my-3" >Cek <span>keunggulan</span>  Cloud Warehouse milik <span>gudangin</span></h5>
              <div class="row">
                <div class="col-md-6 col-12 h-100">
                  <div class="d-flex justify-column-center flex-column">
                    <div class="card card-solusi h-100">
                      <div class="card-body">
                        <h6>Solusi end-to-end untuk <span style="font-weight: 800">digitalisasi gudang dan proses bisnis</span>  yang mengoptimalkan produktivitas bisnis online Anda</h6>
                      </div>
                    </div>
                  </div>
                  <div class="d-md-none d-flex justify-column-center flex-column">
                    <div class="card card-solusi h-100">
                      <div class="card-body">
                        <h6>Sebuah aplikasi <span style="font-weight: 800"> omni-channel e-commerce management platform dan gudang canggih </span> yang terintegrasi dengan teknologi sehingga menciptakan efektivitas dan efisiensi proses jual beli di marketplace</h6>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-column-center flex-column">
                    <div class="card card-solusi h-100">
                      <div class="card-body">
                        <h6>Dengan <span>Gudangin</span> , pesanan yang masuk akan otomatis terproses dan siap dikirim dalam waktu <span  style="font-weight: 800">5 menit</span> </h6>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12">
                  <div class="d-md-flex d-none" style="height: 60px;">

                  </div>
                  <div class="d-md-flex d-none justify-column-center flex-column">
                    <div class="card card-solusi h-100">
                      <div class="card-body">
                        <h6>Sebuah aplikasi <span style="font-weight: 800"> omni-channel e-commerce management platform dan gudang canggih </span> yang terintegrasi dengan teknologi sehingga menciptakan efektivitas dan efisiensi proses jual beli di marketplace</h6>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="d-flex justify-column-center flex-column">
                    <div class="card card-solusi h-100">
                      <div class="card-body">
                        <h6>
                        </h6>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>

        </div>
        <div style="height: 75px;">

        </div>

    </section>
    <section class="home__works">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div class="row align-items-center justify-content-between">
                    <div class=" col-lg-12 home__works_left mb-md-3 mb-2">

                        <h2 class=" text-center">Hyperlocal <span>Fulfillment</span>  </h2>

                        <h6 class="text-center">Sebuah layanan yang akan memenuhi kebutuhan anda sebagai penjual secara end-to-end. Barang akan distok, dikirim dan diterima oleh customer dengan mudah, cepat dan tanpa ribet.</h6>
                    </div>
                    <!-- <div class=" col-lg-5 col-md-6 home__works_left mb-md-3 mb-2">


                        <h6 class="text-md-right text-center">Sebuah layanan yang akan memenuhi kebutuhan anda sebagai penjual secara end-to-end. Barang akan distok, dikirim dan diterima oleh customer dengan mudah, cepat dan tanpa ribet.</h6>

                    </div> -->
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card card-solusi-2">
                             <div class="card-body">
                               <img src="{{asset('images/solusi/map.png')}}" alt="" class="img-solusi mb-4">
                               <h6 class="text-center"> <span>Gudangin</span> mengatur pendistribusian barang ke lokasi-lokasi area penjualan.</h6>
                             </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card card-solusi-2">
                             <div class="card-body">
                               <img src="{{asset('images/solusi/phone.png')}}" alt="" class="img-solusi mb-4">
                               <h6 class="text-center"> <span>Gudangin</span> mencatat perpindahan barang dari pusat ke gudang area dan sinkronisasi penjualan dari marketplace.</h6>
                             </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="card card-solusi-2">
                            <div class="card-body">
                              <img src="{{asset('images/solusi/delivery.png')}}" alt="" class="img-solusi mb-4">
                              <h6 class="text-center"> Brand atau produk kini memiliki area distribusi online dengan menggunakan <span>Gudangin</span> sebagai enabler. </h6>
                            </div>
                         </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class=" col-lg-7">
                      <div class="swiper myFulfil">
                         <div class="swiper-wrapper">
                           <div class="swiper-slide">

                           </div>
                           <div class="swiper-slide">

                           </div>
                           <div class="swiper-slide">

                           </div>


                         </div>
                         <div class="swiper-button-next"></div>
                         <div class="swiper-button-prev"></div>
                         <div class="swiper-pagination"></div>
                       </div>

                    </div> -->
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
    <section class="home__fitur">
        <!-- <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn"> -->
        <div class="container" style="position: relative; z-index: 3" data-aos="fade-up">
          <div style="height: 50px;">

          </div>
            <div class="inner__container">
              <!-- <h4 style="font-weight: 300"># </h4> -->
              <!-- <div class="row justify-content-between">
                <div class="col-lg-5 col-md-5">
                  <p>Revolusi dalam sistem pengiriman sedang berjalan. Sekarang siapapun bisa jadi dropshipper dari <span>gudangin</span>! Cukup ikuti layanan <strong><span>TipBox</span></strong> dan dapatkan keuntungannya!</p>
                </div>
                <div class="col-lg-5 col-md-6 ">
                  <h2 class="text-md-right text-center" > <span>Tip</span>Box</h2>
                </div>
              </div> -->

              <div class="row mt-4 justify-content-center">
                  <div class="col-lg-12 mb-2">
                    <h2 class="text-center mb-1" > <span>Tip</span>Box</h2>
                    <h6 class="text-center" style="font-size: 18px; line-height: 27px;">Revolusi dalam sistem pengiriman sedang berjalan. Sekarang siapapun bisa jadi dropshipper dari <span>gudangin</span>! Cukup ikuti layanan <strong><span>TipBox</span></strong> dan dapatkan keuntungannya!</h6>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card tipbox-card">
                      <div class="card-body" >
                          <img src="{{asset('images/solusi/sent.png')}}" alt="" class="mb-3">
                          <h5 class="title" >Shop & Collect</h5>
                          <p class="details">Mudahkan pembeli anda. Mereka cukup belanja online dan ambil belanjaan mereka, tanpa perlu berinteraksi dengan kurir ekspedisi. Lebih aman, hygienis dan dekat dengan pembeli.</p>
                      </div>
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card tipbox-card">
                      <div class="card-body" >
                          <img src="{{asset('images/solusi/cardboard.png')}}" alt="" class="mb-3">
                          <h5 class="title" >Drop Off</h5>
                          <p class="details">Dengan layanan <span>TipBox</span>  akan mempermudah penjual online mengirim barang ke pembeli. Penjual cukup drop ke drop-off point TipBox terdekat dengan pembeli dan tidak perlu mengirim barang hingga ke lokasi pembeli.
</p>
                      </div>
                    </div>

                  </div>
                  <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card tipbox-card">
                      <div class="card-body" >
                          <img src="{{asset('images/solusi/tipbox-small.png')}}" alt="" class=" mb-3">
                          <h5 class="title" >Return</h5>
                          <p class="details">Barang yang dikirim salah atau rusak? Pembeli dapat menaruh  barang belanjaan online yang tidak sesuai ke loker<span> TipBox</span>, memudahkan pembeli anda jadi tidak perlu repot mengurus ke ekspedisi.</p>
                      </div>
                    </div>

                  </div>

              </div>

            </div>
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
    <script>
        AOS.init();
        // $('#exampleModal').modal('show')
    </script>
    <script>
      var swiper = new Swiper(".myFulfil", {
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
    // when window width is >= 320px
          500: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          // when window width is >= 480px
          // 996: {
          //   slidesPerView: 3,
          //   spaceBetween: 30
          // },


        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        mousewheel: true,
        keyboard: true,
      });
    </script>
@endsection
