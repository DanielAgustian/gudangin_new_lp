
@if($id == "1")

<div class="card why-card orange ">
  <div class="div-img shadow rounded">
    <img src="{{$url}}" class="img-why">
  </div>

  <div class="card-body">
    <h3 class="why-title">{{$title}}</h3>
    {!! $details !!}
  </div>
</div>
@else
<div class="card why-card  white ">
  <div class="div-img shadow rounded">
    <img src="{{$url}}" class="img-why">
  </div>
  <div class="card-body">
    <h3 class="why-title">{{$title}}</h3>
    {!! $details !!}
  </div>
</div>
@endif
