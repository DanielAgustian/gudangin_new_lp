@extends('master')

@section('cssinline')
    <link href="{{ asset('/css/pages/partner.css') }}?v=0.0.4" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/pages/new-style.css') }}?v=0.4.7" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/pages/lp.css')}}?v=0.0.2.9">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
      />
@endsection

@section('content')
    <section class="pricing__hero faq" style="z-index: 3;">
        <div class="container text-left">
            <h1>Partner gudangin</h1>

            <p style="color: white">
                Organisasi yang bekerja sama dengan kami dalam berbagai sisi.
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
            <div class="inner__container">
              <div style="height: 35px;">

              </div>


                <div class="row align-items-center ">

                    <div class="col-lg-12 ">
                      <h6 style="font-weight: 300" class="text-center">#<span>gudangin</span>Jualan </h6>
                      <h2 class="text-center">Marketplace di <span>gudangin</span></h2>
                      <p style="text-align:justify" class="text-center mb-2">Kami telah bekerja sama dengan beberapa marketplace mumpuni di Indonesia. Berikut adalah beberapa marketplace tersebut.</p>

                    </div>
                    <div class="col-lg-12">
                      <div class="row justify-content-around">
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/marketplace/tokped.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/marketplace/shopee.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/marketplace/blibli.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 75px;">

        </div>
        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
            <div class="inner__container">
              <div style="height: 35px;">

              </div>


                <div class="row align-items-center ">

                    <div class="col-lg-12 ">
                      <h6 style="font-weight: 300" class="text-center">#<span>gudangin</span>NgirimBarang</h6>
                      <h2 class="text-center">Partner Pengiriman di <span>gudangin</span></h2>
                      <p style="text-align:justify" class="text-center mb-2">Untuk memenuhi kebutuhan anda dalam berbisnis, kami telah bermitra dengan beberapa perusahaan pengiriman terbaik di Indonesia. Berikut adalah beberapa perusahaan pengiriman tersebut.</p>

                    </div>
                    <div class="col-lg-12">
                      <div class="row justify-content-around">
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/kurir/gosend.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/kurir/grabexpress.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/kurir/jne.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/kurir/jnt.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                          <div class="col-lg-3 col-md-4 col-6">
                            <img src="{{asset('images/kurir/sicepat.png')}}" alt="" class="w-100 rounded img-marketplace">
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 85px;">

        </div>
    </section>

    <!-- <section class="home__fitur">
        <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">
        <div class="container" style="position: relative; z-index: 3" data-aos="fade-up">
          <div style="height: 50px;">

          </div>
            <div class="inner__container">
              <h4 style="font-weight: 300">#<span>gudangin</span>MasaDepan </h4>
              <h2>Visi dan Misi <span>gudangin</span></h2>
              <div class="row mt-4">
                <div class="col-lg-4 col-md-6">
                  <div class="card card-visi rounded">
                    <div class="card-body">
                      <div class="d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                          <i class="fab fa-shopify"></i>
                        </div>

                        <h6 class="mb-0 detail">Mempermudah proses operasional pemilik pengusaha online melalui integrasi toko dari berbagai platform e-commerce</h6>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card card-visi rounded">
                    <div class="card-body">
                      <div class="d-flex flex-column justify-content-center">


                        <h6 class="mb-0 detail">Membantu pemilik pengusaha online untuk
                          menjangkau konsumen di seluruh Nusantara
                          dengan gudangin yang tersebar di seluruh daerah
                          di Indonesia</h6>
                          <div class="d-flex align-items-center justify-content-center mt-4">
                            <i class="fas fa-globe-asia"></i>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="card card-visi rounded">
                    <div class="card-body">
                      <div class="d-flex flex-column justify-content-center">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                          <i class="fas fa-cogs"></i>
                        </div>

                        <h6 class="mb-0 detail">Menyediakan solusi teknologi yang berorientasi
                          kepada kepuasan pelanggan</h6>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
    </section> -->

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
@endsection
