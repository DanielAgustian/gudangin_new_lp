@extends('master')

@section('cssinline')
    <link href="{{ asset('/css/pages/blogs-detail.css') }}?v=0.5.5" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/pages/blogs.css') }}?v=0.2.4  " rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/pages/new-style.css') }}?v=0.4.7" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/pages/lp.css')}}?v=0.0.2.8">
    <link
        rel="stylesheet"
        href="https://unpkg.com/swiper/swiper-bundle.min.css"
      />
@endsection

@section('content')

<section class="home__benefit section-form " >

  <div style="height: 170px">
  </div>
  <div class="container">
    <h1 class="text-center bl-title mb-5">{{$blog->blogTitle}}</h1>
    <img src="{{asset($blog->blogImage1)}}" alt="" class="w-100 mb-4">
    <div class="bl-detail">
      {!!$blog->blogContent!!}
    </div>
    <div style="height: 50px;">

    </div>
    <a class="click-btn" href="{{route('blogPage')}}">
      <div class="d-flex align-items-center back-btn">
          <i class="fas fa-chevron-left"></i> <p class="mb-0">Kembali</p>
      </div>
    </a>
    <div class="line-divide">

    </div>

    <h4 style="color: black" class="mx-2">Artikel Lain</h4>
    <div class="row">
      @foreach($blogs as $blog)
        @component('component.blog-card')
          @slot('di_detail')
            true
          @endslot
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
    </div>
  </div>

  <!-- <img src="{{ asset('images/ornament/benefit-wave.svg') }}" alt="" class="home__benefit_orn"> -->

  <div style="height: 60px;">

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
    <script type="text/javascript">
        $('.blog-card').on('click', function(){
          let slug = $(this).data('slug');
          location.href = "https://gudangin.id/blogs/"+slug;
        })
    </script>
@endsection
