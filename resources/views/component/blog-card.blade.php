@if($di_detail == 'true')

<div class="col-lg-3 col-md-4 col-6">

    <div class="blog-card mx-1 my-2 p-2 rounded bg-white" data-slug="{{$slug}}" style="cursor:pointer">
        <img src="{{$url}}" alt="{{$title}}"  class="w-100 mb-2 rounded">
        <h6 class="title-blog">
          {{$title}}
        </h6>
        <div class="detail-blog">
            {!!$detail!!}
        </div>
        <p class="read-more mt-3 mb-0">Read More</p>
    </div>

</div>

@else
<div class=" col-md-4 col-6">
    <div class="blog-card mx-1 my-2 p-2 rounded bg-white" data-slug="{{$slug}}" style="cursor:pointer">
        <img src="{{$url}}" alt="{{$title}}"  class="w-100 mb-2 rounded">
        <h6 class="title-blog">
          {{$title}}
        </h6>
        <div class="detail-blog">
            {!!$detail!!}
        </div>
        <p class="read-more mt-3 mb-0">Read More</p>
    </div>


</div>
@endif
