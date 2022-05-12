@extends('master')

@section('cssinline')
    <link href="{{ asset('/css/pages/about-us.css') }}?v=0.2.1" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/pages/new-style.css') }}?v=0.4.7" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/pages/lp.css')}}?v=0.0.2.8">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
      />
@endsection

@section('content')
    <section class="pricing__hero faq" style="z-index: 3;">
        <div class="container text-left">
            <h1>Tentang gudangin.</h1>

            <p style="color: white">
                Asal kami dan visi kami untuk bisnis kalian.
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
        <div class="container" data-aos="fade-up" style="position: relative; z-index: 3">
            <div class="inner__container">
              <div style="height: 35px;">

              </div>


                <div class="row align-items-center">
                    <div class="col-md-5 mb-md-0 mb-5">
                      <img src="{{ asset('images/new-home/gudangin-alt.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-md-7 ">
                      <h4 style="font-weight: 300" class="d-md-block d-none">#tentang<span>Gudangin</span> </h4>
                      <h2>Sejarah <span>gudangin</span></h2>
                      <p style="text-align:justify">Berdiri sejak 28 Oktober 2021, PT Gudang Awan Indonesia ("PT GAI") dengan Akta Pendirian No 1773 Tanggal 28-10-2021 di hadapan Notaris H.R Remy Suraadiningrat S.H., M.H. M.Kn., notaris di Tangerang Selatan, dengan Surat Keputusan Kemenkumham RI tentang Pengesahan Pendirian Badan Hukum Nomor AHU0069714.AH.01.01. tahun 2021, bergerak di Bidang Kegiatan Usaha Penerbitan Piranti Lunak (software), pergudangan dan penyimpanan serta perdagangan melalui berbagai media, terafiliasi dengan PT Yokesen Teknologi Indonesia.</p>
                      <p style="text-align:justify">Melalui brand utamanya <span>Gudangin.id</span> (Gudangin), saat ini PT GAI menjadi penyedia layanan dan platform omni-channel sistem manajemen marketplace and warehouse untuk seluruh masyarakat Indonesia.
                      </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home__fitur">
        <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">
        <div class="container" style="position: relative; z-index: 3" data-aos="fade-up">
          <div style="height: 50px;">

          </div>
            <div class="inner__container">
              <h4 style="font-weight: 300">#<span>gudangin</span>MasaDepan </h4>
              <h2>Visi dan Misi <span>gudangin</span></h2>
              <div class="row mt-4">
                <div class="col-lg-4 col-md-6 mb-3">
                  <div class="card card-visi rounded ">
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
                <div class="col-lg-4 col-md-6 mb-3">
                  <div class="card card-visi rounded ">
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
                <div class="col-lg-4 col-md-6 mb-3">
                  <div class="card card-visi rounded ">
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
    </section>
    <section class="home__works">
        <div class="container" data-aos="fade-up">
            <div class="inner__container">
                <div class="row align-items-center justify-content-between">
                  <div class=" col-lg-6  order-lg-1 order-2">
                    <div class="row mb-4">
                      <div class="col-lg-8 col-md-9 col-12">
                        <div class="card card-value">
                          <div class="card-body">
                            <i class="fas fa-bullseye mb-3"></i>
                            <h4 class="titles">Cepat, Tepat & Excellence</h4>
                            <p class="details">Kepuasan pelanggan selalu menjadi fokus
                                utama kami. Untuk dapat memenuhi hal
                                tersebut, kami selalu melakukan pelayanan
                                dengan sepenuh hati dan kemampuan yang
                                terbaik
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row justify-content-end mb-4">
                      <div class="col-lg-8 col-md-9 col-12">
                        <div class="card card-value">
                          <div class="card-body">
                            <i class="fas fa-balance-scale mb-3"></i>
                            <h4 class="titles">Work in Integrity</h4>
                            <p class="details">Integritas dalam profesionalisme dan
                                tanggung jawab terhadap pelayanan
                                menjadi kekuatan untuk bisnis yang sustain
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class=" col-lg-5 home__works_left order-lg-2 order-1">
                        <h4>#gudanginWayOfLife</h4>
                        <h2><span>gudangin</span> Values</h2>
                        <h6>gudangin memiliki 2 nilai yang membuat kami bisa tumbuh sampai sejauh ini.</h6>

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
