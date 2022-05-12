@extends('master')

@section('cssinline')
    <link href="{{ asset('/css/pages/blogs.css') }}?v=0.3.0 " rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/pages/pagination.css') }}?v=0.0.1 " rel="stylesheet" type="text/css">
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
        <h1 class="text-center">Coming Soon</h1>

        <p style="color: white" class="text-center">
            Kita akan meluncurkan feature ini di masa depan!
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
<div style="height: 75px;">

</div>
<!-- <section class="home__benefit section-form " data-aos = "fade-up">
    <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn">
  <div style="height: 55px;">

  </div>

  <div class="container blogs-list">
    <div class="row">
      <div class="col-lg-8 order-lg-1 order-2">
          <div class="row">
            @if($blogs)
              @foreach($blogs as $blog)
                @component('component.blog-card')
                  @slot('slug')
                    {{$blog->blogSlug}}
                  @endslot
                  @slot('url')
                    {{asset($blog->blogImage1)}}
                  @endslot
                  @slot('title')
                    {{$blog->blogTitle}}
                  @endslot
                  @slot('detail')
                    {!!$blog->blogContent!!}
                  @endslot
                @endcomponent
              @endforeach
            @else
              <h3>Artikel belum ada, silakan cek beberapa saat lagi.</h3>
            @endif

          </div>
          <div class="d-flex align-items-center justify-content-center my-pagi" style="z-index: 50">

                  {{ $blogs->links('vendor.pagination.bootstrap-4') }}

          </div>
      </div>
      <div class="col-lg-4 order-lg-2 order-1">
        <div class="card card-latest">
          <div class="card-body">
            <h3 style="color: gray" class="mb-3"> Latest Article</h3>

            @if($latest)
              @foreach($latest as $title)
                <a href="{{route('blogDetailPage', $title->blogSlug)}}"><h6 class="title-latest">{{$title->blogTitle}}</h6></a>
              @endforeach
            @else
              <h4 style="color: gray" class="mb-3"> Maaf Artikel belum Ada.</h4>
            @endif

          </div>
        </div>
      </div>
    </div>

  </div>
  <div style="height: 75px;">

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
    <script type="text/javascript">
        $('.blog-card').on('click', function(){
          let slug = $(this).data('slug');
          location.href = "https://gudangin.id/blogs/"+slug;
        })
    </script>
@endsection
